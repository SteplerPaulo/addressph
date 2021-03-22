<?php
/* Barangay Test cases generated on: 2021-03-22 14:41:52 : 1616420512*/
App::import('Model', 'Barangay');

class BarangayTestCase extends CakeTestCase {
	var $fixtures = array('app.barangay', 'app.municipality', 'app.province', 'app.country');

	function startTest() {
		$this->Barangay =& ClassRegistry::init('Barangay');
	}

	function endTest() {
		unset($this->Barangay);
		ClassRegistry::flush();
	}

}
