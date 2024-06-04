<?php

namespace Database\Factories\MailBox;

use App\Models\MailBox\RequestBox;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MailBox\ReplayBox>
 */
class ReplayBoxFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence,
            'sub_title' => fake()->optional()->sentence,
            'show_date' => fake()->optional()->dateTime(),
            'send_id' =>fake()->randomElement(User::pluck('id')),
            'request_id' => fake()->randomElement(RequestBox::pluck('id')),
        ];
    }
}
