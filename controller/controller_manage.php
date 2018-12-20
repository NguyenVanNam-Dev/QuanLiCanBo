
<?php
include('controller.php');
	//include_once('model/connect.php');
include_once('model/model_empl.php');
include_once('model/model_eng.php');
include_once('model/model_worker.php');

class controller_manage extends Controller
{
	function index()
	{
		$m_worker = new model_worker();
		$m_empl = new model_empl();
		$m_eng = new model_eng();
		$worker = $m_worker->getWorker();
		$empl = $m_empl->getEmpl();
		$eng = $m_eng->geteng();
		$arrayName = array('worker'=>$worker,'empl'=>$empl,'eng'=>$eng);
		return $this->loadView('index',$arrayName);
	}
		function index()
	{
		$m_worker = new model_worker();
		$m_empl = new model_empl();
		$m_eng = new model_eng();
		$worker = $m_worker->getWorker();
		$empl = $m_empl->getEmpl();
		$eng = $m_eng->geteng();
		$arrayName = array('worker'=>$worker,'empl'=>$empl,'eng'=>$eng);
		return $this->loadView('index',$arrayName);
	}

	function addWorker()
	{
		$m_worker = new model_worker();
		$m_worker->addWorker();
		return $this->loadView('view_add_worker');
	}

	function addEmpl()
	{
		$m_empl = new model_empl();
		$m_empl->addEmpl();
		return $this->loadView('view_add_empl');
	}

	function addEng()
	{
		$m_eng = new model_eng();
		$m_eng->addeng();
		return $this->loadView('view_add_eng');
	}
}

