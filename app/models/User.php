<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	//protected $appends = array('reference_code');


	public function register($data){
		
		/*Limit user registration to 1000 users per branch*/
		$count = User::where('branch_code',$data['branch_code'])->count();
		if($count > 1000)
			return false;

		$user = new User;
		$user->lastname 		= (isset($data['lastname']) && !empty($data['lastname'])) 			? $data['lastname'] 		: null;
		$user->firstname 		= (isset($data['firstname']) && !empty($data['firstname'])) 		? $data['firstname'] 		: null;
		$user->mi 				= (isset($data['mi']) && !empty($data['mi'])) 						? $data['mi'] 				: null;
		$user->address 			= (isset($data['address']) && !empty($data['address'])) 			? $data['address'] 			: null;
		$user->phone 			= (isset($data['phone']) && !empty($data['phone'])) 				? $data['phone'] 			: null;
		$user->email 			= (isset($data['email']) && !empty($data['email'])) 				? $data['email'] 			: null;
		$user->age 				= (isset($data['age']) && !empty($data['age'])) 					? $data['age'] 				: null;
		$user->civil_status 	= (isset($data['civil_status']) && !empty($data['civil_status'])) 	? $data['civil_status'] 	: null;
		$user->gender 			= (isset($data['gender']) && !empty($data['gender'])) 				? $data['gender'] 			: null;
		$user->occupation 		= (isset($data['occupation']) && !empty($data['occupation'])) 		? $data['occupation'] 		: null;
		$user->or_number 		= (isset($data['or_number']) && !empty($data['or_number'])) 		? $data['or_number'] 		: null;
		$user->branch_code 		= (isset($data['branch_code']) && !empty($data['branch_code'])) 	? $data['branch_code'] 		: null;
		$user->area 			= (isset($data['area']) && !empty($data['area'])) 					? $data['area'] 			: null;
		$user->dealer 			= (isset($data['dealer']) && !empty($data['dealer'])) 				? $data['dealer'] 			: null;
		$user->model 			= (isset($data['model']) && !empty($data['model'])) 				? $data['model'] 			: null;
		$user->sales 			= (isset($data['sales']) && !empty($data['sales'])) 				? $data['sales'] 			: null;
		$user->color1 			= (isset($data['color1']) && !empty($data['color1'])) 				? $data['color1'] 			: null;
		$user->color2 			= (isset($data['color2']) && !empty($data['color2'])) 				? $data['color2'] 			: null;
		$user->color3 			= (isset($data['color3']) && !empty($data['color3'])) 				? $data['color3'] 			: null;
		$user->current_brand_model 	= (isset($data['current_brand_model']) && !empty($data['current_brand_model'])) 	? $data['current_brand_model'] 	: null;
		$user->like_most 			= (isset($data['like_most']) && !empty($data['like_most'])) 						? $data['like_most'] 			: null;
		$user->other_brand_model 	= (isset($data['other_brand_model']) && !empty($data['other_brand_model'])) 		? $data['other_brand_model'] 	: null;
		$user->learn_source 		= (isset($data['learn_source']) && !empty($data['learn_source'])) 					? $data['learn_source'] 		: null;
		$user->reference_code 		= $this->generateReferenceCode($user->branch_code);
		if($user->save())
			return $user;
		else
			return false;
	}

	public function edit($data){
		$user 					= (isset($data['user_id']) && !empty($data['user_id'])) ? User::find($data['user_id']) : false;		
		if($user){
			$user->reference_code 		= (isset($data['reference_code']) && !empty($data['reference_code'])) 				? $data['reference_code'] 		: $user->reference_code;
			$user->lastname 			= (isset($data['lastname']) && !empty($data['lastname'])) 							? $data['lastname'] 			: $user->lastname;
			$user->firstname 			= (isset($data['firstname']) && !empty($data['firstname'])) 						? $data['firstname'] 			: $user->firstname;
			$user->mi 					= (isset($data['mi']) && !empty($data['mi'])) 										? $data['mi'] 					: $user->mi;
			$user->address 				= (isset($data['address']) && !empty($data['address'])) 							? $data['address'] 				: $user->address;
			$user->phone 				= (isset($data['phone']) && !empty($data['phone'])) 								? $data['phone'] 				: $user->phone;
			$user->email 				= (isset($data['email']) && !empty($data['email'])) 								? $data['email'] 				: $user->email;
			$user->age 					= (isset($data['age']) && !empty($data['age'])) 									? $data['age'] 					: $user->age;
			$user->civil_status 		= (isset($data['civil_status']) && !empty($data['civil_status'])) 					? $data['civil_status'] 		: $user->civil_status;
			$user->gender 				= (isset($data['gender']) && !empty($data['gender'])) 								? $data['gender'] 				: $user->gender;
			$user->occupation 			= (isset($data['occupation']) && !empty($data['occupation'])) 						? $data['occupation'] 			: $user->occupation;
			$user->or_number 			= (isset($data['or_number']) && !empty($data['or_number'])) 						? $data['or_number'] 			: $user->or_number;
			$user->branch_code 			= (isset($data['branch_code']) && !empty($data['branch_code'])) 					? $data['branch_code'] 			: $user->branch_code;
			$user->area 				= (isset($data['area']) && !empty($data['area'])) 									? $data['area'] 				: $user->area;
			$user->dealer 				= (isset($data['dealer']) && !empty($data['dealer'])) 								? $data['dealer'] 				: $user->dealer;
			$user->model 				= (isset($data['model']) && !empty($data['model'])) 								? $data['model'] 				: $user->model;
			$user->sales 				= (isset($data['sales']) && !empty($data['sales'])) 								? $data['sales'] 				: $user->sales;
			$user->color1 				= (isset($data['color1']) && !empty($data['color1'])) 								? $data['color1'] 				: $user->color1;
			$user->color2 				= (isset($data['color2']) && !empty($data['color2'])) 								? $data['color2'] 				: $user->color2;
			$user->color3 				= (isset($data['color3']) && !empty($data['color3'])) 								? $data['color3'] 				: $user->color3;
			$user->current_brand_model 	= (isset($data['current_brand_model']) && !empty($data['current_brand_model'])) 	? $data['current_brand_model'] 	: $user->current_brand_model;
			$user->like_most 			= (isset($data['like_most']) && !empty($data['like_most'])) 						? $data['like_most'] 			: $user->like_most;
			$user->other_brand_model 	= (isset($data['other_brand_model']) && !empty($data['other_brand_model'])) 		? $data['other_brand_model'] 	: $user->other_brand_model;
			$user->learn_source 		= (isset($data['learn_source']) && !empty($data['learn_source'])) 					? $data['learn_source'] 		: $user->learn_source;			
			if($user->save())
				return $user;
			else
				return false;
		}else
			return false;
	}

	public function generateReferenceCode($branch_code){
		$user_count = User::where('branch_code',$branch_code)->count() + 1;
		return $branch_code.'-'.sprintf("%04d",$user_count);
	}

	public function role(){
		return $this->belongsTo('Role');
	}

	public function branch(){
		return $this->belongsTo('Branch','branch_code','code');
	}
}
