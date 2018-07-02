<?php

use Travis\App;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase {

	public function setUp() {
		parent::setUp();

		$this->app = new App;
	}

	public function test_isTrue() {
		$this->assertTrue( $this->app->true() );
	}

	public function test_isFalse() {
		$this->assertFalse( $this->app->false() );
	}

}