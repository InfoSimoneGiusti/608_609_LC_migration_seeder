<?php

use App\House;
use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //inizializzo faker nella lingua italiana
        $faker = \Faker\Factory::create('it_IT');

        for ($i=0; $i<10000; $i++) {
            $newHouse = new House();
            $newHouse->name = $faker->sentence();
            $newHouse->sm = $faker->randomNumber(5, false);
            $newHouse->price = $faker->randomFloat(2, 10000, 1000000);
            $newHouse->energy_rating = $faker->randomElement(['A', 'B', 'C', 'D', 'E', 'F', 'G']);
            $newHouse->address = $faker->streetAddress();
            $newHouse->zip = $faker->postcode();
            $newHouse->province_code = $faker->randomLetter() . $faker->randomLetter();
            $newHouse->city = $faker->city();
            $newHouse->rooms_number = $faker->randomNumber(2, false);
            $newHouse->save();
        }

    }
}
