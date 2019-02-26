<?php

use Illuminate\Database\Seeder;
use App\Homepage;
class HomepagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Homepage::create([
            'subtitle'=>'Get your freebie template now!',
            'descriptiontitle'=>'GET IN THE LAB AND DISCOVER THE WORLD',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.',
            'description2'=>'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.',
            'clienttitle'=>'WHAT OUR CLIENTS SAY',
            'servicetitle'=>'GET IN THE LAB AND SEE THE SERVICES',
            'teamtitle'=>'GET IN THE LAB AND MEET THE TEAM',
            'browsetitle'=>'Are you ready to stand out?',
            'browsesubtitle'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.            '
            
        ]);
    }
}
