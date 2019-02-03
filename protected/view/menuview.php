
<div>
<table class="menu">
	<?php foreach ($menu as $x) { ?>
	<td>
		<a href ="<?php echo $x['link']; ?>">
			<?php echo $x['name'];?> </a> 
		</td> 
	<?php } ?>
</table>
</div>