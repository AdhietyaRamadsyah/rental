<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('returns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_refund');
            $table->unsignedInteger('nofaktur_id');
            $table->unsignedInteger('kodebarang_id');
            $table->unsignedInteger('namepeminjam_id');
            $table->unsignedInteger('tglpinjam_id');
            $table->unsignedInteger('tglkembali_id');
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
        Schema::dropIfExists('returns');
    }
}
