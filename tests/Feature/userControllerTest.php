<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\member;
use App\Models\course;
use App\Models\article;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

class userControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndexRedirectsToHomeWhenLoggedIn()
    {
        $response = $this->withSession(['loggedin' => true])->get('/masuk');

        $response->assertRedirect('http://localhost')->assertSessionHas('ilegal', 'Already Logged in');
    }

    public function testIndexReturnsViewWithRememberDataWhenCookiesExist()
    {
        $response = $this->withCookie('remember', 'true')
                         ->withCookie('email', 'test@example.com')
                         ->withCookie('password', 'testpassword')
                         ->get('/masuk');

        $response->assertViewIs('masuk');
        $response->assertViewHas('data', [
            'email' => 'test@example.com',
            'password' => 'testpassword',
            'remember' => 'true'
        ]);
    }

    public function testIndexReturnsViewWithoutRememberDataWhenCookiesDoNotExist()
    {
        $response = $this->get('/masuk');

        $response->assertViewIs('masuk');
        $response->assertViewHas('data', [
            'remember' => false
        ]);
    }

    public function testDashboardReturnsViewWithCourses()
    {
        $courses = course::factory()->count(5)->create();

        $response = $this->get('/');

        $response->assertViewIs('Dashboard');
        $response->assertViewHas('courses', $courses);
    }

    public function testDaftarRedirectsToHomeWhenLoggedIn()
    {
        $response = $this->withSession(['loggedin' => true])->get('/daftar');

        $response->assertRedirect('')->assertSessionHas('ilegal', 'Already Logged in');
    }

}
