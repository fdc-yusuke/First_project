<?php 

class StoreAdminController extends AppController{
	public $uses = array ('StoreUser','StoreAdmin');

	public function index(){
		$this->StoreUser->find();
		$this->set('storeadmin',$this->StoreAdmin->find('all'));

		$admin_name = $this->StoreAdmin->find('all');
		$data= $this->request->query;
		$search=$this->request->query("search");
		var_dump($data);
		var_dump($this->Auth->user('StoreUser.id'));

// pagination   look at index.ctp page 
			$search = $this->paginate('StoreAdmin');


			$this ->set("storeadmin", $search);

	}

   // this is registration code for admin 
	
	public function register() {
		if ($this->request->is('post')) {
			$data=$this->request->data;

			// this is for saving the image infromation
			$this->StoreAdmin->create();
			$this->StoreAdmin->set(
				array(
					'admin_name'=>$data['input_username'],
					'admin_password'=>$data['input_password'],
					'admin_email'=>$data['input_email']
				));
			$user=$this->StoreAdmin->save();

			$image_directory = ROOT . "/app/" . WEBROOT_DIR . "/
			profile_pictures";


			if (isset($_FILES["input_images"]["tmp_name"]) && !
				empty($_FILES["input_images"]["tmp_name"])) {

				$path_info =pathinfo($_FILES["input_images"]["name"]);



		// $new_image_file = $user["StoreAdmin"]["id"] . "." .
		// $path_info["extension"];

		// $source_file = $_FILES["input_images"]["tmp_name"];

		// move_uploaded_file($source_file, $target_file);






		// $this->StoreAdmin->read(null,$user["StoreAdmin"]["id"]);
		// $this->StoreAdmin->set(
		// 	array(
		// 		'image'=>$new_image_file,
		// 	));
		// $this->StoreAdmin->save();


			}
		return $this->redirect("/StoreAdmin");


		}
	}


	public function edit(){
		$user_id =$this->request->query('id');
		if ($this->request->is('post')) {
			$data=$this->request->data;


			$this->StoreAdmin->read(null,$user_id);
			$this->StoreAdmin->set(
				array(
					'admin_name'=>$data['input_username'],
					'admin_password'=>$data['input_password'],
					'admin_email'=>$data['input_email']
				));
			$this->StoreAdmin->save();



		}

		$user = $this->StoreAdmin->find('first',array(
			'conditions'=>array(
				'admin_id'=>$user_id

			)
		));
		var_dump($user);
		
		$this->set('view_user',$user);
	}

	public function list (){

	}


	public function login() {
		if ($this->request->is('post')) {
			var_dump($this->request->data["StoreAdmin"]["username"]);
			var_dump($this->request->data["StoreAdmin"]["password"]);


			$app_users = $this->StoreAdmin->find('first',array
				(
					'conditions'=>array(
						'StoreAdmin.admin_email'=>$this->request->data["StoreAdmin"]["username"],

						'StoreAdmin.admin_password'=>$this->request->data["StoreAdmin"]["password"]
					)
				));

			var_dump($app_users);

			if(empty($app_users)) {
				$this->Flash->error(__('Invalid username or password, try again'));
			}else{

				if ($this->Auth->login($app_users)) {
					$this->redirect($this->Auth->redirect());
				} else {
					$this->Flash->error(__('Invalid username or password, try again'));
				}
			}


		}

		if($this->Auth->user()){
			$this->redirect($this->Auth->redirect());
		}
	}

	public function logout() {
		   $this->redirect($this->Auth->logout());
    return;
}





public function delete(){
// これはviewを作成せずにファンクションをしたくない時に使う
	$this->autoRender = false;
	$user_id = $this->request->query('id');
	var_dump($user_id);


	$this->StoreAdmin->delete($user_id);
	return $this->redirect("/StoreAdmin/index");
}
 // public $components = array(
 //        'Flash',
 //        'Auth' => array(
 //            'loginRedirect' => array(
 //                'controller' => 'posts',
 //                'action' => 'index'
 //            ),
 //            'logoutRedirect' => array(
 //                'controller' => 'pages',
 //                'action' => 'display',
 //                'home'
 //            ),
 //            'authenticate' => array(
 //                'Form' => array(
 //                    'passwordHasher' => 'Blowfish'
 //                )
 //            )
 //        )
 //    );

 //    public function beforeFilter() {
 //        $this->Auth->allow('index', 'view');
 //    }
}
?>
