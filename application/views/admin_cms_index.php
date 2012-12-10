<table>
	<thead>
		<th>CMS Item Name</th>
		<th>Actions</th>
	</thead>
	<?foreach($items as $item) {?>
	<tr>
		<td><?=$item;?></td>
		<td>
			<input type="button" value="Edit Online" onClick="document.location='/admin_cms/edit/<?=$item;?>/';" />
			<input type="button" value="Download"    onClick="document.location='/admin_cms/download/<?=$item;?>/';" />
			<input type="button" value="Upload"      onClick="doUpload('<?=$item;?>');" />
		</td>
	</tr>
	<?}?>
</table>
