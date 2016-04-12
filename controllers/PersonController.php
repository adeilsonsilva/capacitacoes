<?php

include('../models/Person.php');

switch ($_POST['action'])
{
	case 'insert':
		$person = new Person($_POST['person']);
		print_r($person);
		break;
	default:
		# code...
		break;
}

