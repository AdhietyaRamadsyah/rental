<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_faktur');
            $table->unsignedInteger('kodebarang_id');
            $table->unsignedInteger('nameitem_id');
            $table->string('name_peminjam');
            $table->string('jumlah_pinjaman');
            $table->string('tgl_pinjam');
            $table->string('tgl_kembali');
            $table->string('idr');
            $table->string('email')->unique();
            $table->string('phone')->unique();
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
        Schema::dropIfExists('transactions');
    }
}
