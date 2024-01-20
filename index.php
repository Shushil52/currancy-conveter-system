<!DOCTYPE html>
<html lang ="center">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	<nav class="navbar navbar-defult">
	</nav>
	<div class="col-md-6"></div>
	<div class="col-md-6 well">
		<h class="text-primary">PHP - Simple Currency Converter</h1>
		<hr style="border-:1px dotted #100;"/>
		<form method="GET" action="">
			<div class="form-inline">
				<label>Php: </label>
				<input class="form-control text-right" type="number" value="<?php echo isset($_GET['txt_digit']) ? $_GET['txt_digit'] : ''  ?>" name="txt_digit"/>
				<label>Select Currency: </label>
				<select name="currency" class="form-control">
					<option value="">Select an option</option>
					<option value="Dollar" <?php echo isset($_GET['currency']) && $_GET['currency'] == "Dollar" ? 'selected' : ''; ?>>Dollar</option>
					<option value="Euro" <?php echo isset($_GET['currency']) && $_GET['currency'] == "Euro" ? 'selected' : ''; ?>>Euro</option>
					<option value="Pound" <?php echo isset($_GET['currency']) && $_GET['currency'] == "Pound" ? 'selected' : ''; ?>>Pound</option>
					<option value="Chinese Yuan" <?php echo isset($_GET['currency']) && $_GET['currency'] == "Chinese Yuan" ? 'selected' : ''; ?>>Chinese Yuan</option>
					<option value="Nepalese Rupee" <?php echo isset($_GET['currency']) && $_GET['currency'] == "Nepalese Rupee" ? 'selected' : ''; ?>>Nepalese Rupee</option>
				</select>
				<br /><br />
				<center><button type="submit" name="btn_submit" class="btn btn-primary form-control" style="width:30%;">Convert</button></center>
				<br />
				<?php require 'convert.php'?>
			</div>
		</form>
	</div>
</body>
</html>