<?php 
	require "ConfigDB.php";

	$rowCount = 0;
	$uname = $_POST["txtUname"];

	if ($uname == "") {
		echo "Vui lòng không để trống";
	}
	else {
		$qr = "SELECT * FROM users WHERE username = '$uname'";
		if ($result = mysqli_query($con, $qr)){
			$rowCount = mysqli_num_rows($result);
		}

		if ($rowCount > 0) {
			echo "Username đã tồn tại";
		}
		else {
			echo "Bạn có thể dùng Username này để đăng ký";
		}
	}
	
 ?>