<?php 

//
class StoreAppController extends AppController
{

	public $user = array ('StoreApp','StoreAdmin','StoreUser');


	public function index(){
		if ($this->request->is('post')) {
			$data=$this->request->data;

			// this is for saving the image infromation
			$this->StoreApp->create();
			$this->StoreApp->set(
				array(
					'app_name'=>$data['input_appname'],
					'app_description'=>$data['input_discription'],
					'create_date'=> date("Y-m-d H:i:s"),
					'password'=>$data['input_password'],

				// 'admin_email'=>$data['input_email']
				));


			$user=$this->StoreApp->save();
			$this->set('view_users',$user);
			if ($user) {
				return $this->redirect("/StoreApp/list");

			}
		}
	// public function list(){

	// }

	}

public function delete(){

// これはviewを作成せずにファンクションをしたくない時に使う
	$this->autoRender = false;

	// --------------
	$user_id = $this->request->query('id');

	$this->StoreApp->delete($user_id);

	return $this->redirect("/StoreApp/list");
}





	public function list_for_user(){
		$this->set('storeapp',$this->StoreApp->find('all'));

	$app_users = $this->StoreApp->find('all');
	$data= $this->request->query;
	$search=$this->request->query("search");
	var_dump($data);


	// pagination   
			$search = $this->paginate('StoreApp');


			$this ->set("storeapp", $search);
}

//リスト
public function list(){

	$this->set('storeapp',$this->StoreApp->find('all'));

	$app_users = $this->StoreApp->find('all');
	$data= $this->request->query;
	$search=$this->request->query("search");
	var_dump($data);


	// pagination   
	$search = $this->paginate('StoreApp');
	$search = $this->paginate('StoreApp');

	$this ->set("storeapp",$search);
}



public function edit(){
	$search=$this->request->query("id");

	if ($this->request->is('post')) {
		$data=$this->request->data;


		$this->StoreApp->read(null,$search);
		$this->StoreApp->set(
			array(
				'app_name'=>$data['input_appname'],
				'app_description'=>$data['description'],
				
			));
		$this->StoreApp->save();


		var_dump($this->StoreApp->set());

	}
	$search=$this->request->query("id");
	$app_users = $this->StoreApp->find('first',array
		(
			'conditions'=>array(
				'id'=>$search
			)
		));
	$data= $this->request->data;

	$this->set('app',$app_users);
	var_dump($data);
	// $this->StoreApp->set(
	// 	array(
	// 		'app_name'=>$data))


}


//this is for getting the cuurent time 
//現在の時間を所得するコード
// $date = date("Y-m-d H:i:s");
// echo $date;

public function login(){
	// if ($this->request->is('post')) {
	// 		var_dump($this->request->data["StoreApp"]["username"]);
	// 		var_dump($this->request->data["StoreApp"]["password"]);
}





}




?>