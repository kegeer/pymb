<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('samples', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('batch_id');
            $table->integer('client_id');
            $tabel->string('ori_num');
            $tabel->string('py_num');
            $table->float('amount');
            $table->timestamp('sampling_time');
            $table->timestamp('split_time');
            $table->tinyInteger('split_type');
            $table->timestamp('due_time');
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
        Schema::dropIfExists('samples');
    }
}
