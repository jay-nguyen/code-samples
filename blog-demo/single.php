<?php 
require 'blog.php';
use blog_demo\Database;

$post = Database\get_by_id((int)$_GET['id'], $conn);

if ($post)
{
	$post = $post[0];
	
	view('single', array(
	'post' => $post
	));
} 
else
{
	header('location:/');
}