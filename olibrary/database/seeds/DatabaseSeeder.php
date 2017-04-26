<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $users = factory(App\User::class, 10)->create();
    // $authoritys = factory(App\Authoritys::class, 10)->create();
    // $authors = factory(App\Authors::class, 30)->create();
    $exemplaires = factory(App\Exemplaires::class, 30)->create();
  }
}
