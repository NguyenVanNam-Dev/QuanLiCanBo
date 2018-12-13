<?php
	
	class controller_nhanvien extends controller
	{

		public function __construct()
		{
			parent::__construct();
			$arr_nhanvien = $this->model->fetch("SELECT * FROM `tbl_employees`");
			include "view//view_employees.php";
		}
	}

	new controller_nhanvien(); 
 ?>