<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::enableForeignKeyConstraints();
      Schema::create('admins', function (Blueprint $table) {
        $table->engine = 'InnoDB';
        $table->increments('id');
        $table->integer('admin_right')->unsigned();
        $table->integer('user_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users')
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
      Schema::dropIfExists('admins');
    }
}
