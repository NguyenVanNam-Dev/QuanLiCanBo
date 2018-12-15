<?php
class controller_kysu extends controller{

	public function __construct()
	{
		parent::__construct();
		$arr_kysu = $this->model->fetch("select * from tbl_egn");

		$act = isset($_GET["act"])?$_GET["act"] : "";
		switch ($act)
		{
			case 'do_add_eng':

			$eng_name = $_POST["eng_name"];
			$eng_date = $_POST["eng_date"];
			$eng_gender = $_POST["eng_gender"];
			$eng_adress = $_POST["eng_adress"];
			$eng_train = $_POST["eng_train"];
			$test = $this->model->execute("insert into tbl_egn(eng_name,eng_date,eng_gender,eng_adress,eng_train) values('$eng_name','$eng_date','$eng_gender','$eng_adress
				','$eng_train')");

			if ($test == true) 
			{
				header("location:index.php?controller=kysu&stt=add_eng_sucess");
			}
			else 
			{
				
				header("location:index.php?stt=add_eng_fail");
			}
			break;

			case 'seach_eng':
			$search = addslashes($_POST['seach_name_eng']);
			$sql = "select * from tbl_egn where eng_name like '%$search%'";

			$numb = $this->model->num_rows($sql);
			if ($numb > 0) {
				echo "          <div class='alert alert-success alert-dismissible'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>$numb</strong>  kết quả trả về với từ khóa <strong>$search</strong> 
          </div>";
				$arr_kysu = $this->model->fetch($sql);
			}
			else{
				echo " <div class='alert alert-warning alert-dismissible'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Rất tiếc</strong>không tìm thấy kết qua        </div>";
          				$arr_kysu = $this->model->fetch($sql);
			}

			break;
			default:
					# code...
			break;
		}

		include "view/view_kysu.php";
	}
} 

new controller_kysu();
?>