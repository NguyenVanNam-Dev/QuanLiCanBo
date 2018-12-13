<?php
class controller_kysu extends controller{

	public function __construct()
	{
		parent::__construct();
		$arr_kysu = $this->model->fetch("select * from tbl_egn");

		include "view/view_kysu.php";
	}
} 

new controller_kysu();
 ?>