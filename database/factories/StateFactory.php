<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class StateFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'country_id' =>\App\Models\Country::all()->random()->id
        ];
    }
}
