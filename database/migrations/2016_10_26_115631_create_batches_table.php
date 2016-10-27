<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ori_num');
            $table->string('py_num');
            $table->tinyInteger('samples_type');
            $table->integer('samples_amount');
            $table->tinyInteger('trans_method');
            $table->timestamp('arrive_time');
            $table->tinyInteger('arrive_status');
            $table->tinyInteger('store_method');
            $table->string('store_location');
            $table->string('sender');
            $table->string('sender_contact');
            $table->timestamp('send_time');
            $table->string('recipients');
            $table->string('express_num');
            $table->text('note');
            $table->integer('manager');
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
        Schema::dropIfExists('batches');
    }
}
