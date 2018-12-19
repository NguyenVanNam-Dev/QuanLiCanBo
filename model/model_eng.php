<?php

include_once "connect.php";

class model_eng
{
	public function geteng()
	{
		$connect = new Connect();
		$sql = "select * from tbl_egn";
		return $connect->fetch($sql);
	}

	public function addeng()
	{
		$connect = new Connect();

		if (isset($_POST['btn_add_eng'])) 
		{
			$eng_name = $_POST["eng_name"];
			$eng_date = $_POST["eng_date"];
			$eng_gender = $_POST["eng_gender"];
			$eng_adress = $_POST["eng_adress"];
			$eng_train = $_POST["eng_train"];
			$sql = "insert into tbl_egn(eng_name,eng_date,eng_gender,eng_adress,eng_level) values('$eng_name','$eng_date','$eng_gender','$eng_adress','$eng_train')";
			$connect->execute($sql);
			header('location:index.php?stt=eng_add_success');
		}
	}

	public function seacheng($key)
	{
		$connect = new Connect();

		$sql = "SELECT * FROM `tbl_egn` WHERE eng_name LIKE '%$key%'";
		return $connect->fetch($sql);

	}
}

?>