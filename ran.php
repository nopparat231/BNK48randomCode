<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>RAN-BNK</title>
</head>
<body>
	<?php 

	function generate_password($length=14) {
		$chars = 'abcdefghijkmnpqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ23456789';
		$password = '';
		for ( $i = 0; $i < $length; $i++ )
			$password .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
		return $password;
	} 

	?>

	<form action="ran.php" style="text-align: center;">
		<h1>The Duck & MO BNK</h1>
		<div class="container">
<div class="col-md-12">
		<div class="col-md-12">
			<h1>57-BNK48</h1>
			<div class="input-group mb-12" >
				
				<input type="text" class="form-control" value="<?php echo '57'.generate_password(); ?>" aria-describedby="button-addon2" style="text-align: center;">
				<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="submit" id="button-addon2" >BNKRAN</button>
				</div>
				
			</div>
		</div>
		<br>
		<div class="col-md-12">
			<h1>58-BNK48</h1>
			<div class="input-group mb-12" >
				
				<input type="text" class="form-control" value="<?php echo '58'.generate_password(); ?>" aria-describedby="button-addon2" style="text-align: center;">
				<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="submit" id="button-addon2" >BNKRAN</button>
				</div>
				
			</div>
		</div>
		<br>
		<div class="col-md-12">
			<h1>5a-BNK48</h1>
			<div class="input-group mb-12" >
				
				<input type="text" class="form-control" value="<?php echo '5a'.generate_password(); ?>" aria-describedby="button-addon2" style="text-align: center;">
				<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="submit" id="button-addon2" >BNKRAN</button>
				</div>
				
			</div>
		</div>
		<br>
		<div class="col-md-12">
			<h1>5c-BNK48</h1>
			<div class="input-group mb-12" >
				
				<input type="text" class="form-control" value="<?php echo '5c'.generate_password(); ?>" aria-describedby="button-addon2" style="text-align: center;">
				<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="submit" id="button-addon2" >BNKRAN</button>
				</div>
				
			</div>
		</div>
		<br>
		</div>
</div>
	</form>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>