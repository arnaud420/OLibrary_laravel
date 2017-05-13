<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthoritysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::enableForeignKeyConstraints();
      Schema::create('authoritys', function (Blueprint $table) {
        $table->engine = 'InnoDB';
        $table->increments('id');
        $table->string('authority_name');
        $table->string('authority_email')->unique();
        $table->string('authority_phone');
        $table->integer('families_id')->unsigned();
        $table->foreign('families_id')->references('id')->on('family_authorities')
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
      Schema::dropIfExists('authoritys');
    }
}
