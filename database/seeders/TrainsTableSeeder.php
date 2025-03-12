<?php

namespace Database\Seeders;

//importo faker 
use Faker\Generator as Faker;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeThisMonth();
            $newTrain->arrival_time = $faker->dateTimeThisMonth();
            $newTrain->train_code = $faker->randomNumber(5, true);
            $newTrain->total_carriages = $faker->numberBetween(5, 12);
            $newTrain->on_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();


            $newTrain->save();
        }
    }
}
