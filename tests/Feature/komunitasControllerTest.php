<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\post;
use App\Models\comment;
use App\Models\member;

class komunitasControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndexReturnsViewWithPosts()
    {
        $member = member::factory()->count(3)->create();
        // Create test data

        $posts = post::factory()->count(3)->create();


        // Send GET request to the index route

        $response = $this->withSession(['loggedin' => true,'uid' => 1])->get('/komunitas');


        // Assert response status and view rendering
        $response->assertStatus(200);
        $response->assertViewIs('komunitas');

        // Assert that the view has the posts
        $response->assertViewHas('posts', $posts);
    }

    public function testAddPostCreatesNewPost()
    {
        // Create a test member
        $member = member::factory()->create();

        // Send POST request to the addPost route
        $response = $this->post('/komunitas/post/add', [
            'uid' => $member->id,
            'title' => 'Test Post',
            'desc' => 'This is a test post.',
            'tags' => 'test, example',
        ]);

        // Assert response status and redirection
        $response->assertStatus(302);
        $response->assertRedirect('/komunitas');

        // Assert that the post has been created in the database
        $this->assertDatabaseHas('posts', [
            'author_id' => $member->id,
            'title' => 'Test Post',
            'deskripsi' => 'This is a test post.',
            'tags' => 'test, example',
        ]);
    }

    public function testAddCommentCreatesNewComment()
    {
        // Create a test member and post
        $member = member::factory()->create([
            'id' => 1,
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'password'
            // other attributes
        ]);
        $post = post::factory()->create();
        // Send POST request to the addComment route
        $response = $this->post('/komunitas/comment/add', [
            'pid' => $post->id,
            'uid' => $member->id,
            'comment' => 'This is a test comment.',
        ]);

        // Assert response status and redirection
        $response->assertStatus(302);
        $response->assertRedirect('/komunitas');

        // Assert that the comment has been created in the database
        $this->assertDatabaseHas('comments', [
            'post_id' => $post->id,
            'author_id' => $member->id,
            'comment' => 'This is a test comment.',
        ]);
    }
}
