<form method="post" action="">
<div class="feltolt">
			<div>
				<div class="col-md-12">
				<p class="notice">
					<?php echo $add; ?>
				</p>
				</div>
			</div>
			<div>
				<div>
				<table>
					<tr>
						<td><label>Cím*</label></td>
						<td><input type="text" name="cim" value="<?php if(isset($_POST["cim"])) echo $_POST["cim"]; ?>"></td>
					</tr>
					<tr>
						<td><label>Szerző*</label></td>
						<td><input type="text" name="szerzo" value="<?php if(isset($_POST["cim"])) echo $_POST["szerzo"]; ?>"></td>
					</tr>
					<tr>
						<td><label>Leírás*</label></td>
						<td><input type="text" name="leiras" value="<?php if(isset($_POST["cim"])) echo $_POST["leiras"]; ?>"></td>
					</tr>
					<tr>
						<td><label>Kép*</label></td>
						<td><input type="hidden" name="kep" value="public/kep/default.jpg"> </td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="elkuld" value="Hozzáadás!"></td>
					</tr>
				</table>
				</div>
			</div>

</div>
</form>