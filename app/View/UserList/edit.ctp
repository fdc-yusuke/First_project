<h2>pudate</h2>
<a href="/cakephp/UserList">List</a>

<form action="" method="post">
	<input value="<?php echo $view_user['UserList']['username'] ?>" name= "input_username" type="text">
	<input value="<?php echo $view_user['UserList']['password'] ?>" name= "input_password" type="text">
	<input  value="<?php echo $view_user['UserList']['user_email_address'] ?>" name= "input_email" type="text">
	<input type= "submit" value="update">
</form>

<?php 
var_dump($view_user); ?>
