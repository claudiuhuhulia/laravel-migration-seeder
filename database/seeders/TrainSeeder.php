<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as FakerGeneretor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(FakerGeneretor $faker): void
    {
        for ($i = 0; $i < 20; $i++) {
            $train = new Train();
            $train->company = $faker->word();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_hours = $faker->time();
            $train->arrival_hours = $faker->time();
            $train->train_code = $faker->bothify('??-#####');
            $train->number_of_carriages =  $faker->randomDigitNotNull();
            $train->in_time =  $faker->boolean();
            $train->deleted =  $faker->boolean();

            $train->save();
        }
    }
}
