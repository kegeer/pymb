<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchProtocolRoadmapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protocol_roadmap', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('protocol_id')->unsigned();
            $table->integer('pipeline_id')->unsigned();
            $table->tinyInteger('step');
            $table->json('parameter');
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
        Schema::dropIfExists('protocol_roadmap');
    }
}
