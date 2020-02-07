<?php 

class UserController extends AppController{ 

	public $user =array('User');

	public function beforeFIlter(){
		parent ::beforeFIlter();


		$this->Auth->allow(array(
			'login',
			'register'
		));

		 function login(){
			if ($this->request->is('post')) {
				if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirectUrl());
				}
				 $this->Flash->error(
            __('Username or password is incorrect')
        );
			}
		}
	}

	// public $uses =array('Employees');

	// public function beforeFilter(){
	// 	parent::beforeFilter();

	// 	$this->Auth->allow(array(
	// 		'login',
	// 		'register'
	// 	));
	// }

	// public function index () {
	// }

	// public function login(){


	// 	$this->Auth->login(array(
	// 		'id' => 1,
	// 		'gender'=>'male'
	// 	));

	// }

	// public function login_femail(){
	// 	// - get username and password from  thr form

	// 	// - get user from db where username == username=inputted and password

	// 	// - if has value 
	// 	if (condition) {
	// 		$this->Auth->login(array(
	// 		'id' => 1,
	// 		'gender'=>'femail'
	// 	));

	// 	}else
	

	// }

	// public function prison(){


	// }
	
	// public function register(){
	// 	if ($this->request->is('post')) {
	
	// 		$data = array('Employees' => $this->request->data);
	// 		$res = $this->Employees->save($data);
	// 		var_dump($res);
		
	
	// 		if ($this->Employees->save($data)) {
	// 			$this->Session->setFlash('Success');
	// 		}
	// 	} else{
	// 		$this->Session->setFlash('failed');
	// 	}
	// }


	// public function logout(){
	// 	$this->Auth->logout();

	// }
}


?>