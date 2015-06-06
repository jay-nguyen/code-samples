<?php namespace blog_demo\Database;

$config = array(
	'username' => 'root',
	'password' => 'root',
	'db_name'  => 'blogdemo'
);

function connect($config)
{
	try
	{
		$conn = new \PDO('mysql:host=localhost;dbname=' . $config['db_name'],
		 $config['username'],
		 $config['password']);

		$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

		return $conn;
	} 
	catch(Exception $e)  
	{
		return false;
	}
}

function query($query, $bindings, $conn)
{
	$stmt = $conn->prepare($query);
	$stmt->execute($bindings);

	$results = $stmt->fetchAll();
	return $results ? $results : false;
}

function get($tableName, $conn, $limit = 10)
{
	try
	{
		$result = $conn->query("SELECT * FROM $tableName LIMIT $limit");

		return ($result->rowCount() > 0 )
			? $result
			: false;
	} 
	catch(Exception $e)
	{
		return false;
	}
}

function get_by_id($id, $conn)
{
	return query(
		'SELECT * FROM posts WHERE id = :id LIMIT 1',
		array('id' => $id),
		$conn);
}