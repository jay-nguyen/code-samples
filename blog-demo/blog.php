<?php

require 'functions.php';
require 'db.php';
use blog_demo\Database;

/**
 * Connect to the database.
 * @var $conn
 */
$conn = Database\connect($config);
if (!$conn) die ('Problem connecting to the database');