<?php

include "connect.php";

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

		if (isset($_POST['btn_add_worker'])) {
			$worker_name = $_POST[""]
		}
		$sql = "insert into tbl_worker(worker_name,worker_date,worker_gender,worker_adress,worker_level) values('$worker_name','$worker_date','$worker_gender','$worker_adress','$worker_level')";
		$model->execute($sql);
	}
}

?>