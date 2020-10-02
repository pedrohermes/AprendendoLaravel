<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelBook;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(ModelBooK::class, 100)->create();

        //ModelBook::factory(100)->create();

        factory(App\Models\ModelBook::class, 100)->create();

    }
}
