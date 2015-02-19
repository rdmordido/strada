<?php

class HomeController extends BaseController {

	public function index()
	{
		$this->data['locations'] = $this->location_model->all();
		return View::make('index',$this->data);
	}

}
