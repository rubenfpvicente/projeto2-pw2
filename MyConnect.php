<?php

class MyConnect
{
	private $conn;

	private $host;
	private $user;
	private $pass;
	private $dbname;
	private $port;

	private static $instance = null;

	private function __construct($host = 'localhost', $user = 'root', $pass = '', $dbname = 'agencia', $port = 3307)
	{
		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->dbname = $dbname;
		$this->port = $port;

		$this->conn = \mysqli_connect($this->host, $this->user, $this->pass, $this->dbname, $this->port);
	}

	public static function getInstance($host = 'localhost', $user = 'root', $pass = '', $dbname = 'agencia', $port = 3307)
	{
		if (self::$instance == null) {
			self::$instance = new MyConnect($host, $user, $pass, $dbname, $port);
		}

		return self::$instance;
	}

	public function query(string $sql)
	{
		return $this->conn->query($sql);
	}

	public function getInsertID()
	{
		return $this->conn->insert_id;
	}
}
