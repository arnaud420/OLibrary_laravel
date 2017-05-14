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
    'password' => $password ?: $password = bcrypt('password'),
    'phone' => $faker->phoneNumber,
    'address' => $faker->address,
    'postal_code' => $faker->postcode,
    'city' => $faker->city,
    'picture_path' => $faker->imageUrl($width = 100, $height = 300),
    'remember_token' => str_random(10),
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
    'families_id' => rand(1, 6)
  ];
});

$factory->define(App\Artworks::class, function(Faker\Generator $faker) {
  return [
    'artwork_title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    'artwork_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
    'resume' => $faker->realText($maxNbChars = 200, $indexSize = 2),
    'collection' => $faker->word,
    'authorities_id' => rand(1, 20)
  ];
});

$factory->define(App\Exemplaires::class, function(Faker\Generator $faker) {
  $picture = [
    "11074573926_cc0c2ec70d_z.jpg",
    "11074951806_18f9bcab59_z.jpg",
    "11113174346_b1fa358556_z.jpg",
    "11189014556_c3f9390e4a_z.jpg",
    "11205421616_10677d1c7f_z.jpg",
    "11205681555_7886664ec0_z.jpg",
    "11205982983_aeee5bf4c1_z.jpg",
    "11206562436_b3c345e6af_z.jpg",
    "11207769555_98ee2d0316_z.jpg",
    "11215988205_922d232d64_z.jpg",
    "11215999665_399b175307_z.jpg",
    "11216079845_4fd4a90a2a_z.jpg",
    "11216098624_8549d24862_z.jpg",
    "11216226616_d46c17f07d_z.jpg",
    "11216395384_8c0573e97a_z.jpg",
    "11216531384_ce2e1655f5_z.jpg",
    "11216573545_3a04bf141d_z.jpg",
    "11216589803_2bf35887d5_z.jpg",
    "11216849083_2c0d5ce161_z.jpg",
    "11216852383_99f083fdb6_z.jpg",
    "11216908175_8365535175_z.jpg",
    "11216918166_7b4b2920c1_z.jpg",
    "11217295684_2f4b5dcb32_z.jpg",
    "11217316514_b9582513af_z.jpg",
    "11218495196_a0632e8a82_z.jpg",
    "11218683676_554228093b_z.jpg",
    "11218855793_2beaf526d4_z.jpg",
    "11218891625_0994d671b9_z.jpg",
    "11219083303_a78e211b5a_z.jpg",
    "11219115955_7ba6e38b60_z.jpg",
    "11219135646_87c2ab75b2_z.jpg",
    "11219220496_642522b683_z.jpg",
    "11219221336_f49a7dee55_z.jpg",
    "11219239044_774e09738e_z.jpg",
    "11219416335_9b9c1c680a_z.jpg",
    "11219458595_f4c9f4b12c_z.jpg",
    "11219518504_39d143e636_z.jpg",
    "11219548404_b83c864c14_z.jpg",
    "11219636246_f88d1074f7_z.jpg",
    "11221748294_1f3b15de8a_z.jpg",
    "11245073025_1c86007966_z.jpg",
    "11253133975_94385e1559_z.jpg",
    "11280581015_118d1cb356_z.jpg",
    "11074573926_cc0c2ec70d_z.jpg",
    "11074951806_18f9bcab59_z.jpg",
    "11113174346_b1fa358556_z.jpg",
    "11165127045_e6d552fb03_z.jpg",
    "11189014556_c3f9390e4a_z.jpg",
    "11205421616_10677d1c7f_z.jpg",
    "11205681555_7886664ec0_z.jpg",
    "11205982983_aeee5bf4c1_z.jpg",
    "11206562436_b3c345e6af_z.jpg",
    "11207769555_98ee2d0316_z.jpg",
    "11215988205_922d232d64_z.jpg",
    "11215999665_399b175307_z.jpg",
    "11216079845_4fd4a90a2a_z.jpg",
    "11216098624_8549d24862_z.jpg",
    "11216226616_d46c17f07d_z.jpg",
    "11216395384_8c0573e97a_z.jpg",
    "11216531384_ce2e1655f5_z.jpg",
    "11216573545_3a04bf141d_z.jpg",
    "11216589803_2bf35887d5_z.jpg",
    "11216849083_2c0d5ce161_z.jpg",
    "11216852383_99f083fdb6_z.jpg",
    "11216908175_8365535175_z.jpg",
    "11216918166_7b4b2920c1_z.jpg",
    "11217295684_2f4b5dcb32_z.jpg",
    "11217316514_b9582513af_z.jpg",
    "11218495196_a0632e8a82_z.jpg",
    "11218683676_554228093b_z.jpg",
    "11218855793_2beaf526d4_z.jpg",
    "11218891625_0994d671b9_z.jpg",
    "11219083303_a78e211b5a_z.jpg",
    "11219115955_7ba6e38b60_z.jpg",
    "11219135646_87c2ab75b2_z.jpg",
    "11219220496_642522b683_z.jpg",
    "11219221336_f49a7dee55_z.jpg",
    "11219239044_774e09738e_z.jpg",
    "11219416335_9b9c1c680a_z.jpg",
    "11219458595_f4c9f4b12c_z.jpg",
    "11219518504_39d143e636_z.jpg",
    "11219548404_b83c864c14_z.jpg",
    "11219636246_f88d1074f7_z.jpg",
    "11221748294_1f3b15de8a_z.jpg",
    "11245073025_1c86007966_z.jpg",
    "11253133975_94385e1559_z.jpg",
    "11280581015_118d1cb356_z.jpg"
  ];

  return [
    'exemplaire_quantity' => $faker->randomDigitNotNull,
    'exemplaire_picture_path' => '/uploads/'.$picture[rand(0, 86)],
    'exemplaire_name' => $faker->sentence($nbWorkds = 1)
  ];
});
