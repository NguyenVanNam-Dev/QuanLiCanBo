<?php

include_once "connect.php";

class model_worker
{
	public function getWorker()
	{
		$connect = new Connect();
		$sql = "select * from tbl_worker";
		return $connect->fetch($sql);
	}

	public function addWorker()
	{
		$connect = new Connect();

		if (isset($_POST['btn_add_worker'])) 
		{
			$worker_name = $_POST["worker_name"];
			$worker_date = $_POST["worker_date"];
			$worker_gender = $_POST["worker_gender"];
			$worker_adress = $_POST["worker_adress"];
			$worker_level = $_POST["worker_level"];
			$sql = "insert into tbl_worker(worker_name,worker_date,worker_gender,worker_adress,worker_level) values('$worker_name','$worker_date','$worker_gender','$worker_adress','$worker_level')";
			$connect->execute($sql);
			header('location:index.php?stt=worker_add_success');
		}
	}

	public function seachWorker($key)
	{
		$connect = new Connect();

		$sql = "SELECT * FROM `tbl_worker` WHERE worker_name LIKE '%$key%'";
		return $connect->fetch($sql);
	}
}

?>