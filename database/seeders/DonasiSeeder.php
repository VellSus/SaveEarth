<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker =FAKER::create('id_ID');
        for($i=0;$i<6;$i++){
        DB::table('donation')->insert([
            'name'=>$faker->name,
            'email'=>$faker->email,
            'message'=>$faker->text(30),
            'planted'=>$faker->randomDigit

        ]);
    }
    }
}
