<?php

namespace Database\Factories\MailBox;

use App\Models\MailBox\RequestType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MailBox\RequestBox>
 */
class RequestBoxFactory extends Factory
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
            'recived_id' => fake()->randomElement(User::pluck('id')),
            'request_type_id' => fake()->randomElement(RequestType::pluck('id')),
        ];
    }
}
