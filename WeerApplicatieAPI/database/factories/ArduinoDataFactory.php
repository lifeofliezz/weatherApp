<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArduinoDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'datatype' => $this->faker->randomElement(['temperatuur', 'luchtvochtigheid', 'licht', 'neerslag']),
            'value' => $this->faker->randomFloat(5 , 0, 100),
            'valuedatetime' => $this->faker->dateTime('now')
        ];
    }
}
