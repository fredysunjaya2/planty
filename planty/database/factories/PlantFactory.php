<?php

namespace Database\Factories;

use App\Models\plants;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PlantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Bezhanov\Faker\Provider\Species($faker));

        return [
            //
            'plant_name' => $faker->plant . PHP_EOL,
            'plant_description' => fake()->paragraph(2),
            'plant_img' => '/assets/gallery/plant1.png',
        ];
    }
}
