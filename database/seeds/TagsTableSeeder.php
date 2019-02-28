<?php

use Illuminate\Database\Seeder;
use App\Tag;
class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'tag'=>'Lifestyle'
        ]);
        Tag::create([
            'tag'=>'Beauty'
        ]);
        Tag::create([
            'tag'=>'Love'
        ]);
        Tag::create([
            'tag'=>'Makeup'
        ]);
        Tag::create([
            'tag'=>'Cocktails'
        ]);
    }
}
