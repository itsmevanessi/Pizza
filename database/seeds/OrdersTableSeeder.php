<?php

use Illuminate\Database\Seeder;
use App\Item;
use App\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Order::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $faker = \Faker\Factory::create();

        // And now, let's create a few orders in our database:
        for ($i = 0; $i < 50; $i++) {
            Order::create([
                'name' => $faker->name,
                'address' => $faker->address,
                'status' => $faker->biasedNumberBetween($min = 0, $max = 1, $function = 'sqrt'),
            ]);
            for($j = 0; $j < 3; $j++){
            	Item::create([
	                'number' => $faker->randomDigitNotNull,
	                'size' => 'medium',
	                'pizza_id' => $faker->biasedNumberBetween($min = 1, $max = 50, $function = 'sqrt'),
	                'order_id' => $i + 1,
	            ]);
            }
        }
    }
}
