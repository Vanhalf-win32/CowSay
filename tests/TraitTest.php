<?php

use \CowSay\Cow;
use \CowSay\Tux;

class TraitTest extends PHPUnit_Framework_TestCase {

	public function testCowSupportedTraits() {
		$c = new Cow();
		$this->assertSame([
			'CowSay\Traits\Eyes' => 'Eyes',
			'CowSay\Traits\Tongue' => 'Tongue',
			'CowSay\Traits\Udder' => 'Udder',
			'CowSay\Traits\Poop' => 'Poop',
		], $c->getSupportedTraits());
	}

	public function testTuxSupportedTraits() {
		$t = new Tux();
		$this->assertSame([], $t->getSupportedTraits());
	}

}