<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Hotel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * @throws \Exception
     */
    public function definition()
    {
        return [
            'user_id' => User::query()->inRandomOrder()->value('id'),
            'hotel_id' => Hotel::query()->inRandomOrder()->where('is_published', 'ok')->value('id'),
            /*'comment_id' =>Comment::query()->inRandomOrder()->value('id'),*/
            'comment' => $this->faker->text(150),
            'rating' => random_int(1, 5),
        ];
    }
}
