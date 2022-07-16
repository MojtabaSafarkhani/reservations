<?php

namespace Tests\Feature;

use App\Models\Comment;
use App\Models\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommentTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_auth_send_comment()
    {
        $this->withExceptionHandling();
        $response = $this->post('/comments/{1}', [
            'rating' => 1,
            'comment' => 'salam'
        ]);

        $response->assertRedirect(route('login'));

        $response->assertStatus(302);
    }

    public function test_rating_required()
    {
        $user = User::query()->first();
        $response = $this->actingAs($user)->post('/comments/{1}', [
            'rating' => null,
            'comment' => 'aasasas',
            'user_id' => $user->id
        ]);

        $this->assertEquals(0,Comment::count());


    }
}
