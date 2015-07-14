<?php
function jsonPythonToPHP($string)
{
	$string = str_replace('True', 'true', $string);
	$string = str_replace('False', 'false', $string);
	$string = str_replace('None', 'null', $string);
	$string = str_replace(' ', '', $string);
	$string = str_replace("'", '"', $string);
	return $string;
}
