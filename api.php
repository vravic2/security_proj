<?php
    
	/* 			
			output_data : JSON 		
 	*/
	
	require '/libs/password.php';
	require_once("Rest.inc.php");
	class API extends REST {
					
		/*
		 * Public method for access api.
		 * This method dynmically call the method based on the query string
		 *
		 */
		public function processApi(){
		//$_REQUEST['rquest'] = login';
			$func = strtolower(trim(str_replace("/","",$_REQUEST['rquest'])));
			if((int)method_exists($this,$func) > 0)
				$this->$func();
			else
				$this->response('',404);				// If the method not exist with in this class, response would be "Page not found".
		}
		
		/* 
		*	Simple login API
		*   Login must be POST method
		*	status:completed
		*/
		private function login(){
			include_once 'biz/indexbiz.php';
			$ind = new indexbiz();	
			// Cross validation if the request method is GET else it will return "Not Acceptable" status
				if($this->get_request_method() != "GET"){
					$this->response('',406);
				}
			$email = $this->_request['email'];		
			$password = $this->_request['password'];
			
			// Input validations
			if($ind->validateUser($email,$password)==1)
			{
				//Creating session for username and zipcode.
				session_start();
				$_SESSION['username'] = $this->_REQUEST['signname'];
				$_SESSION['zipcode'] = $this->_REQUEST['signzip'];
				
				$this->response('', 200);	// login success message
			}
			else
				$this->response('', 203);	// login failure message
		}
		
		/* 
		 *	Simple signup API
		 *  signup must be POST method
		 *  status:completed
		 */
		private function signup(){	
			include_once 'biz/indexbiz.php';
			$ind = new indexbiz();							
			// Cross validation if the request method is GET else it will return "Not Acceptable" status
			if($this->get_request_method() != "POST")
				$this->response('',406);
			$userDetails['name'] = $this->_REQUEST['signname'];
			$userDetails['pass'] = $this->_REQUEST['signconfirmpassword'];
			$userDetails['email'] = $this->_REQUEST['signemail'];
			$userDetails['age'] = $this->_REQUEST['signage'];
			$userDetails['zip'] = $this->_REQUEST['signzip'];
			$ind->addUser($userDetails);			
			$this->response('',201);	// If no records "No Content" status
		}
		
		/* 
		 *	Create team API
		 *  This must be POST method
		 *  status:completed
		 */
		private function createteam(){
			include_once 'biz/portalbiz.php';
			$port = new portalbiz();	
			// Cross validation if the request method is GET else it will return "Not Acceptable" status
			//if($this->get_request_method() != "POST")
			//	$this->response('',406);				
			//$teamDetails['name'] = $this->_REQUEST['teamname'];
			//$teamDetails['country'] = $this->_REQUEST['country'];
			//$teamDetails['zipcode'] = $this->_REQUEST['zipcode'];
			$teamDetails['name']="RR";
			$teamDetails['country']='India';
			$teamDetails['zipcode']='987789';
			$port->addTeam($teamDetails);
			$this->response('',201);	// If no records "No Content" status
		}
		
		/* 
		 *	Delete team API
		 *  This must be GET method
		 *  status:
		 */
		private function deleteTeam(){
			include_once 'biz/portalbiz.php';
			$port = new portalbiz();
			// Cross validation if the request method is DELETE else it will return "Not Acceptable" status
			if($this->get_request_method() != "DELETE"){
				$this->response('',406);
			}
			$id = (int)$this->_request['id'];
			if($id > 0){				
				$port->deleteTeam($id);
			}else
				$this->response('',204);	// If no records "No Content" status
		}
		
		
		/* 
		 *	search players API
		 *  This must be GET method
		 *  status:
		 */
		private function searchuser(){
			include_once 'biz/portalbiz.php';
			$port = new portalbiz();
			// Cross validation if the request method is DELETE else it will return "Not Acceptable" status
			if($this->get_request_method() != "GET"){
				$this->response('',406);
			}
			$searchType = $this->_request['searchType'];
			$searchValue = $this->_request['searchValue'];
			$port->searchPlayers($searchType,$searchValue);
			

		}
		
		/*
		 *	Encode array into JSON
		*/
		private function json($data){
			if(is_array($data)){
				return json_encode($data);
			}
		}
	}
	
	// Initiiate Library
	
	$api = new API;
	$api->processApi();
?>