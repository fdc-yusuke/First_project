<?php 

class UserRegisterController extends AppController{ 
public $uses=array ('Register');
// public function beforeFilter(){
// 	parent::beforeFillter();

// } 

public function index(){
	
	$data = $this->request->data;

	if ($this->request->is('post')) {

		//i want to make new row
		//このRegister はモデルから
		$this->Register->create();

		//tell what informatipn you want to save
		//"username"/ "passpwrd"/"user_email_adddress"カラム名
		$this->Register->set(array(
			"username" =>$data["username"],
			"password" => $data ["password"],
			"user_email_address" => $data["email_address"]
		));
		
//tell to save the infomation 
		$didSave =$this->Register->save();
var_dump($didSave);
	var_dump("Post ACCESS");

	}else{
	var_dump("nomal accsess");

	}

	echo"<pre>";
	var_dump($data);
	echo"</pre>";
}
}

?>

