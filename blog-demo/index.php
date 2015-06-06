<?php 

require 'blog.php';
use blog_demo\Database; 

//fetch all the posts
$posts = Database\get('posts', $conn);

view('index', array(
	'posts' => $posts,
	'name'  => 'John Doe'
));