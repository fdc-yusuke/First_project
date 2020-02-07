<center>	


	<div class="svgSample1">
		<svg xmlns="http://www.w3.org/2000/svg" >
			<defs>
				<text dy="0.4em" id="outTextx">LIST</text>
			</defs>
			<use x="50%" y="50%" xlink:href="#outTextx"></use>
			<use x="50%" y="50%" xlink:href="#outTextx"></use>
		</svg>
	</div>



</center>
<a class="register_button" href="/cakephp/StoreAdmin/register"style="text-decoration:none;">register</a>

<a class="kill_session" href="/cakephp/StoreAdmin/logout"style="text-decoration:none;">logout</a>


<br>
<br>
<br>
<form action="">
	
</form>

<table>
	<tr>
		<td>
			id	
		</td>
		<td>
			[APP]owners name
		</td>
		<td>
			password
		</td>
		<td>
			
		</td>

		<td>
			

		</td>
	</tr>


	<?php foreach($storeadmin as $admin): ?>
		<tr>
			<td>
				<?php echo $admin['StoreAdmin']['admin_name']; ?>
			</td>
			<td>
				<!-- <img src="/cakephp/app/webroot/profile_pictures/<?php echo $admin['StoreAdmin']['image']; ?>" alt=""> -->
				<?php echo $admin['StoreAdmin']['admin_name']; ?>
			</td>
			<td>
				<?php echo $admin['StoreAdmin']['admin_password'] ?>
			</td>
			<td>
				<a href="/cakephp/StoreAdmin/edit?id=<?php echo $admin['StoreAdmin']['admin_id']; ?>">edit</a>
			</td>
			<td>
				<a href="/cakephp/StoreAdmin/delete?id=<?php echo $admin['StoreAdmin']['admin_id']; ?>">delete</a>
			</td>
		</tr>	

		
	<?php endforeach; ?>


</table>


<?php 
// ページネーションの表示
echo $this->Paginator -> numbers (); ?>



<style>
	.register_button{
		display       : inline-block;
		border-radius : 5%;          /* 角丸       */
		font-size     : 13pt;        /* 文字サイズ */
		text-align    : center;      /* 文字位置   */
		cursor        : pointer;     /* カーソル   */
		padding       : 8px 20px;   /* 余白       */
		background    : #00007f;     /* 背景色     */
		color         : #00ffff;     /* 文字色     */
		line-height   : 1em;         /* 1行の高さ  */
		font-family: "Times New Roman", Times, serif;
	}



	.kill_session{
		display       : inline-block;
		border-radius : 5%;          /* 角丸       */
		font-size     : 13pt;        /* 文字サイズ */
		text-align    : center;      /* 文字位置   */
		cursor        : pointer;     /* カーソル   */
		padding       : 8px 20px;   /* 余白       */
		background    : #ff0000;    /* 背景色     */
		color         : #ffffff;     /* 文字色     */
		line-height   : 1em;         /* 1行の高さ  */
		font-family: "Times New Roman", Times, serif;
	}



	.svgSample1 text {
		font-weight       : bold;
		font-size         : 40px;
		font-family       : Meiryo UI;
		stroke            : #003366;
		fill              : #ffffff;
		letter-spacing    : 11px;
		text-anchor       : middle;
		dominant-baseline : alphabetic;
	}
	.svgSample1 > svg > use:nth-of-type(1) {
		stroke-width      : 23px;
		paint-order       : stroke;
		stroke-linejoin   : round ;
	}
	.svgSample1 > svg > use:nth-of-type(2) {
		stroke-width      : 0;
	}

</style>