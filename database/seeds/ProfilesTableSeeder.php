<?php

use Illuminate\Database\Seeder;
use App\Profile;
class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'job'=>'Sugar Mama',
            'image'=>'6s0ALOs4WR5eBu0WH4j9nWhO0ijyCnAw7WODWtdT.jpeg',
            'user_id'=>'1'

        ]);
        Profile::create([
            'job'=>'Pimp Daddy',
            'image'=>'6s0ALOs4WR5eBu0WH4j9nWhO0ijyCnAw7WODWtdT.jpeg',
            'user_id'=>'2'

        ]);
    }
}
