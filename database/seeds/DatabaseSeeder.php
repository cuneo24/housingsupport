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
        // $this->call(UsersTableSeeder::class);
        $this->call(ResidencesTableSeeder::class);
        $this->call(DirectorsTableSeeder::class);
        $this->call(PartnersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AboutsTableSeeder::class);
        $this->call(UpdatesTableSeeder::class);
    }
}
