<?php

use Illuminate\Database\Seeder;
use App\Instagram;

class InstagramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $instagram=factory(App\Instagram::class, 9) -> create();
    }
}
