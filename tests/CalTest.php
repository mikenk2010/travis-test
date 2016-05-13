<?php

class CalTest extends PHPUnit_Framework_TestCase {
	private $cals = null;
	public function setUp() {
		$this->cals = new JomWeb\Cal;
	}

	public function tearDown(){
		$this->cals = null;
	}

	public function testInstanceOf(){
		$this->assertInstanceOf('JomWeb\Cal', $this->cals);
	}

	public function testInvalidArgumentIsProperlyThrow(){
		$this->cals->add('A', 2);
	}
}