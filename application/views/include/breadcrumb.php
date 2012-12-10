    <ul id="breadcrumb">
		<?foreach($this->breadcrumb as $b) {?>
			<li><a href="<?=base_url().$b['url'];?>"><?=$b['name'];?></a></li>
		<?}?>
    </ul>
	<br /><br />
