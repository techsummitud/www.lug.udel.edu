<div class="page">
	<form class="login" action="admin.php?mode=login" method="post">
		<h1 class="login">Login</h1>
		<span class="error-text"><?=$error_text?></span>
		<p><label for="password">Control panel password:</label><br />
			<input id="password" size="30" type="password" name="password" />
		</p>
		<p><input class="button" type="submit" name="SimplePoll_Login" value="Login" /></p>
	</form>
</div>