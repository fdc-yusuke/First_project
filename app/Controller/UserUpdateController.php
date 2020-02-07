<?php 

class UserController extends AppController{ }
public function beforeFilter(){
	parent::beforeFillter();
public $uses =array ("UserUpdate")

public function index(){
	$data_id =$this->request->query;

	$User_info= $data['id')]



if ($this->request->('post')) {
	$post/data =$this->request_data;


	$row_debug=$this->UserList
->read(

array(
"username",
"passowrd",
"user_email_address"
)
);
}

$user_info = $this->User->find('
	first',array(
		'conditions'=>array(
			'id' =>$user_id
		)
	));

$this->set('view_user_info'.$user_info)
}
}
 ?>