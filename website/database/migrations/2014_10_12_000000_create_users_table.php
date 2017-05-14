<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->increments('id');
      $table->string('first_name');
      $table->string('last_name');
      $table->string('email')->unique();
      $table->string('password');
      $table->string('phone')->nullable();
      $table->string('address')->nullable();
      $table->string('postal_code')->nullable();
      $table->string('city')->nullable();
      $table->boolean('admin')->default(false);
      $table->rememberToken();
      $table->timestamps();
    });

    Schema::create('exemplaires_user', function(Blueprint $table) {
      $table->integer('user_id');
      $table->integer('exemplaires_id');
      $table->primary(['user_id', 'exemplaires_id']);
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
    Schema::dropIfExists('users');
    Schema::dropIfExists('user_exemplaire');
  }
}
