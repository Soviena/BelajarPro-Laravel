<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\course;
use App\Models\member;
use App\Models\article;

class adminControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndexRedirectsToHomeWhenAdminSessionNotSet()
    {        
        $response = $this->get('http://localhost/admin');

        $response->assertRedirect('http://localhost');
    }

    public function testIndexRedirectsToAdminCourseWhenAdminSessionSet()
    {
        session(['admin' => 'TRUE']);
        
        $response = $this->get('/admin');
        
        $response->assertRedirect('http://localhost/admin/course');
    }

    public function testCourseRedirectsToHomeWhenAdminSessionNotSet()
    {
        $response = $this->get('http://localhost/admin/course');
        
        $response->assertRedirect('http://localhost');
    }

    
    public function testCourseReturnsViewWhenAdminSessionSet()
    {
        $response = $this->withSession(['admin' => true])->get('/admin/course');

        $response->assertViewIs('Admin-Panel-Course');
        $response->assertViewHas('course');
    }

    public function testUserRedirectsToHomeWhenAdminSessionNotSet()
    {
        $response = $this->withSession(['admin' => false])->get('/admin/user');

        $response->assertRedirect('http://localhost');
    }

    public function testUserReturnsViewWhenAdminSessionSet()
    {
        $response = $this->withSession(['admin' => true])->get('/admin/user');

        $response->assertViewIs('Admin-Panel-User');
        $response->assertViewHas('member');
    }

    public function testArticleRedirectsToHomeWhenAdminSessionNotSet()
    {
        $response = $this->withSession(['admin' => false])->get('/admin/course/1/article');

        $response->assertRedirect('http://localhost');
    }

    // Example test for the add_course method
    public function testAddCourse()
    {
        $this->withoutMiddleware();
        
        $response = $this->post('http://localhost/admin/course/add', [
            'name' => 'New Course',
            'deskripsi' => 'Course description',
            // Add other required fields here
        ]);
        
        $response->assertRedirect('http://localhost/admin/course');
        $this->assertDatabaseHas('courses', ['name' => 'New Course']);
    }

}
