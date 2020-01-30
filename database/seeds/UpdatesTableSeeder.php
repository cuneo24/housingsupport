<?php

use Illuminate\Database\Seeder;
use App\Update;

class UpdatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $update = new Update();
        $update->update = '';
        $update->save();
    }
}
