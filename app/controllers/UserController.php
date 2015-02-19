<?php

class UserController extends BaseController {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->data['users'] = $this->user_model->where('role_id',3)->get();
		return View::make('userlist',$this->data);
	}

	public function showLogin(){
		return View::make('login');
	}
	
	public function showRegister(){
		$this->data['locations'] = $this->location_model->all();
		return View::make('register',$this->data);
	}

	public function logout(){
		Auth::logout();
		return Redirect::to('/login');
	}
}
