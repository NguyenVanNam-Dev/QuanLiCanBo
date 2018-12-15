<?php

class controller_congnhan extends controller{
	public function __construct()
	{
		parent::__construct();
		$arr = $this->model->fetch("select * from tbl_worker");

		$act = isset($_GET["act"])?$_GET["act"] : "";
		switch ($act) {
			case 'do_add':

			$worker_name = $_POST["worker_name"];
			$worker_date = $_POST["worker_date"];
			$worker_gender = $_POST["worker_gender"];
			$worker_adress = $_POST["worker_adress"];
			$worker_level = $_POST["worker_level"];
			
			$test = $this->model->execute("insert into tbl_worker(worker_name,worker_date,worker_gender,worker_adress,worker_level) values('$worker_name','$worker_date','$worker_gender','$worker_adress','$worker_level')");
			if ($test == true) {
				header("location:index.php?controller=congnhan&stt=add_sucess");
			}
			else 
			{
				header("location:index.php?controller=congnhan&stt=add_fail");
			}
			break;
			case 'seach_worker':
			$search = addslashes($_POST['seach_name_worker']);
			$sql = "select * from tbl_worker where worker_name like '%$search%'";

			$numb = $this->model->num_rows($sql);
			if ($numb > 0) {
				echo "          <div class='alert alert-success alert-dismissible'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<strong>$numb</strong>  kết quả trả về với từ khóa <strong>$search</strong> 
				</div>";
				$arr = $this->model->fetch($sql);
			}
			else{
				echo " <div class='alert alert-warning alert-dismissible'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<strong>Rất tiếc</strong>không tìm thấy kết qua        </div>";
				$arr = $this->model->fetch($sql);
			}

			break;
			default:
					# code...
			break;
		}
			//load view
		include "view/view_worker.php";
	}
} 
new controller_congnhan();
?>