<?php

class AjaxController extends BaseController {

	public function __construct(){
		parent::__construct();
	}

	public function getBranchByLocationId($id){
		return $this->branch_model->where('location_id',$id)->get();
	}
	
	public function postRegister(){
		$data = Input::get();		
		$validation_rules = array(
					 'lastname'		=> 'required'
					,'firstname' 	=> 'required'
					,'address' 		=> 'required'
					,'phone' 		=> 'required'
					,'email' 		=> 'required'
					,'area' 		=> 'required'
					,'dealer' 		=> 'required'
					,'model' 		=> 'required'
				);

		$validator = Validator::make($data,$validation_rules);

		if($validator->passes()){
				$newUser = $this->user_model->register($data);
				if($newUser){

					/*Send Email to Dealers*/
					$dealer 	= Branch::where('code',$newUser->dealer)->first();
					$mail_data 	= array('user'=>$newUser);

					$mail = Mail::send('emails.registration',$mail_data, function($message) use($dealer,$newUser){
						$message->subject('New Registration');
					    $message->from($newUser->email);
					    $message->to($dealer->email);
					});
					
					return Response::json(array('success' => true,'data' => $newUser));
				}
				else{
					return Response::json(array('success' => false,'error_message' => 'Something went wrong'));
				}
		}else{
			$messages 		= $validator->messages();
			$error_messages = array();
			foreach($validation_rules as $key=>$rule){
				if($rule != '' && $messages->has($key)){
					$error_messages[$key] = $messages->first($key);
				}
			}
			return Response::json(array('success' => false,'error_message' => $error_messages));
		}
	}

}
