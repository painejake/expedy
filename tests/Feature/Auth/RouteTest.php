<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class RouteTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * Test an unauthorized user cannot view the routes screen.
     *
     * @return void
     */
    public function testAnonUserCannotViewRoutesScreen()
    {
        $response = $this->get('/routes');

        $response->assertRedirect('/login');
    }

    /**
     * Test a logged in user can view the routes screen.
     *
     * @return void
     */
    public function testUserCanViewRoutesScreen()
    {
        $user = factory(User::class)->make();

        $response = $this->actingAs($user)->get('/routes');

        $response->assertStatus(200);
    }

}
