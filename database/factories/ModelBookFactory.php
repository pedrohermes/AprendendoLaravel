<?php

namespace Database\Factories;

use App\Models\ModelBook;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ModelBookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\ModelBook::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_autor' => rand(1, 50),
            'title' => $this->faker->word,
            'pages' => rand(100,500),
            'price' => rand(40.50, 500.58),
        
        ];
    }
}
