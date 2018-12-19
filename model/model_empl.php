<?php

include_once "connect.php";

class model_empl
{
	public function getempl()
	{
		$connect = new Connect();
		$sql = "select * from tbl_employees";
		return $connect->fetch($sql);
	}

	public function addempl()
	{
		$connect = new Connect();

		if (isset($_POST['btn_add_empl'])) 
		{
			$empl_name = $_POST["empl_name"];
			$empl_date = $_POST["empl_date"];
			$empl_gender = $_POST["empl_gender"];
			$empl_adress = $_POST["empl_adress"];
			$empl_job = $_POST["empl_job"];
			$sql = "insert into tbl_employees(empl_name,empl_date,empl_gender,empl_adress,empl_job) values('$empl_name','$empl_date','$empl_gender','$empl_adress','$empl_job')";
			$connect->execute($sql);
			header('location:index.php?stt=empl_add_success');
		}
	}

	public function seachempl($key)
	{
		$connect = new Connect();

		$sql = "SELECT * FROM `tbl_employees` WHERE empl_name LIKE '%$key%'";
		return $connect->fetch($sql);

	}
}

?>