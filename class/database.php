<?php
Class Database
{
	
	private $link;
	
	public function __construct()
    {
		$this->connect();
	}
	
	private function connect()
    {
		$config = require_once 'config.php';
        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['db_name'] . ';charset=' . $config['charset'];
        $this->link = new PDO($dsn, $config['username'], $config['password']);
        return $this;
	}
	
	public function execute($sql, $array)
    {
		$sth = $this->link->prepare($sql);
        return $sth->execute($array);
	}
	
	public function query($sql, $array)
    {
		$sth = $this->link->prepare($sql);
        $sth->execute($array);
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
	}
}