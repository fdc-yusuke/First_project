<h2>pudate</h2>
<a href="/cakephp/StoreAdmin">List</a>

<form action="" method="post">
	<input value="<?php echo $view_user['StoreAdmin']['admin_name'] ?>" name= "input_username" type="text">
	<input value="<?php echo $view_user['StoreAdmin']['admin_password'] ?>" name= "input_password" type="text">
	<input  value="<?php echo $view_user['StoreAdmin']['admin_email'] ?>" name= "input_email" type="text">
	<input type= "submit" value="update">
</form>

<?php 
var_dump($view_user); ?>
