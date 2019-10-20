<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AddTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->type('#email', 't001@test.com')
            ->type('#password', '12345')
            ->click('#login-btn')
            ->click('#list-btn')
            ->click('#new-btn')
            ->type('topic','test01')
            ->type('context','testContext01')
            ->click('#submit-btn')
            ->assertSee('test01');
        });
    }
}
