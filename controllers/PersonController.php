<?php

include('../models/Person.php');

class PersonController
{
	public static function insert() {
		$person = new Person($_POST['person']);
		print_r($person);
	}
}

PersonController::$_POST['action']();
