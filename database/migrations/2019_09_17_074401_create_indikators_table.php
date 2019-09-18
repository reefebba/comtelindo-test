<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndikatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indikators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sasaran_id');
            $table->string('indikator');
            $table->float('kondisi_awal', 4, 2);
            $table->float('kondisi_akhir',4, 2);
            $table->float('tahun_2017', 4, 2);
            $table->float('tahun_2018', 4, 2);
            $table->float('tahun_2019', 4, 2);
            $table->float('tahun_2020', 4, 2);
            $table->float('tahun_2021', 4, 2);
            $table->timestamps();
            # foreign key
            $table->foreign('sasaran_id')
                  ->references('id')
                  ->on('sasarans')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indikators');
    }
}
