<?php
/**
* 
*/
class Temp extends MY_Controller
{
	public function index()
	{
		$this->temp();
	}

	
	public function halaman($page)
	{
		$this->front($page);
	}
}

