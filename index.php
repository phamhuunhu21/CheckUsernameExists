<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Check Email Exists</title>
	<script src="jquery.js"></script>
	<script>
		$(document).ready(function() {
			$("#txtUname").blur(function(){
				var uname = $(this).val();
				$.ajax({
					method: 'POST',
					url: 'CheckExists.php',
					data: {txtUname: uname}
				})
				.done(function(data) {
					$(".result-uname").html(data);
				});
			});	
		});
	</script>
</head>
<body>
	<form action="" method="POST" accept-charset="utf-8">
		<input type="text" name="txtUname" id="txtUname" placeholder="Username">
		<div class="result-uname">
			
		</div>
		<input type="text" name="txtEmail" id="txtEmail" placeholder="Email">
		<div class="result-email">
			
		</div>
		<input type="password" name="txtPass" id="txtPass" placeholder="Password"><br>
		<input type="button" name="btnRegister" value="Register">
	</form>
</body>
</html>