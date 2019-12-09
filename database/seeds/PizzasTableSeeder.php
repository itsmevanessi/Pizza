<?php

use Illuminate\Database\Seeder;
use App\Pizza;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pizza::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 100; $i++) {
            Pizza::create([
                'flavor' => $faker->sentence
            ]);
        }
    }
}
