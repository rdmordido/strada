<?php

class AjaxController extends BaseController {

	public function __construct(){
		parent::__construct();
	}

	public function getBranchByLocationId($id){
		return $this->branch_model->where('location_id',$id)->get();
	}

	public function postLogin(){
		$login_data = Input::get();
        $validator 	= Validator::make($login_data,array('username' => 'required','password' => 'required'));

        if($validator->passes()){
            
            $username 		= $login_data['username'];
            $password 		= $login_data['password'];
            $remember_me 	= (isset($login_data['remember_me'])) ? true : false;

            if (Auth::attempt(array('username' => $username, 'password' => $password, 'role_id' => 1),$remember_me)){
            	return Response::json(['success' => true]);
            }else{
                $error_message = 'Incorrect username or password';
                return Response::json(['success'=>false,'error_message'=>$error_message]);
            }
        }else{
            $error_message = 'Username and password are required';
            return Response::json(['success'=>false,'error_message'=>$error_message]);
        }
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
