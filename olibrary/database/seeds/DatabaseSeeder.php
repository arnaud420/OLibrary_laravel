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
    $authors = factory(App\Authors::class, 30)->create();
    foreach ($authors as $author) {
      $author->artworks = factory(App\Artworks::class, rand(1, 30))->create(['authors_id' => $author->id]);
      foreach($author->artworks as $artwork) {
        $artwork->exemplaires = factory(App\Exemplaires::class, rand(1, 5))->create(['artworks_id' => $artwork->id]);
      }
    }
    // $exemplaires = factory(App\Exemplaires::class, 100)->create();
  }
}
