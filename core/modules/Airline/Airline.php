<?php
class Airline extends CodonModule
{
	public $title = 'Select';
	
	public function index() 
	   {
            $this->set('airlines', OperationsData::getAllAirlines());
			$this->set('userinfo', PilotData::getAllPilots());
			$this->set('$pireps', PIREPData::GetAllReportsForPilot(Auth::$userinfo->pilotid));
            $this->show('airline_select.tpl');
			
            
        }
}
?>