<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create('ru_RU');
        return [
            'title' => $faker->sentence(6),
            'author' => $faker->firstName() . ' '
                . $faker->lastName(),
            'brief' => $faker->sentence(15),
            'fulltext' => $faker->paragraph(20),
            'published_at' => $faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
