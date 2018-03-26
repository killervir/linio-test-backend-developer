<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MultipleLinioTest extends TestCase
{
	/**
     * Object to prove, in our case the MultipleLinio.
     *
     * @var Multiple
     */
    protected $objet;

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
        $this->object= null;
    }

    /**
     * 
     * To test the functionality of the isMultiple method, when the multiply is 3, the ones that match change the name to "Linio"*
     */
    public function testIsMultipleLinio()
    {
        $this->assertEquals( 'Linio', $this->object->isMultiple(3)); 
    }    

 
    /**
     * To test the functionality of the isMultiple method, when the multiply is 5, the ones that match change the name to "IT" *
     */
    public function testIsMultipleIT()
    {
        $this->assertEquals( 'IT', $this->object->isMultiple(5)); 
    }


   /**
    * To test the functionality of the isMultiple method, when the multiply is 3 and 5, the ones that match change the name to "Linianos" *
    */
   public function testIsMultipleLinianos()
   {
       $this->assertEquals( 'Linianos', $this->object->isMultiple(30)); 
   }

}
