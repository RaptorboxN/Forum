<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;
    /** @test  **/
    public function a_user_can_view_all_threads()
    {
        $thread = factory('App\Thread')->create();
        $response = $this->get('/thread');
        $response->assertSee($thread->title);

    }

    /** @test **/
    function a_user_can_read_a_single_thread() {
        $thread = factory('App\Thread')->create();

        $response = $this->get('/thread/' . $thread->id);
        $response->assertSee($thread->title);
    }

}
