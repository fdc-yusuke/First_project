<?php 

//
class TestUserController extends AppController
{

	public $user = array ('TestUser');

	public function beforeFIlter(){
		parent ::beforeFIlter();


	function index(){
		
	}	


	function register(){
		if($this->request->is('post')){
			$data = $this->request->data;
			$this->UserList->create();
			$this->UserList->set(
				array(
					'username'=>$data['input_username'],
					'user_email_address'=>$data['input_email'],
					'password'=>$data['input_password']

				));
			

		}
	}

	}

}
?>