<div class="page">
	<h1 class="edit">Edit options</h1>
	
	<p>From this page you can update the options held in the configuration table. This section is only recommended for advanced users, for most setups the default settings will be fine.</p>
	<p>To update the admin password use the dedicated password page <a href="admin.php?mode=password">here</a></p>
	
	
	<span class="error-text"><?=$response_text?></span>
		
	<form action="admin.php?mode=options" method="post">
	
	<?=$option_list?>
	
	<p>
		<input type="submit" class="button" name="miniblog_PostBack" value="Update options" />
	</p>
</div>
