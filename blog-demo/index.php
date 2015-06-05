<?php 
require 'functions.php';
use blog_demo\Database; 

$conn = Database\connect($config);

if (!$conn) die ('Problem connecting to the database');
//fetch all the posts
$posts = Database\get('posts', $conn);
//filter through and display
$view_path = 'views/index.view.php';
include 'views/layout.php';