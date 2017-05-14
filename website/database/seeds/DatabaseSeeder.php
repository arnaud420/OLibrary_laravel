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
    $families = [
      'Musée',
      'Entreprise',
      'Particulier',
      'Etat',
      'Association',
      'Editeur'
    ];

    $types = [
      'Roman', 
      'Science-fiction', 
      'Nouvelles', 
      'Pamphlet', 
      'Thriller', 
      'Aventure', 
      'Fantastique',
      'Science', 
      'Dictionnaire', 
      'Magazine', 
      'Bande-dessinée', 
      'Enfance'
    ];

    $users = factory(App\User::class, 10)->create();

    DB::table('users')->insert([
      'first_name' => 'admin',
      'last_name' => 'admin',
      'email' => 'admin@admin.com',
      'password' => bcrypt('password'),
      'is_admin' => true
    ]);

    foreach($types as $type) {
      DB::table('types')->insert([
        'type_name' => $type
      ]);
    }

    foreach($families as $family) {
      DB::table('family_authorities')->insert([
        'family_name' => $family
      ]);
    }

    $authors = factory(App\Authors::class, 30)->create();

    $authorities = factory(App\Authoritys::class, 20)->create();

    foreach ($authors as $author) {
      $author->artworks = factory(App\Artworks::class, rand(1, 10))->create(['authors_id' => $author->id, 'types_id' => rand(1, 11)]);
      foreach($author->artworks as $artwork) {
        $artwork->exemplaires = factory(App\Exemplaires::class, rand(1, 3))->create(['artworks_id' => $artwork->id]);
      }
    }
  }
}
