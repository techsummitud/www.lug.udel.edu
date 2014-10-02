<div class="page">
	<h1 class="edit">Edit password</h1>
	<p>Update the admin panel password using the form below. Once the password is updated you'll be required to login to the admin panel again</p>
	
	<span class="error-text"><?=$response_text?></span>
	<form action="admin.php?mode=password" method="post">
	
	<p>
		<label for="current-password">Current password:</label><br />
		<input type="password" name="current_password" id="current-password" />
	</p>

	<p>
		<label for="new-password">New password:</label><br />
		<input type="password" name="new_password" id="new-password" />
	</p>
	
	<p>
		<label for="confirm-password">Confirm new password:</label><br />
		<input type="password" name="confirm_password" id="confirm-password" />
	</p>
	
	<p>
		<input class="button" type="submit" name="miniblog_PostBack" value="Change password" />
	</p>
	
	
	
</div>
