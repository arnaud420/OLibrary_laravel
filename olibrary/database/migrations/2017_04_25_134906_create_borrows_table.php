<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::enableForeignKeyConstraints();
      Schema::create('borrows', function (Blueprint $table) {
        $table->engine = 'InnoDB';
        $table->integer('user_id')->unsigned();
        $table->integer('exemplaire_id')->unsigned();
        $table->primary(['user_id', 'exemplaire_id']);
        $table->integer('rate')->nullable();
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
      Schema::dropIfExists('borrows');
    }
}
