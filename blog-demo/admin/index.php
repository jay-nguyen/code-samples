<?php 
require '../blog.php';

if ( $_SERVER['REQUEST_METHOD'] === 'POST')
{
	$title = $_POST['title'];
	$body  = $_POST['body'];

	if ( empty($title) || empty($body))
	{
		$status = 'Please fill out both inputs';
	}
	else
	{
		//then create a new row in the table.
	}
}
else
{
	$status = '';
}

view('admin/create', array(
	'status' => $status
));