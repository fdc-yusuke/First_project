<?php 


class UserListController extends AppController{
	public $uses= array ('UserList');



	public function index(){

		// select * from users ↓ 
		//(this is for getting data from users table)

		// find all need to be more specified 
		// if i use 'all' i have to use pisition 
		// var_dump($users[0]['UserList']['id']);

		// $users = $this->UserList->find('all');
		//-----------------------------------


		//this is for getting one data from users table 
		//select * from users limit 1

		// (var_dump($users['UserList']['id']) this part is for the code what position you wnat to use) 
		// $users = $this->UserList->find('first');
		//----------------------------------

		//select count* from users 
		//return numbers 
		// $users = $this->UserList->find('count');
		//------------------------------------


		//  if you want to add more condition for serching data from data base. ↓
		// ↓ clmn name  	↓ varue of the clmn
		//'username'   =>  'yusuke',

		// $users = $this->UserList->find('all', array(
		// 	'conditions' => array(
		// 		'username' => 'yusuke',
		// 		'password' => '1234'
		// 	)
		// ));

		//------------------------------------

		// select all from user where username = yusuke or pawwsord = 1234
		// $users = $this->UserList->find('all',array(
		// 	// 'conditions' => array(
		// 	// 	'or'=>array(
		// 	// 		array('username'=>'yusuke'),
		// 	// 		array('password'=>'1234')
		// 	// 	)
		// 	// ),
		// 	//descending ↑ asending ↓
		// 	//this is for ordring from lowest to highest 
		// 	'order'=>array('id desc'),
		// 	//this is what clum you want to select↓
		// 	'fields'=>array(
		// 		'id',
		// 		'username',
		// 		'password'
		// 	)
		// ));
$data= $this->request->query;
$search=$this->request->query("search");
var_dump($data);

// ページネーション
//		これはページネーションの中での検索機能
		$this->paginate = array(
			'conditions' => array(
				"username like" => "%$search%"
			),

			//descending ↑ asending ↓
			//this is for ordring from lowest to highest 
			'order'=>array('id desc'),
			//this is what clum you want to select↓
			'fields'=>array(
				'id',
				'username',
				'password',
				'image'
			),
			'limit'=> 5
		);
        $users = $this->paginate('UserList');

		$this->set('view_users', $users);

		$this ->set("view_search", $search);
	}

	public function delete (){

		$user_id =$this->request->query('id');

		$this->UserList->delete($user_id);
	//this wiil refdirect to spefific page that you set in this code (go back)
		return $this->redirect("/UserList");

	}


	public function register(){
		if ($this->request->is('post')) {
			$data=$this->request->data;
			//これは構造を確認するため
			//chanking the structure of image files
			//-----↓
			//echo "<pre>";
	        //var_dump($_FILES);
	        //echo $_FILES ["input_images"]["tmp_name"];

			

			$this->UserList->create();
			$this->UserList->set(
				array(
					'username'=>$data['input_username'],
					'password'=>$data['input_password'],
					'user_email_address'=>$data['input_email']
				));
			// - save user information
			$user=$this->UserList->save();

			// - prepare target directory
			//QUESTION: where do you want to save the file?
			//ROOT -> current location of the project
			//WEBROOT_DIR -> current webroot directory location
			$image_directory = ROOT . "/app/" . WEBROOT_DIR . "/profile_pictures";

			// - check if tmp name is valid and contains something
			//QUESTION: did the user upload anything? if yes, continue/execute the code
			//$_FILES -> php variable for getting an active file. it contains the properties of an image/file
			//["input_images"] -> the name of the input from the form. it can be anything the developer wants it to be
			//["tmp_name"] -> one of the properties of a file. if it is blank, or not set then the user did not upload anything
			if ( isset( $_FILES["input_images"]["tmp_name"] ) && !empty($_FILES["input_images"]["tmp_name"]) ) {
				// - get the file current path information
				//QUESTION: what is the information of the image the user uploaded?
				/*
				FUNCTION?
					- pathinfo
					- this function will return the information of an image

				PARAMETER?
					- the name of the file
					- $_FILES["name of input whatever"]["name"]

				WANT?
					- extension -> this is the extension of the image. we cannot change it, we just have to use it.
				*/
				$path_info = pathinfo($_FILES ["input_images"]["name"]);

				// - this is the new name of the file we want to upload
				//QUESTION: what should we name the new file?
				/*
				NOTES:
					- you can change the name to anything you want!
					- you Cannot change the extensipn -> it will break the file if you do this
					- we set the name of the image to the same ID of the user
				*/
				$new_image_file = $user["UserList"]["id"] . "." . $path_info["extension"];

				// - this line is for setting the name of the file and where you want to store it
				//QUESTION: what should we name the new file?
				//QUESTION: where do we put the new file?
				$target_file = $image_directory . "/" . $new_image_file;

				// - this is the file we want to move to the server
				//QUESTION: where is the temporary copy of the file the user just uploaded?
				$source_file = $_FILES["input_images"]["tmp_name"];

				// - move uploaded file - transfer the uploaded file to the target directory
				//QUESTION: how do we save the new image file?
				/*
				FUNCTION?
					- move_uploaded_file
					- this function is used for saving the temporary copy of the file a user uploaded to a permanent location

				PARAMETER?
					- 1st: source -> the temporary copy of the file
					- 2nd: target -> the new location of the file

				WANT?
					- we want the file to have been moved to the new location after the function is executed
				*/
			 	move_uploaded_file($source_file, $target_file);

			 	//QUESTION: how do we connect the picture to the user?
			 	// - we save the image file
				$this->UserList->read(null,$user["UserList"]["id"]);
				$this->UserList->set(
				array(
					'image'=>$new_image_file,
				));
				$this->UserList->save();
			}


		 return $this->redirect("/UserList");
		}

	}


	public function edit(){
		$user_id =$this->request->query('id');
		if ($this->request->is('post')) {
			$data=$this->request->data;


			$this->UserList->read(null,$user_id);
			$this->UserList->set(
				array(
					'username'=>$data['input_username'],
					'password'=>$data['input_password'],
					'user_email_address'=>$data['input_email']
				));
			$this->UserList->save();


	
		}

		$user = $this->UserList->find('first',array(
			'conditions'=>array(
				'id'=>$user_id

			)
		));
		var_dump($user);
		$this->set('view_user',$user);
	}
}


?>


