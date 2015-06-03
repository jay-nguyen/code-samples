<?php namespace blogdemo\DB;

class Database {
	private $host   = 'DB_HOST';
	private $user   = 'DB_USER';
	private $pass   = 'DB_PASS';
	private $dbname = 'DB_NAME';
	private $port   = 'DB_PORT';

	private $dbh;
	private $error;

	public function __construct()
	{
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname . ';port=' . $this->port;

		$options = array(
			PDO::ATTR_PERSISTENT	=> true,
			PDO::ATTR_ERRMODE		=> PDO::ERRMODE_EXCEPTION
		);
		try
		{
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
			echo 'Connected Successfully';
		}
		catch(PDOException $e)
		{
			$this->error = $e->getMessage();
		}
	}
}

$test = new Database();
var_dump($test);