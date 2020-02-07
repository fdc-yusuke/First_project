<?php 


class StoreUserController extends AppController{
	public $uses= array ('StoreUser','StoreApp');

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('login');

		var_dump($this->Auth->user('StoreUser.id'));
	}


	public function logout(){
		$this->Auth->logout();
	}

	public function index(){
		$current_user_id = $this->Auth->user('StoreUser.id');

		$applists = $this->StoreApp->find('all', array(
			'conditions' => array(
				'app_owner_id' => $current_user_id
			)
		));

	

		// $this->set('storeuser', $this->StoreApp->find('all', array(
		// 	'conditions' => array(
		// 		'app_owner_id' => $current_user_id
		// 	)
		// )));


		//applist = $applist    / this is for view variable name  
		$this->set('applist',$applists);
	}


	public function registration() {
		if ($this->request->is('post')) {
			$data=$this->request->data;

			// this is for saving the image infromation
			$this->StoreUser->create();
			$this->StoreUser->set(
				array(
					'user_name'=>$data['input_username'],
					'password'=>$data['input_password'],
					'registration_date'=>date('Y-m-d H:i:s'),
					'last_edit_date'=>date('Y-m-d H:i:s'),
					'delete_date'=>date('Y-m-d H:i:s'),

					'email'=>$data['input_email']
				));
			$user=$this->StoreUser->save();

			// return $this->redirect("/StoreApp");


		}
	}

	public function login() {
		if ($this->request->is('post')) {
			
			var_dump($this->request->data);
			$app_users = $this->StoreUser->find('first',array(
				'conditions'=>array(
					'StoreUser.email'=>($this->request->data("username")),
					'StoreUser.password'=>($this->request->data("password"))
				)
			));

			if(empty($app_users)) {
				$this->Flash->error(__('Invalid username or password, try again'));
			}else{

				if ($this->Auth->login($app_users)) {
					$this->redirect("/StoreUser");
				} else {
					$this->Flash->error(__('Invalid username or password, try again'));
				}
			}

		}
	}


	public function makeapp(){
		if ($this->request->is('post')) {
			$data=$this->request->data;

			// this is for saving the image infromation
			$this->StoreApp->create();
			$this->StoreApp->set(
				array(
					'app_name'=>$data['input_appname'],
					'app_description'=>$data['input_discription'],
					'app_owner_id'=>$this->Auth->User('StoreUser.id'),
					'create_date'=> date("Y-m-d H:i:s"),
					

				// 'admin_email'=>$data['input_email']
				));


			$user=$this->StoreApp->save();
			$this->set('view_users',$user);
			if ($user) {
			 	return $this->redirect("/StoreUser");
			}
		}

	}


	public function edit(){

	}



}
?>