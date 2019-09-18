<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSasaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sasarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tujuan_id');
            $table->string('sasaran');
            $table->timestamps();
            # foreign key
            $table->foreign('tujuan_id')
                  ->references('id')
                  ->on('tujuans')
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
        Schema::dropIfExists('sasarans');
    }
}
