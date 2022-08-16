<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Backend\Kampanye\KampanyeController;
use App\Http\Controllers\Controller;
use App\Models\DataKampanye;
use App\Models\Transaksi;
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
        $cektanggal = substr($nourut, 0, 6);
        $hasil_urut = $tanggal . $no;
        $hasil = "";
        if ($tanggal == $cektanggal) {
            $hasil = $nourut + 1;
        } else {
            $hasil = $hasil_urut + 1;
        }
        $orderid = $nameKG . $hasil;

        $harga = $request->harga;
        $jumlah = $request->jumlah;
        $total= $harga * $jumlah;

        \Midtrans\Config::$serverKey = 'SB-Mid-server-SPoujZg8TIYwFQGfYez8_M6H';

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
        \Midtrans\Config::$serverKey = 'SB-Mid-server-ii1gBdtLV-5JFdb11U_lyE1O';
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
}
