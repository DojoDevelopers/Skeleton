<?php

namespace Dojo\Tests;

class FirstClassTest extends \PHPUnit_Framework_TestCase
{
	public function testInstanceOfFirstClass()
	{
		$this->assertInstanceOf('Dojo\FirstClass', new \Dojo\FirstClass);
	}
}
