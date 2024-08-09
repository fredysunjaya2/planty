<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gallery>
 */
class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    private static $uniquePlantIds = [];

    public function definition(): array
    {
        if (empty(self::$uniquePlantIds)) {
            self::$uniquePlantIds = range(1, 24);
            shuffle(self::$uniquePlantIds);
        }

        // Pop a unique plant_id from the array
        $uniquePlantId = array_pop(self::$uniquePlantIds);

        return [
            //
            'plant_id' => $uniquePlantId,
            'subs_tier_id' => rand(1, 2),
            'archive_date' => fake()->dateTimeBetween('-2 years', 'now')
        ];
    }
}
