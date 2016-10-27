<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatReportDiseaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resport_disease', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('report_id');
            $table->tinyInteger('name');
            $table->string('ref');
            $table->string('value');
            $table->tinyInteger('image');
            $table->text('note');
            $table->tinyInteger('color');
            $table->boolean('visiable');
            $table->timestamps();
            $table->foreign('report_id')->references('id')->on('reports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resport_disease');
    }
}
