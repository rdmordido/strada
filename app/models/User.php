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


	public function register($data){
		$user = new User;
		$user->lastname 		= (isset($data['lastname']) && !empty($data['lastname'])) 			? $data['lastname'] 		: null;
		$user->firstname 		= (isset($data['firstname']) && !empty($data['firstname'])) 		? $data['firstname'] 		: null;
		$user->mi 				= (isset($data['mi']) && !empty($data['mi'])) 						? $data['mi'] 				: null;
		$user->address 			= (isset($data['address']) && !empty($data['address'])) 			? $data['address'] 			: null;
		$user->phone 			= (isset($data['phone']) && !empty($data['phone'])) 				? $data['phone'] 			: null;
		$user->email 			= (isset($data['email']) && !empty($data['email'])) 				? $data['email'] 			: null;
		$user->civil_status 	= (isset($data['civil_status']) && !empty($data['civil_status'])) 	? $data['civil_status'] 	: null;
		$user->gender 			= (isset($data['gender']) && !empty($data['gender'])) 				? $data['gender'] 			: null;
		$user->occupation 		= (isset($data['occupation']) && !empty($data['occupation'])) 		? $data['occupation'] 		: null;
		$user->family 			= (isset($data['family']) && !empty($data['family'])) 				? $data['family'] 			: null;
		$user->learn_source 	= (isset($data['learn_source']) && !empty($data['learn_source'])) 	? $data['learn_source'] 	: null;
		$user->area 			= (isset($data['area']) && !empty($data['area'])) 					? $data['area'] 			: null;
		$user->dealer 			= (isset($data['dealer']) && !empty($data['dealer'])) 				? $data['dealer'] 			: null;
		$user->model 			= (isset($data['model']) && !empty($data['model'])) 				? $data['model'] 			: null;
		$user->sales 			= (isset($data['sales']) && !empty($data['sales'])) 				? $data['sales'] 			: null;
		$user->color1 			= (isset($data['color1']) && !empty($data['color1'])) 				? $data['color1'] 			: null;
		$user->color2 			= (isset($data['color2']) && !empty($data['color2'])) 				? $data['color2'] 			: null;
		$user->color3 			= (isset($data['color3']) && !empty($data['color3'])) 				? $data['color3'] 			: null;
		$user->car_order 		= (isset($data['car_order']) && !empty($data['car_order'])) 		? $data['car_order'] 		: null;
		$user->price 			= (isset($data['price']) && !empty($data['price'])) 				? $data['price'] 			: null;
		$user->design 			= (isset($data['design']) && !empty($data['design'])) 				? $data['design'] 			: null;
		$user->size 			= (isset($data['size']) && !empty($data['size'])) 					? $data['size'] 			: null;
		$user->features 		= (isset($data['features']) && !empty($data['features'])) 			? $data['features'] 		: null;
		$user->brand 			= (isset($data['brand']) && !empty($data['brand'])) 				? $data['brand'] 			: null;
		$user->other_models 	= (isset($data['other_models']) && !empty($data['other_models'])) 	? $data['other_models'] 	: null;
		if($user->save())
			return $user;
		else
			return false;
	}

	public function role(){
		return $this->belongsTo('Role');
	}
}
