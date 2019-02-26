<?php

use Illuminate\Database\Seeder;
use App\Contactcomponent;

class ContactcomponentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contactcomponent::create([
            'title'=>'CONTACT US',
            'description'=>'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.',
            'office'=>'Main Office',
            'address'=>'
            C/ Libertad, 34 
            05200 Arévalo
            
            0034 37483 2445 322
            
            hello@company.com',

        ]);
    }
}
