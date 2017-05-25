<?php

use Dojo\Example;
use Dojo\Bin;
use PHPUnit\Framework\TestCase;

class ExistenceTest extends TestCase
{
    // This method will be called *before* each test run.
    public function setUp() {
    	$this->bin = new Bin();
    }
    
    // This method will be called *after* each test run.
    public function tearDown() {}
    
    public function testRandom()
    {
        $this->assertEquals(0, $this->bin->getAmount());
    }
    public function testAdding(){
    	$this->bin->addBook(1);
    	$this->assertEquals(1, $this->bin->getAmount());
    }

    public function testAddingTo(){
    	$this->bin->addBook(1);
    	$this->bin->addBook(1);
    	$this->bin->addBook(2);
    	$this->assertEquals(2, $this->bin->getTypeAmount(1));

    }

    public function testCheckSingleValue() {
    	$this->assertEquals(8, $this->bin->checkSingleValue());
    
    }
    public function testCheckDiscount(){
    	$this->assertEquals(0, $this->bin->checkValue(1));
    	$this->assertEquals(5, $this->bin->checkValue(2));
    	$this->assertEquals(10, $this->bin->checkValue(3));
    	$this->assertEquals(20, $this->bin->checkValue(4));
    	$this->assertEquals(25, $this->bin->checkValue(5));


    }
}
