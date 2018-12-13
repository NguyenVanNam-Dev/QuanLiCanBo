<?php
	
	class controller_congnhan extends controller{
		public function __construct()
		{

			parent::__construct();
			$arr = $this->model->fetch("select * from tbl_worker");

			//load view
			include "view/view_worker.php";
		}
	} 

	new controller_congnhan();
 ?>