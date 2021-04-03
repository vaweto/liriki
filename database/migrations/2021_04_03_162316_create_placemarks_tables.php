<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlacemarksTables extends Migration
{
    public function up()
    {
        Schema::create('placemarks', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->integer('position')->unsigned()->nullable();

        });

        Schema::create('placemark_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'placemark');
            $table->string('title', 200)->nullable();
            $table->text('content')->nullable();
        });

        Schema::create('placemark_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'placemark');
        });

        Schema::create('placemark_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'placemark');
        });
    }

    public function down()
    {
        Schema::dropIfExists('placemark_revisions');
        Schema::dropIfExists('placemark_translations');
        Schema::dropIfExists('placemark_slugs');
        Schema::dropIfExists('placemarks');
    }
}
