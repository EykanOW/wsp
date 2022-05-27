<!-- only admins can see this page -->
<!-- form for updating a users username, password or usertype -->
<?php if ($_SESSION["usertype"] == "admin"): ?>
<div>
	<a class="btn btn-light btn-lg m-3" href="?page=admin">Back to admin</a>
	<h1>UPDATE USERS</h1>
	<form method="POST" action="?page=admin">
		<input type="hidden" name="update_skickat">
		<input type="hidden" name="user_id" value="<?=$_POST['user_id']?>">
		<label>Username</label><br>
		<input type="text" name="username" placeholder="Username?" autocomplete="off" value="<?=$_POST['username']?>"><br>
		<label>Password</label><br>
		<input type="text" name="password" placeholder="Password?" autocomplete="off" value="<?=$_POST['password']?>"><br>
		<label>Usertype</label><br>
		<input type="text" name="usertype" placeholder="Usertype?" autocomplete="off" value="<?=$_POST['usertype']?>"><br>
		<input class="btn btn-light btn-lg m-3" type="submit" name="submit" value="Update user"><br>
	</form>
</div>
<?php endif ?>