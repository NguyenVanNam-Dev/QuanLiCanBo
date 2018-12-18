
<?php
	include('controller.php');
	include('model/model_worker.php');


	class controller_congnhan extends Controller
	{
		function index()
		{
			$m_worker = new model_worker();
			$worker = $m_worker->getWorker();
			$arrayName = array('worker'=>$worker);
			return $this->loadView('index',$arrayName);
		}

		function addWorker()
		{
			$m_worker = new model_worker();
			$m_worker->addWorker();
			return $this->loadView('view_add_worker');
		}

		function seachWorker()
		{
			$m_worker = new model_worker();
			$m_worker->seachWorker();
			return $this->loadView('view_seach_worker');
		}
	}

 ?>