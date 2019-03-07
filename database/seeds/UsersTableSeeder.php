<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
          'name'=>'Sara',
          'email'=>'sara@at.at',
          'password'=>bcrypt('sarasara'),
          'role_id'=>'1',
        


      ]);
    //   User::create([
    //     'name'=>'Mack',
    //     'email'=>'pimp@at.at',
    //     'password'=>bcrypt('pimppimp'),
    //     'role_id'=>'2',
        
        


    // ]);
    // User::create([
    //     'name'=>'Hoe',
    //     'email'=>'wherethehoes@at.at',
    //     'password'=>bcrypt('hoesnbitches'),
    //     'role_id'=>'3',

    // ]);
     
    }
}
