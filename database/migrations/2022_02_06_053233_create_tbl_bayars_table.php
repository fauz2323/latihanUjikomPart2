<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBayarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_bayars', function (Blueprint $table) {
           $table->string('nik',20);
           $table->string('nm_bank_pengirim',50);
           $table->string('nm_pengirim',30);
           $table->string('norek_pengirim',30);
           $table->string('file',50);
           $table->string('tanggal_upload',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_bayars');
    }
}
