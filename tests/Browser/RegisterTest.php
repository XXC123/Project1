<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/registerTest')
                ->type('#email', 't015@test.com')
                ->type('#name', 'test')
                ->type('#password', '12345')
                ->type('#re-password', '12345')
                ->type('#address', 'abcdefg')
                ->click('#register-btn')
                ->assertSee('Registed successful, please login in.');
        });
    }
}
