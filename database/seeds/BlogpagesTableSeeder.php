<?php

use Illuminate\Database\Seeder;
use App\Blogpage;

class BlogpagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blogpage::create([
            'quotetitle'=>'Quote',
            'quote'=>'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.'

        ]);
    }
}
