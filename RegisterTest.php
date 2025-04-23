<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Register')
                    ->assertPathIs('/register')
                    ->type('name', 'Kayla')
                    ->type('email', 'admin@gmail.com')
                    ->type('password','password')
                    ->type('password', 'password')
                    ->press('REGISTER');
                    
        });
    }
}
