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
		$validator = Validator::make($data,$validation_rules);

		if($validator->passes()){

				/*chech for correct branch code for dealer*/
				$dealer = Branch::where('code',$data['branch_code'])->first();

				if($dealer == false || $dealer->code != $data['dealer'])
					return Response::json(array('success' => false,'error_message' => array('branch_code'=>'Control code mismatch')));

				$newUser = $this->user_model->register($data);

				if($newUser){

					$html = "Dear ".ucfirst($newUser->firstname)."<p></br></br>";
					$html .= "You have successfully registered for the All-new 2015 Mitsubishi Strada Pre-Order Savings Exclusive. Below is the summary of your registration details:";
					$html .= "<table>";
					$html .= "<tr><td>Name:</td><td>".ucfirst($newUser->firstname)." ".ucfirst($newUser->lastname)."</td></tr>";
					$html .= "<tr><td>Address:</td><td>".ucfirst($newUser->address)."</td></tr>";
					$html .= "<tr><td>OR number:</td><td>".strtoupper($newUser->or_number)."</td></tr>";
					$html .= "<tr><td>Contact number:</td><td>".$newUser->phone."</td></tr>";
					$html .= "<tr><td>Color of vehicle:</td><td>".$newUser->color1."</td></tr>";
					$html .= "<tr><td>Model of vehicle:</td><td>".$newUser->model."</td></tr>";
					$html .= "<tr><td>Dealer/Branch:</td><td>".$dealer->name."</td></tr>";
					$html .= "</table>";
					$html .= "<p>-REFERENCE CODE (".$newUser->reference_code.")</p>";
					$html .= "<p>";
					$html .= "Make sure to purchase your reserved Mitsubishi Strada on or before April 30, 2015.</br>";
					$html .= "For questions and concerns you may contact us through allnewstradaph@gmail.com";
					$html .= "</p>";
					$html .= "Thank you!";

					/*Send Email to Registered User*/
					$sender 	= 'no-reply@allnewstrada.ph';
					$recepient 	= $newUser->email;
					//$sender 	= 'robmordido@gmail.com';
					//$recepient 	= 'rdmordido@gmail.com';
					$headers  	= "From: {$sender}\r\n"; 
			    	        $headers 	.= "Content-type: text/html\r\n"; 
					$subject 	= "All New Strada Registration";
					$message 	= $html;
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

}
