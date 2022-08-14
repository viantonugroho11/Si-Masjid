<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('va_number')->nullable();
            $table->string('bank')->nullable();
            $table->string('transaction_time')->nullable();
            $table->string('transaction_status');
            $table->string('transaction_id');
            $table->string('signature_key');
            $table->string('settlement_time')->nullable();
            $table->string('payment_type');
            $table->string('paid_at')->nullable();
            $table->string('amount')->nullable();
            $table->string('order_id');
            $table->string('merchant_id');
            $table->string('gross_amount');
            $table->string('froud_status');
            $table->string('currency')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
