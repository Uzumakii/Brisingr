<?php
	function print_var_name($var) {
		foreach($GLOBALS as $var_name => $value) {
			if ($value === $var) {
				return $var_name;
			}
		}
	
		return false;
	}
	function message_DEBUG($var)
	{
		echo '<pre style="
		background: rgb(19, 27, 29);
		border: 2px solid rgb(95, 95, 95);
		text-shadow: 1px 1px 0px #000;
		margin: 2px;
		padding: 4px;
		color: rgb(126, 126, 126);
		"><h2><strong>Working with: #'.print_var_name($var).'</strong></h2><br>';
		$start = microtime(true);
		print_r($var);
		$end = microtime(true);
		echo '<span class="" style=" margin:10px !important; display:inline-block;"><strong># Query time: '.sprintf("%.5f", ($end-$start)) .' s</strong></span></pre>';	
	}

?>