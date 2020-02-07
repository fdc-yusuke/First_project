<h2>List</h2>
<a href="/cakephp/StoreAdmin/register">register</a>
<form action="">
	<input type="text" name= "search" value="<?php echo $view_search; ?>">
	<button type="submit">submit</button>
</form>
<table>
	<tr>
		<td>
		id	
		</td>
		<td>
			username
		</td>
		<td>
			password
		</td>
		<td>
			
		</td>

		<td>
			

		</td>
	</tr>
	<?php foreach ($view_users as $user1){?> 
	<tr>
		<td>
			<?php echo $user1['UserList']['id']; ?>
		</td>
		<td>
			<img src="/cakephp/app/webroot/profile_pictures/<?php echo $user1['UserList']['image']; ?>" alt="">
			<?php echo $user1['UserList']['username']; ?>
		</td>
		<td>
			<?php echo $user1['UserList']['password'] ?>
		</td>
		<td>
			<a href="/cakephp/UserList/edit?id=<?php echo $user1['UserList']['id']; ?>">edit</a>
		</td>
		<td>
			<a href="/cakephp/UserList/delete?id=<?php echo $user1['UserList']['id']; ?>">delete</a>
		</td>
	</tr>	

		
	<?php } ?>

</table>


<?php 
// ページネーションの表示
echo $this->Paginator -> numbers (); ?>