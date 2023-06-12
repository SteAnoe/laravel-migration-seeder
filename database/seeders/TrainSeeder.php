<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( Faker $faker ){
        for ($i=0; $i < 10; $i++) { 
            $newTrain = new Train();
            $newTrain->Azienda = $faker->randomElement(['Italo', 'Trenitalia']);
            $newTrain->Stazione_di_partenza = $faker->city();
            $newTrain->Stazione_di_arrivo = $faker->city();
            $newTrain->Orario_di_partenza = $faker->dateTime();
            $newTrain->Orario_di_arrivo = $faker->dateTime();
            $newTrain->Codice_treno = $faker->bothify('######');
            $newTrain->Numero_carrozze = $faker->numberBetween(1, 9);
            $newTrain->In_orario = $faker->randomElement([true, false]);
            $newTrain->Cancellato = $faker->randomElement([true, false]);
            $newTrain->save();
        }
    }
}
