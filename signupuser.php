<!DOCTYPE html>
<html>

<head>
	<title>exem_php</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php
	include("header.php");
	extract($_POST);
	include("database.php");
	$rs = mysqli_query($con, "select * from mst_user where login='$lid'");
	if (mysqli_num_rows($rs) > 0) {
		echo "<br><br><br><div class=head1>Идентификатор входа уже существует</div>";
		exit;
	}
	$query = "insert into mst_user(user_id,login,pass,username,address,city,phone,email) values('$uid','$lid','$pass','$name','$address','$city','$phone','$email')";
	$rs = mysqli_query($con, $query) or die("Не удалось выполнить запрос");
	echo "<br><br><br><div class=head1>Ваш логин $lid успешно создан</div>";
	echo "<br><div class=head1>Пожалуйста, войдите, используя свой логин, чтобы пройти тест</div>";
	echo "<br><div class=head1><a href=index.php>Login</a></div>";


	?>
</body>

</html>