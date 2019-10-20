<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DeleteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/managerLogin')
            ->type('#email', 'managerTest@test.com')
            ->type('#password', 'test')
                     ->click('#login-btn')
                     ->click('#list-btn')
                     ->assertSee('Delete');
        });
    }
}

