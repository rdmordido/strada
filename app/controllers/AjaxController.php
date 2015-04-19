<?php
use SoapBox\Formatter\Formatter;
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
					,'email' 		=> 'required|unique:users,email'
					,'age' 			=> 'required'
					,'occupation' 	=> 'required'
					,'or_number' 	=> 'required'
					,'branch_code' 	=> 'required'
					,'area' 		=> 'required'
					,'dealer' 		=> 'required'
					,'sales' 		=> 'required'
					,'model' 		=> 'required'
					,'sales' 		=> 'required'
					,'color1' 		=> 'required'
					,'color2' 		=> 'required'
					,'color3' 		=> 'required'
					,'current_brand_model' 	=> 'required'
					,'like_most' 			=> 'required'
					,'other_brand_model' 	=> 'required'
					,'learn_source' 		=> 'required'
				);
		$validation_messages = array(
					 'email.unique' 		=> 'Email address already exist'
				);
		$validator = Validator::make($data,$validation_rules,$validation_messages);

		if($validator->passes()){

				/*chech for correct branch code for dealer*/
				$dealer = Branch::where('code',$data['branch_code'])->first();

				if($dealer == false || $dealer->code != $data['dealer'])
					return Response::json(array('success' => false,'error_message' => array('branch_code'=>'Control code is incorrect')));

				$newUser = $this->user_model->register($data);

				if($newUser){

					/*Send Email to Registered User*/
					$user_email = "Dear ".ucfirst($newUser->firstname)."<p></br></br>";
					$user_email .= "You have successfully registered for the All-new Mitsubishi Strada Pre-Order Savings Exclusive. Below is the summary of your registration details:";
					$user_email .= "<table>";
					$user_email .= "<tr><td>Name:</td><td>".ucfirst($newUser->firstname)." ".ucfirst($newUser->lastname)."</td></tr>";
					$user_email .= "<tr><td>Address:</td><td>".ucfirst($newUser->address)."</td></tr>";
					$user_email .= "<tr><td>OR number:</td><td>".strtoupper($newUser->or_number)."</td></tr>";
					$user_email .= "<tr><td>Contact number:</td><td>".$newUser->phone."</td></tr>";
					$user_email .= "<tr><td>Color of vehicle:</td><td>".$newUser->color1."</td></tr>";
					$user_email .= "<tr><td>Model of vehicle:</td><td>".$newUser->model."</td></tr>";
					$user_email .= "<tr><td>Dealer/Branch:</td><td>".$dealer->name."</td></tr>";
					$user_email .= "</table>";
					$user_email .= "<p>-REFERENCE CODE (".$newUser->reference_code.")</p>";
					$user_email .= "<p>";
					$user_email .= "Make sure to purchase your reserved Mitsubishi Strada on or before April 30, 2015.</br>";
					$user_email .= "For questions and concerns you may contact us through allnewstradaph@gmail.com";
					$user_email .= "</p>";
					$user_email .= "Thank you!";

					$sender 	= 'allnewstradaph@gmail.com';
					$recepient 	= $newUser->email;
					$headers  	= "From: {$sender}\r\n"; 
					$headers 	.= "Content-type: text/html\r\n"; 
					$subject 	= "All New Strada Registration";
					$message 	= $user_email;
					$email 		= mail($recepient, $subject, $message, $headers);

					/*Send Email to Dealers*/
					$dealer_email = "New User Registration<p></br></br>";
					$dealer_email .= "<table>";
					$dealer_email .= "<tr><td>Name:</td><td>".ucfirst($newUser->firstname)." ".ucfirst($newUser->lastname)."</td></tr>";
					$dealer_email .= "<tr><td>Address:</td><td>".ucfirst($newUser->address)."</td></tr>";
					$dealer_email .= "<tr><td>OR number:</td><td>".strtoupper($newUser->or_number)."</td></tr>";
					$dealer_email .= "<tr><td>Contact number:</td><td>".$newUser->phone."</td></tr>";
					$dealer_email .= "<tr><td>Color of vehicle:</td><td>".$newUser->color1."</td></tr>";
					$dealer_email .= "<tr><td>Model of vehicle:</td><td>".$newUser->model."</td></tr>";
					$dealer_email .= "<tr><td>Dealer/Branch:</td><td>".$dealer->name."</td></tr>";
					$dealer_email .= "</table>";
					$dealer_email .= "<p>-REFERENCE CODE (".$newUser->reference_code.")</p>";
					$dealer_email .= "<p>";
					$dealer_email .= "Make sure to purchase your reserved Mitsubishi Strada on or before April 30, 2015.</br>";
					$dealer_email .= "For questions and concerns you may contact us through allnewstradaph@gmail.com";
					$dealer_email .= "</p>";
					$dealer_email .= "Thank you!";

					$sender 	= 'allnewstradaph@gmail.com';
					$recepient 	= $dealer->email;
					//$recepient 	= 'budocski15@gmail.com';
					$headers  	= "From: {$sender}\r\n"; 
					$headers 	.= "Content-type: text/html\r\n"; 
					//$headers 	.= "Bcc: rdmordido@gmail.com\r\n";
					$subject 	= "All New Strada Registration";
					$message 	= $dealer_email;
					$email 		= mail($recepient, $subject, $message, $headers); 
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

	public function postEditUser(){
		$data = Input::get();
		$user = User::find($data['user_id']);
		$validation_rules = array(
					'user_id'				=> 'required'
					,'reference_code'		=> ($data['reference_code'] == $user->reference_code) ? '' : 'required|unique:users,reference_code'
					,'lastname'				=> 'required'
					,'firstname' 			=> 'required'
					,'address' 				=> 'required'
					,'phone' 				=> 'required'
					,'email' 				=> ($data['email'] == $user->email) ? '' : 'required|unique:users,email'
					,'age' 					=> 'required'
					,'occupation' 			=> 'required'
					,'or_number' 			=> 'required'
					,'branch_code' 			=> 'required'
					,'area' 				=> 'required'
					,'dealer' 				=> 'required'
					,'sales' 				=> 'required'
					,'model' 				=> 'required'
					,'sales' 				=> 'required'
					,'color1' 				=> 'required'
					,'color2' 				=> 'required'
					,'color3' 				=> 'required'
					,'current_brand_model' 	=> 'required'
					,'like_most' 			=> 'required'
					,'other_brand_model' 	=> 'required'
					,'learn_source' 		=> 'required'
				);
		$validator = Validator::make($data,$validation_rules);

		if($validator->passes()){

				/*chech for correct branch code for dealer*/
				$dealer = Branch::where('code',$data['branch_code'])->first();

				if($dealer == false || $dealer->code != $data['dealer'])
					return Response::json(array('success' => false,'error_message' => array('branch_code'=>'Control code mismatch')));

				$updateUser = $this->user_model->edit($data);
				if($updateUser){
					return Response::json(array('success' => true,'data' => $updateUser));
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

	public function deleteUser($id){
		$result = User::destroy($id);
		return Response::json(array('success' => $result));
	}
}
