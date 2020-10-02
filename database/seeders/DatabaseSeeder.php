<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\ModelBook;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //ModelBook::factory(10)->create();

        //User::factory(10)->create();

        \App\Models\ModelBook::factory()->count(200)->create();
        
        //\App\Models\AutorModel::factory()->count(100)->create();

    }
}
