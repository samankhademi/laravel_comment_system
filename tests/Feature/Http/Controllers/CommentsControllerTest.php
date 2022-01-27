<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use App\Models\Comments;
use App\Models\Blogs;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class CommentsControllerTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    public $testedBlog = false;
    public $level1Comment = false;
    public $level2Comment = false;
    public $level3Comment = false;

    public function test_create_comment_level1()
    {
        $this->testedBlog = Blogs::create(["title" => 'test', "html" => "", "img" => "test"]);
        $response = $this->post('/comments', [
            'username' => $this->faker->name,
            'text' => $this->faker->text,
            'blog_id' => $this->testedBlog->id,
        ]);
        $response->assertStatus(200);
        $response->assertJson(['status' => true]);
    }

    public function test_create_comment_level2()
    {
        $this->testedBlog = Blogs::create(["title" => 'test', "html" => "", "img" => "test"]);

        $response = $this->post('/comments', [
            'username' => $this->faker->name,
            'text' => $this->faker->text,
            'blog_id' => $this->testedBlog->id,
        ]);
        $level1Comment = $response->getOriginalContent()['comment'];
        $response = $this->post('/comments', [
            'username' => $this->faker->name,
            'text' => $this->faker->text,
            'blog_id' => $this->testedBlog->id,
            'reply_id' => $level1Comment['id'],
        ]);

        $response->assertStatus(200);
        $response->assertJson(['status' => true]);
    }

    public function test_create_comment_level3()
    {
        $this->testedBlog = Blogs::create(["title" => 'test', "html" => "", "img" => "test"]);

        $response = $this->post('/comments', [
            'username' => $this->faker->name,
            'text' => $this->faker->text,
            'blog_id' => $this->testedBlog->id,
        ]);
        $level1Comment = $response->getOriginalContent()['comment'];
        $response = $this->post('/comments', [
            'username' => $this->faker->name,
            'text' => $this->faker->text,
            'blog_id' => $this->testedBlog->id,
            'reply_id' => $level1Comment['id'],
        ]);
        $level2Comment = $response->getOriginalContent()['comment'];
        $response = $this->post('/comments', [
            'username' => $this->faker->name,
            'text' => $this->faker->text,
            'blog_id' => $this->testedBlog->id,
            'reply_id' => $level2Comment['id'],
        ]);

        $response->assertStatus(200);
        $response->assertJson(['status' => true]);
    }
    public function test_create_fail_comment_level4()
    {
        $this->testedBlog = Blogs::create(["title" => 'test', "html" => "", "img" => "test"]);

        $response = $this->post('/comments', [
            'username' => $this->faker->name,
            'text' => $this->faker->text,
            'blog_id' => $this->testedBlog->id,
        ]);
        $level1Comment = $response->getOriginalContent()['comment'];
        $response = $this->post('/comments', [
            'username' => $this->faker->name,
            'text' => $this->faker->text,
            'blog_id' => $this->testedBlog->id,
            'reply_id' => $level1Comment['id'],
        ]);
        $level2Comment = $response->getOriginalContent()['comment'];
        $response = $this->post('/comments', [
            'username' => $this->faker->name,
            'text' => $this->faker->text,
            'blog_id' => $this->testedBlog->id,
            'reply_id' => $level2Comment['id'],
        ]);
        $level3Comment = $response->getOriginalContent()['comment'];
        $response = $this->post('/comments', [
            'username' => $this->faker->name,
            'text' => $this->faker->text,
            'blog_id' => $this->testedBlog->id,
            'reply_id' => $level3Comment['id'],
        ]);

        $response->assertStatus(400);
    }
    public function test_create_fail_comment_any_level_on_fake_blog()
    {
        $response = $this->post('/comments', [
            'username' => $this->faker->name,
            'text' => $this->faker->text,
            'blog_id' => $this->faker->numberBetween(2,10),
        ]);
        $response->assertStatus(400);

    }
}

/*namespace Tests\Unit\Http\Controllers;

use PHPUnit\Framework\TestCase;

class CommentsControllerTest extends TestCase
{
    public function test_example()
    {
        $this->assertTrue(true);
    }
}*/
