<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateLabelsTable extends Migration
{
    public function up()
    {
        Schema::create(Config::get('labels.tables.labels'), function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug');
            $table->string('name');
            $table->string('description');
            $table->string('color')->nullable();
            $table->timestamps();
        });

        Schema::create(Config::get('labels.tables.model_has_labels'), function (Blueprint $table) {
            $table->unsignedBigInteger('label_id');
            $table->morphs('model');
        });
    }

    public function down()
    {
        Schema::dropIfExists(Config::get('labels.tables.model_has_labels'));
        Schema::dropIfExists(Config::get('labels.tables.labels'));
    }
}
