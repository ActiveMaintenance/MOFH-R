<?php

require_once(BASEPATH.'libraries/Form_validation.php');

class Signup_form_validation extends CI_Form_validation
{
	public function valid_name($str)
	{
		$array = [
			',', '\\', '/', '@', '[', ']', '(', ')', '{', '}', '.'
		];
		foreach ($array as $symbol) {
			if (strpos($str, $symbol) !== FALSE)
			{
				 $this->set_message('valid_name', 'The {field} field can not use illegal charachters.');
				return FALSE;
			}
		}
		return TRUE;
	}
}

?>