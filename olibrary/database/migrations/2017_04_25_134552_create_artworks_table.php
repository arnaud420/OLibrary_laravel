<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::enableForeignKeyConstraints();
      Schema::create('artworks', function (Blueprint $table) {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('artwork_title');
        $table->date('artwork_date');
        $table->text('resume');
        $table->string('collection');
        $table->integer('authors_id')->unsigned();
        $table->foreign('authors_id')->references('id')->on('authors')
          ->onDelete('cascade')->onUpdate('cascade');
        $table->integer('types_id')->unsigned();
        $table->foreign('types_id')->references('id')->on('types')
          ->onDelete('cascade')->onUpdate('cascade');
        $table->integer('authorities_id')->unsigned();
        $table->foreign('authorities_id')->references('id')->on('authoritys')
          ->onDelete('cascade')->onUpdate('cascade');
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
      Schema::disableForeignKeyConstraints();
      Schema::dropIfExists('artworks');
    }
}
