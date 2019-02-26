<?php

use Illuminate\Database\Seeder;
use App\Servicepage;

class ServicepagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servicepage::create([
            'servicetitle'=>'GET IN THE LAB AND SEE THE SERVICES',
            'projectstitle'=>'GET IN THE LAB AND DISCOVER THE WORLD',

        ]);
    }
}
