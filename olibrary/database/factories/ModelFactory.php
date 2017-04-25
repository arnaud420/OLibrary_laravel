<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
 */

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
  static $password;

  return [
    'first_name' => $faker->firstName,
    'last_name' => $faker->lastName,
    'email' => $faker->unique()->safeEmail,
    'password' => $password ?: $password = bcrypt('secret'),
    'phone' => $faker->phoneNumber,
    'address' => $faker->address,
    'postal_code' => $faker->postcode,
    'city' => $faker->city,
    'picture_path' => 'uploads/default.png',
    'remember_token' => str_random(10),
  ];
});

$factory->define(App\FamilyAuthority::class, function(Faker\Generator $faker) {
  return [
    'family_name' => str_random(10),
  ];
});

$factory->define(App\Types::class, function(Faker\Generator $faker) {
  return [
    'type_name' => str_random(10),
    'type_theme' => str_random(10)
  ];
});

$factory->define(App\Authors::class, function(Faker\Generator $faker) {
  return [
    'last_name' => $faker->lastName,
    'first_name' => $faker->firstName,
    'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
    'nationality' => $faker->country
  ];
});

$factory->define(App\Authoritys::class, function(Faker\Generator $faker) {
  return [
    'authority_name' => $faker->company,
    'authority_email' => $faker->unique()->safeEmail,
    'authority_phone' => $faker->phoneNumber,
    'family_id' => function() {
      return factory(App\FamilyAuthority::class)->create()->id;
    }
  ];
});

$factory->define(App\Artworks::class, function(Faker\Generator $faker) {
  return [
    'artwork_title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    'artwork_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
    'resume' => $faker->realText($maxNbChars = 200, $indexSize = 2),
    'collection' => $faker->word,
    'author_id' => function() {
      return factory(App\Authors::class)->create()->id;
    },
    'type_id' => function() {
      return factory(App\Types::class)->create()->id;
    },
    'authority_id' => function() {
      return factory(App\Authoritys::class)->create()->id;
    }
  ];
});

$factory->define(App\Exemplaires::class, function(Faker\Generator $faker) {
  return [
    'exemplaire_quantity' => $faker->randomDigitNotNull,
    'exemplaire_picture_path' => 'uploads/default.png',
    'artwork_id' => function() {
      return factory(App\Artworks::class)->create()->id;
    }
  ];
});
