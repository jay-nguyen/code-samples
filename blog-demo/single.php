<?php 
require 'functions.php';
use blog_demo\Database; 

$conn = Database\connect($config);

if (!$conn) die ('Problem connecting to the database');

$post = Database\query('SELECT * FROM posts WHERE id = :id LIMIT 1',
					array('id' => $_GET['id']),
					$conn);
if ($post)
{
	$post = $post[0];
	$view_path = 'views/single.view.php';
	include 'views/layout.php';
} 
else
{
	header('location:/');
}
