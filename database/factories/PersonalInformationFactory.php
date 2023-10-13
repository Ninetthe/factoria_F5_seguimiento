<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PersonalInformation;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PersonalInformation>
 */
class PersonalInformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'photo' => $this->faker->imageUrl(),
            'emergency_contact' => $this->faker->phoneNumber(),
            'protection_data' => $this->faker->text(200),
            'coder_commitment' => $this->faker->text(200),
            'coder_id' => $this->faker->numberBetween(1, 10), 
        ];
    }
}
