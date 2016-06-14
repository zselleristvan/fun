<?php

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel 5');
        $this->visit('/people');

    }

    public function testAbout()
    {
        $this->visit('about');
    }
}
