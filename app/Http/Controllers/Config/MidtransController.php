<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Backend\Kampanye\KampanyeController;
use App\Http\Controllers\Controller;
use App\Models\DataKampanye;
use App\Models\Transaksi;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Midtrans\Midtrans;

class MidtransController extends Controller
{
    public function store(Request $request)
    {

        if(Auth::check()==false){
            return redirect('/login-member');
        }

        $idZis = $request->id_zis;
        $kampaye = DataKampanye::find($idZis);
        $nameKG="";
        if($kampaye->kategori == 'Zakat'){
            $nameKG = 'ZKT';
        }elseif($kampaye->kategori == 'Infaq'){
            $nameKG = 'INF';
        }else{
            $nameKG = 'SDQ';
        }
        $tanggal = date('ymd');
        $no = "0000";
        $nourut = Transaksi::max('order_id');
        $cektanggal = substr($nourut, 3, 6);
        // dd($cektanggal);
        $hasil_urut = $tanggal . $no;
        if ($tanggal == $cektanggal) {
            $no_urut = substr($nourut, 3, 10) + 1;
            $hasil = $no_urut + 1;
        } else {
            $hasil = $hasil_urut + 1;
        }
        // dd($hasil);
        $orderid = $nameKG . $hasil;

        $harga = $request->harga;
        $jumlah = $request->jumlah;
        $total= $harga * $jumlah;

        \Midtrans\Config::$serverKey = 'SB-Mid-server-Gc4b1QGzzYc6Elv4wi7iDt10';

        // Uncomment for production environment
        \Midtrans\Config::$isProduction = false;

        // Uncomment to enable sanitization
        \Midtrans\Config::$isSanitized = true;

        // Uncomment to enable 3D-Secure
        \Midtrans\Config::$is3ds = true;

        $customer_details = array(
            'first_name'    => Auth::user()->name,
            // 'last_name'     => "Litani",
            'email'         => Auth::user()->email,
            // 'phone'         => "081122334455"
            // 'billing_address'  => $billing_address,
            // 'shipping_address' => $shipping_address
        );

        // $kategoriId = array(
        //     'merchant_id'=>$kategori_id
        // );

        $transaction_details = array(
            'order_id' => $orderid,
            'gross_amount' => $total // no decimal allowed for creditcard
        );

        // Fill SNAP API parameter
        $params = array(
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details,
            // 'item_details' => $item_details,
        );

        Transaksi::create([
            'transaction_id'=>"0",
            'order_id'=>$orderid,
            'payment_type'=>"0",
            'id_user'=>Auth::user()->id,
            'id_zis'=>$idZis,
            'gross_amount' => $total,
            'transaction_status'=>"Belum Transaksi"
        ]);

        try {
            // Get Snap Payment Page URL
            $paymentUrl = \Midtrans\Snap::createTransaction($params)->redirect_url;
            return redirect($paymentUrl);
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    public function finish(Request $request)
    {
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$serverKey = 'SB-Mid-server-Gc4b1QGzzYc6Elv4wi7iDt10';
        $orderId=$request->get('order_id');
        $status = \Midtrans\Transaction::status($orderId);
        $i=0;
        foreach($status as $k=>$val){
            if($k=="transaction_time"){
                $transaksi_waktu=$val;
            }else if($k=="gross_amount"){
                $jumlah=$val;
            }else if($k=="payment_type"){
                $tipe=$val;
            }else if($k=="transaction_status"){
                $transaksi_status=$val;
            }else if($k=="transaction_id"){
                $id_transaksi=$val;
            }elseif($k=="order_id"){
                $order_id=$val;
            }
        }
        // dd($jumlah);
        $transaksi = Transaksi::where('order_id','=',$orderId)->first();
        $transaksi->update([
            'transaction_id'=>$id_transaksi,
            'payment_type'=>$tipe,
            'transaction_status'=>$transaksi_status
        ]);
        if($transaksi){
            return redirect()->route('ziskampanye.index')->with(['success' => 'Alhamdulillah Transaksi Kamu Berhasil']);
        }else{
            return redirect()->route('ziskampanye.index')->with(['success' => 'Alhamdulillah Transaksi Kamu Belum Terselesaikan']);
        }
    }

    public function notifikasi(Request $request)
    {
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$serverKey = 'SB-Mid-server-Gc4b1QGzzYc6Elv4wi7iDt10';
        $notif = new \Midtrans\Notification();
        $transaction = $notif->transaction_status;
        $transactionid = $notif->transaction_id;
        $transaction_time = $notif->transaction_time;
        $type = $notif->payment_type;
        $order_id = $notif->order_id;
        $fraud = $notif->fraud_status;
        $jumlah = $notif->gross_amount;
        if ($transaction == 'capture') {
            // For credit card transaction, we need to check whether transaction is challenge by FDS or not
            if ($type == 'credit_card') {
                if ($fraud == 'challenge') {
                    // TODO set payment status in merchant's database to 'Challenge by FDS'
                    // TODO merchant should decide whether this transaction is authorized or not in MAP
                    echo "Transaction order_id: " . $order_id . " is challenged by FDS";
                } else {
                    // TODO set payment status in merchant's database to 'Success'
                    echo "Transaction order_id: " . $order_id . " successfully captured using " . $type;
                }
            }
        } else if ($transaction == 'settlement') {
            // TODO set payment status in merchant's database to 'Settlement'
            $transaksi = Transaksi::where('order_id', '=', $order_id)->first();

            $transaksi->update([
                'transaction_id' => $transactionid,
                'payment_type' => $type,
                'transaction_status' => $transaction
            ]);
            echo "Transaction order_id: " . $order_id . " successfully transfered using " . $type;
        } else if ($transaction == 'pending') {
            // TODO set payment status in merchant's database to 'Pending'
            $transaksi = Transaksi::where('order_id', '=', $order_id)->first();
            $transaksi->update([
                'transaction_id' => $transactionid,
                'payment_type' => $type,
                'transaction_status' => $transaction
            ]);
            echo "Waiting customer to finish transaction order_id: " . $order_id . " using " . $type;
        } else if ($transaction == 'deny') {
            // TODO set payment status in merchant's database to 'Denied'
            $transaksi = Transaksi::where('order_id', '=', $order_id)->first();
            $transaksi->update([
                'transaction_id' => $transactionid,
                'payment_type' => $type,
                'transaction_status' => $transaction
            ]);
            echo "Payment using " . $type . " for transaction order_id: " . $order_id . " is denied.";
        } else if ($transaction == 'expire') {
            // TODO set payment status in merchant's database to 'expire'
            $transaksi = Transaksi::where('order_id', '=', $order_id)->first();
            $transaksi->update([
                'transaction_id' => $transactionid,
                'payment_type' => $type,
                'transaction_status' => $transaction
            ]);
            echo "Payment using " . $type . " for transaction order_id: " . $order_id . " is expired.";
        } else if ($transaction == 'cancel') {
            // TODO set payment status in merchant's database to 'Denied'
            $transaksi = Transaksi::where('order_id', '=', $order_id)->first();
            $transaksi->update([
                'transaction_id' => $transactionid,
                'payment_type' => $type,
                'transaction_status' => $transaction
            ]);
            echo "Payment using " . $type . " for transaction order_id: " . $order_id . " is canceled.";
        }
    }
}
