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
    }
}
