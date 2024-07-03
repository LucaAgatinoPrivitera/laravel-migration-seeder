<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */


    // public function run(): void
    // {
        // \App\Models\User::factory(10)->create();
        
        
        // $treno = new Train();
        // $treno->save();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
       
       
        // ]);
    // }
    public function run(Faker $faker): void{
        for ($i=0; $i < 5 ; $i++) { 
            $treno = new Train();
            $treno->Azienda = $faker->Azienda;
            /* OPS per non rimodificare il db stampo solamente tante aziende
            $treno->Azienda = $faker->Stazione di partenza;
            $treno->Azienda = $faker->Azienda;
            $treno->Azienda = $faker->Azienda;
            $treno->Azienda = $faker->Azienda;
            $treno->Azienda = $faker->Azienda;
            $treno->Azienda = $faker->Azienda;
            $treno->Azienda = $faker->Azienda;
            */
            $treno->save();
        }
    }
}
