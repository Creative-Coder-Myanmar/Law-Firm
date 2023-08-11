<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'profile' => 'https://media.licdn.com/dms/image/D4D12AQGDtWEy4e0cVA/article-inline_image-shrink_1000_1488/0/1657811912984?e=1692230400&v=beta&t=J1F1w3rSQFglDGthKXytkhG3W7KQoi2s-S30jmWjh_Y',
            'name' => $this->faker->name(),
            'position' => $this->faker->jobTitle(),
            'about' => $this->faker->paragraph()
        ];
    }
}
