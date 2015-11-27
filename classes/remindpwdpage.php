<?php
class RemindPasswordPage extends RunnerPage
{
	
	function RemindPasswordPage(&$params)
	{
		parent::RunnerPage($params);
		
		$this->formBricks["header"] = "remindheader";
		$this->formBricks["footer"] = "remindbuttons";
		$this->assignFormFooterAndHeaderBricks( true );	
	}

	/**
	 * Set the connection property
	 */
	protected function setTableConnection()
	{
		global $cman;
		$this->connection = $cman->getForLogin();		
	}	
}
?>