<?php
class Airline extends CodonModule
{
	public $title = 'PIREP List';
	
	public function index() 
	{
		$revision = trim(file_get_contents(CORE_PATH.'/version'));
			if($revision != 'simpilot 5.5.2')
				{
					echo '<center>phpVMS Version Installed Is Not Compatible With This Module!</center><br />';
					echo '<center>phpVMS Version Installed: '.$revision.'</center>';
				}
			else
			{
				$this->set('airlines', OperationsData::getAllAirlines());
				$this->set('userinfo', PilotData::getAllPilots());
				$this->set('$pireps', PIREPData::GetAllReportsForPilot(Auth::$userinfo->pilotid));
				$this->show('/pireplist/airline_select.php');
			}
	}
	
	
	public function result() 
	{
		$this->set('userinfo', Auth::$userinfo);
		$this->set('pireps', PIREPData::GetAllReportsForPilot(Auth::$userinfo->pilotid));
		$this->set('airlines', OperationsData::getAllAirlines());
		$this->show('/pireplist/list_pireps.php');
	}
}
?>