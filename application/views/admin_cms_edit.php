<h1><a href="<?=base_url();?>admin/">Admin</a> -> <a href="<?=base_url();?>admin_cms/">CMS Management</a> -> Edit: <?=$item;?></h1>

<form action="" method="POST">
	<textarea name="contents" rows="25" cols="100"><?=$contents;?></textarea>
	<br /><br />
	<input type="submit" value="Save Contents" />
</form>
