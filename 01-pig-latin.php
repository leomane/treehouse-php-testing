<?php

require 'vendor/autoload.php';
require 'PigLatin1.php';

class PigLatinTest extends PHPUnit_Framework_TestCase
{
	/**
	* @test
	*/
	public function englishToPigLatinWorksCorrectly()
	{
		// Given I have an english word
		// If I pass that word to my PigLatin converter
		// I get back the correctly transformed version
		$word = 'test';
		$expectedResult = 'esttay';

		$pigLatin = new PigLatin();
		$result = $pigLatin->convert($word);

		$this->assertEquals(
			$expectedResult,
			$result,
			"PigLatin conversion failed"
		);
	}
}