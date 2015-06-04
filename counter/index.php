<?php

function set_count($file_name = 'counter.txt')
{
	if (file_exists($file_name))
	{
		//read the value
		$count = (int) file_get_contents($file_name) + 1;
		file_put_contents($file_name, $count);
	} 
	else
	{
		//create it
		$handle = fopen($file_name, 'w+');
		$count = 1;
		//set a default value of one
		fwrite($handle, $count);
		fclose($handle);
	}
	return $count;
}


function ordinal()
{
	$count = set_count();
	$suffix = array('th','st','nd','rd','th','th','th','th','th','th');
	if ((($count % 100) >= 11) && (($count % 100) <= 13))
	{
		return $count . 'th';
	}
	else
	{
		return $count . $suffix[$count % 10];
	}
}


$count = ordinal();

require 'index.templ.php';