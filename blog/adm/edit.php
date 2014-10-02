
<div class="page">
	<h1 class="edit"><?=ucfirst($mode)?> post</h1>
	<span class="error-text"><?=$response_text?></span>
	<form action="admin.php?mode=<?=$mode?>&id=<?=$post['post_id']?>" method="post">
	<p>
		<label for="title">Post title:</label><br />
		<input type="text" size="80" id="title" name="data[post_title]" value="<?=htmlspecialchars(stripslashes($post['post_title']))?>" />
	</p>
	
	<p>
		<label for="content">Post content:</label><br />
		<textarea cols="77" rows="10" id="content" name="data[post_content]"><?=htmlspecialchars(stripslashes($post['post_content']))?></textarea><br />
		<span class="form-text">To format just use raw HTML.. &lt;strong&gt;, &lt;span&gt;, etc</span>
	</p>
	
	
	<p>
		<label for="status">Post status:</label><br />
		<select id="status" name="data[published]">
			<?=generate_option_list(array('0' => 'Unpublished', '1' => 'Published'), $post['published'])?>
		</select>
	</p>
	
	<p>
		<input class="button" type="submit" name="miniblog_PostBack" value="<?=ucfirst($mode)?>" />
	</p>
	
	
	
</div>


