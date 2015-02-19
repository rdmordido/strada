<?php

class BaseController extends Controller {

	public $data = array();
	
	public function __construct(){
		$this->user_model 		= new User();
		$this->role_model 		= new Role();
		$this->location_model 	= new Location();
		$this->dealer_model 	= new Dealer();
		$this->branch_model 	= new Branch();
	}
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
