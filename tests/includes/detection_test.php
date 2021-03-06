<?php
include_once('tests/stubs.php');

/**
 * Redaxscript Detection Test
 *
 * @since 2.1.0
 *
 * @package Redaxscript
 * @category Tests
 * @author Henry Ruhs
 */

class Redaxscript_Detection_Test extends PHPUnit_Framework_TestCase
{
	/**
	 * registry
	 *
	 * instance of the registry class
	 *
	 * @var object
	 */

	protected $_registry;

	/**
	 * setUp
	 *
	 * @since 2.1.0
	 */

	protected function setUp()
	{
		$this->_registry = Redaxscript_Registry::instance();
	}

	/**
	 * providerDetectionLanguage
	 *
	 * @since 2.1.0
	 *
	 * @return array
	 */

	public function providerDetectionLanguage()
	{
		$contents = file_get_contents('tests/provider/detection_language.json');
		$output = json_decode($contents, true);
		return $output;
	}

	/**
	 * providerDetectionTemplate
	 *
	 * @since 2.1.0
	 *
	 * @return array
	 */

	public function providerDetectionTemplate()
	{
		$contents = file_get_contents('tests/provider/detection_template.json');
		$output = json_decode($contents, true);
		return $output;
	}

	/**
	 * testDetectionLanguage
	 *
	 * @since 2.1.0
	 *
	 * @param array $registry
	 * @param string $expect
	 * @dataProvider providerDetectionLanguage
	 */

	public function testDetectionLanguage($registry = array(), $expect = null)
	{
		/* setup */

		$this->_registry->init($registry);
		$detection = New Redaxscript_Detection_Language($this->_registry);

		/* result */

		$result = $detection->getOutput();

		/* compare */

		$this->assertEquals($expect, $result);
	}

	/**
	 * testDetectionTemplate
	 *
	 * @since 2.1.0
	 *
	 * @param array $registry
	 * @param string $expect
	 * @dataProvider providerDetectionTemplate
	 */

	public function testDetectionTemplate($registry = array(), $expect = null)
	{
		/* setup */

		$this->_registry->init($registry);
		$detection = New Redaxscript_Detection_Template($this->_registry);

		/* result */

		$result = $detection->getOutput();

		/* compare */

		$this->assertEquals($expect, $result);
	}
}
?>
