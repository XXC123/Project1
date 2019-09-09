<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ViewProductTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/Manager')
                ->type('account', 'manager')
                ->type('password', 'manager')
                ->click('#login-btn')
                ->click('#product-list-btn')
                ->assertSee('Product Table');
        });
    }
}
