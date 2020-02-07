<?php 

class PostController extends AppController{
	public function beforeFilter(){
		parent::beforeFilter();

		$this->Auth->allow(array(
			'list_post'
		));

		echo "POST BEFORE FILTER CHECKING!!!!!!!";
		echo "<br/>";
	}

	public function list_post(){
		echo "lising all the posts";
		echo "<br/>";
	}

	public  function edit_post(){

	}
	public  function  add_post(){

	}


}

 ?>