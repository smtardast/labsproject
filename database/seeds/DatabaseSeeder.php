<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(IconsTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(CarouselsTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
         $this->call(NewslettersTableSeeder::class);
        $this->call(ArticlesTagsTableSeeder::class);
        $this->call(ContactsTableSeeder::class);




    }
}
