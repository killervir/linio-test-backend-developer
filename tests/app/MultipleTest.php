<?php

namespace Tests\Unit;

use Test\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MultipleTest extends PHPUnit_Framework_TestCase
{
	/**
     * Object to prove, in our case the Multiple.
     *
     * @var Multiple
     */
    protected $object;

    /**
     * This method is executed before each test run, so
     * That everything you have to initialize in all tests, you can
     * Centralize here.
    */
    public function setUp()
    {
            $this->object = new \App\Multiple();
    }

    /**
     * This method is executed after each executed test, so
     * Will be dedicated to cleaning the remains of the execution of the test.
     */
    public function tearDown()
    {
            $this->object = null;
    }

    /**
     * Test to check the functionality of the isMultiple method
     * change name of numbers multiples of 3 for Linio *
     */
    public function testIsMultipleLinio()
    {
        $this->assertEquals( 'Linio', $this->object->isMultiple(3)); 
    }    


    /**
     * Test to check the functionality of the isMultiple method
     * change name of numbers multiples of 5 for IT *
     */
    public function testIsMultipleIT()
    {
        $this->assertEquals( 'IT', $this->object->isMultiple(5)); 
    }


    /**
     * Test to check the functionality of the isMultiple method
     * change name of numbers multiples of 3 and 5 for Linianos *
     */
   public function testIsmultipleLinianos()
   {
       $this->assertEquals( 'Linianos', $this->object->isMultiple(15)); 
   }
}
