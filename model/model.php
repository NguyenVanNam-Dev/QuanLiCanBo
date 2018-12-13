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

	}
} 
 ?>