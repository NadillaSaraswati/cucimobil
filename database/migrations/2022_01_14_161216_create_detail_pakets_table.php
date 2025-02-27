<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pakets', function (Blueprint $table) {
            $table->id('id_detail_paket');
            $table->bigInteger('layanan_id')->unsigned()->index();
            $table->foreign('layanan_id')->references('id')->on('layanans')->onDelete('cascade');
            $table->bigInteger('paket_id')->unsigned()->index();
            $table->foreign('paket_id')->references('id')->on('pakets')->onDelete('cascade');
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
        Schema::dropIfExists('detail_pakets');
    }
}
