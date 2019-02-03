<div>
<table class="tablazat">
<?php foreach ($lista as $x) {
	if($i % 3 == 0) {echo "<tr>";} ?>
	<td>
		<h1> <?php echo $x['cim']; ?> <h1>
		<h2> <?php echo $x['szerzo']; ?> </h2>
		<img src="<?php echo $x['kep'];?>">
		<p> <?php echo $x['leiras']; ?> </p>
	</td>
    <?php 
	$i++;
	}?>
	</tr>
</table>
</div>


