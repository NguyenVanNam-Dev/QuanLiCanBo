<?php

class model{
	public function fetch($sql){

		global $conn;

		$result  = mysqli_query($conn, $sql);
		$arr = array();
		while ($row = mysqli_fetch_object($result)) 
		{
			$arr[] = $row;
		}

		return $arr;
	}

	public function execute($sql)
	{
		global $conn;
		$result = mysqli_query($conn, $sql);
		return $result;
	}

	public function num_rows($sql)
	{
		global $conn;
		$result = mysqli_query($conn, $sql);
		return mysqli_num_rows($result);
	}
} 
?>