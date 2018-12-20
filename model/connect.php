<?php
class Connect {
	public $hostname = "localhost";
	public $username = "root";
	public $password = "";
	public $database = "db_qlcb";
	public $conn = '';

	public function connect()
	{
		$this->conn = mysqli_connect($this->hostname,$this->username,$this->password,$this->database);
		if(!$this->conn){
			die('lỗi kết nối');
		}
		mysqli_query($this->conn, 'SET NAMES utf8');
	}

	public function fetch($sql)
	{

		$result  = mysqli_query($this->conn, $sql);
		$arr = array();
		while ($row = mysqli_fetch_object($result)) 
		{
			$arr[] = $row;
		}

		return $arr;
	}

	public function execute($sql)
	{
		$result = mysqli_query($this->conn, $sql);
		return $result;
	}

	public function num_rows($sql)
	{
		$result = mysqli_query($this->conn, $sql);
		return mysqli_num_rows($result);
	}

} 
