<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sample_id')->index();
            $table->json('gut_note');
            $table->json('metabolism_note');
            $table->json('disease_note');
            $table->json('papa_note');
            $table->json('papa_note_disease');
            $table->tinyInteger('papa_note_disease_color');
            $table->json('food');
            $table->json('function_food');
            $table->json('life_note');
            $table->text('common_bacteria_summary');
            $table->tinyInteger('common_bacteria_summary_color');
            $table->json('common_bacteria_note');
            $table->text('harm_bacteria_summary');
            $table->tinyInteger('harm_bacteria_summary_color');
            $table->json('harm_bacteria_note');
            $table->text('carbohydrate_summary');
            $table->tinyInteger('carbohydrate_summary_color');
            $table->json('carbohydrate_note');
            $table->text('lipid_summary');
            $table->tinyInteger('lipid_color');
            $table->json('lipid_note');
            $table->text('protein_summary');
            $table->tinyInteger('protein_summary_color');
            $table->json('protein_note');
            $table->text('immune_summary');
            $table->tinyInteger('immune_summary_color');
            $table->json('immune_note');
            $table->text('benefit_summary');
            $table->tinyInteger('benefit_summary_color');
            $table->json('benefit_note');
            $table->text('harm_summary');
            $table->tinyInteger('harm_summary_color');
            $table->json('harm_note');
            $table->text('diabetesii_summary');
            $table->tinyInteger('diabetesii_summary_color');
            $table->json('diabetesii_note');
            $table->text('ibd_summary');
            $table->tinyInteger('ibd_summary_color');
            $table->json('ibd_note');
            $table->text('coloncancer_summary');
            $table->tinyInteger('coloncancer_summary_color');
            $table->json('coloncancer_note');
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
        Schema::dropIfExists('reports');
    }
}
