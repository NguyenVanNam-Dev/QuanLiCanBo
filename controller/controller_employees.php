<?php

class controller_nhanvien extends controller
{

	public function __construct()
	{
		parent::__construct();
		$arr_nhanvien = $this->model->fetch("SELECT * FROM `tbl_employees`");

		$act = isset($_GET["act"])?$_GET["act"] : "";
		switch ($act)
		{
			case 'do_add_empl':

			$empl_name = $_POST["empl_name"];
			$empl_date = $_POST["empl_date"];
			$empl_gender = $_POST["empl_gender"];
			$empl_adress = $_POST["empl_adress"];
			$empl_job = $_POST["empl_job"];
			$test = $this->model->execute("insert into tbl_employees(empl_name,empl_date,empl_gender,empl_adress,empl_job) values('$empl_name','$empl_date','$empl_gender','$empl_adress
                ','$empl_job')");
			if ($test == true) 
			{
				header("location:index.php?controller=employees&stt=add_empl_sucess");
			}
			else 
			{
				header("location:index.php?controller=employees&stt=add_empl_fail");
			}
			break;

			default:
					# code...
			break;
		}
		include "view//view_employees.php";
	}
}

new controller_nhanvien(); 
?>