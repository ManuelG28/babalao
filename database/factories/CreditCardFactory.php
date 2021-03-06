<?php

/*
 * @author    Santiago Gil Zapata sgilz@eafit.edu.co
 */

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CreditCard;
use App\User;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(CreditCard::class, function (Faker $faker)
{
    return [
        'balance' => $faker->numberBetween($min = 0.00, $max = 99999999.99),
        'card_number' => $faker->numberBetween($min = 1000000000000000, $max = 9999999999999999),
        'cvv' => $faker->numberBetween($min = 100, $max = 999),
        'expiration_date' => $faker->date('m/y', $max = '12/30'),
        'owner' => $faker->unique()->name(),
        'owner_id' => $faker->numberBetween($min = 1000000, $max = 99999999999),
        'user_id' => $faker->numberBetween(1, User::count()),
    ];
});
