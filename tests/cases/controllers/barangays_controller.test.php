<?php
/* Barangays Test cases generated on: 2021-03-22 14:41:59 : 1616420519*/
App::import('Controller', 'Barangays');

class TestBarangaysController extends BarangaysController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BarangaysControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.barangay', 'app.municipality', 'app.province', 'app.country');

	function startTest() {
		$this->Barangays =& new TestBarangaysController();
		$this->Barangays->constructClasses();
	}

	function endTest() {
		unset($this->Barangays);
		ClassRegistry::flush();
	}

}
