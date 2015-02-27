<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->data['users'] = $this->user_model->where('role_id',3)->get();
		return View::make('user.index',$this->data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->data['user'] = User::find($id);
		return View::make('user.show',$this->data);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$this->data['locations'] = $this->location_model->all();
		$this->data['user'] = User::find($id);
		return View::make('user.edit',$this->data);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function showLogin(){
		if(Auth::check()) return Redirect::to('users');
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

	public function download(){
		  $data 	= User::where('role_id',3)->orderBy('branch_code','created_at')->get();
		  $columns 	= array(
		  				 'created_at'
		  				,'branch_code'
		  				,'reference_code'
		  				,'lastname'
		  				,'firstname'
		  				,'m.i'
		  				,'address'
		  				,'phone'
		  				,'email'
		  				,'age'
		  				,'gender'
		  				,'civil_status'
		  				,'occupation'
		  				,'or_number'
		  				,'model'
		  				,'sales'
		  				,'color1'
		  				,'color2'
		  				,'color3'
		  				,'current_brand_model'
		  				,'like_most'
		  				,'other_brand_model'
		  				,'learn_source'
		  			);
		  $labels 	= array(
		  				 'Date Registered'
		  				,'Branch Code'
		  				,'Reference Code'
		  				,'Last Name'
		  				,'First Name'
		  				,'M.I'
		  				,'Address'
		  				,'Contact Number'
		  				,'Email Address'
		  				,'Age'
		  				,'Gender'
		  				,'Civil Status'
		  				,'Occupation'
		  				,'OR Number'
		  				,'Preferred Model/Variant'
		  				,'Sales Executive'
		  				,'1st Color Priority'
		  				,'2nd Color Priority'
		  				,'3rd Color Priority'
		  				,'Are you a current pick-up owner? If yes, what brand and model?'
		  				,'What do you like most about the Strada?'
		  				,'Did you check out another pick-up brands? If yes, what brands and models?'
		  				,'Where did you learn about the Strada?'
		  			);
		  $options 	= array(
						 'filename' => 'allnewstrada.csv'
						,'columns' 	=> $columns
						,'firstRow' => $labels
		  				);
		  return BaseController::downloadCSV($data, $options);		  
	}
}
