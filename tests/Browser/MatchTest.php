<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class MatchTest extends DuskTestCase
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
             ->click('#match-btn')
            ->type('brandname', 'nike')
             ->type('color', 'red')
->type('size', '11')
 ->type('price', '30')
  ->type('series', '30')
 ->type('year', '2015')
 ->click('#search-btn')
->assertSee( 'Similarity');
        });
    }
}
