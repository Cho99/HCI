<?php include'../Model/server.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<script type="text/javascript" src="vendor/bootstrap.js"></script>
	<script type="text/javascript" src="scripts/1.js"></script>
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap&subset=vietnamese" rel="stylesheet">
</head>
<body>
	<div class="bg-login">
		<div class="form_login">
			<div class="container">
				<form method="post" action="../Model/server.php">
					<div class="form_inner">
						<div class="tdlogin">
							<h3 class="">login</h3>
						</div>
						<div class="email inputlogin">
							<input type="text" placeholder="email" name="email">
						</div>
						<div class="password inputlogin">
							<input type="password" placeholder="password" name="password">
						</div>
						<?php if (isset($_SESSION['error'])):?>
							<div style="color: red"><?= $_SESSION['error'] ?></div>
							<?php unset($_SESSION['error']) ?>
					    <?php endif; ?>
						<div class="forgot">
							<h3>forgot your password</h3>
						</div>
					</div>
					<div class="btnAdd">
						<div class="register btnbot">
							<h4>register</h4>
						</div>
						<div class="signin btnbot">
							<button class="btn-success btn-outline-primary" name="login">Login</button>
						</div>
					</div>
				</form> <!-- het form -->
			</div>
		</div> <!-- het form login -->
	</div>
</body>
</html>