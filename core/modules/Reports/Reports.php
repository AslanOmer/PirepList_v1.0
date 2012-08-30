<?php
class Reports extends CodonModule
{
	public $title = 'Reports';
	public function index() 
	{
	$this->set('userinfo', Auth::$userinfo);
	$this->set('pireps', PIREPData::GetAllReportsForPilot(Auth::$userinfo->pilotid));
	$this->set('airlines', OperationsData::getAllAirlines());
	$this->render('list_pireps.tpl');
	}
}
?>