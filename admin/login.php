<?php
session_start();
error_reporting(1);
?>
<!DOCTYPE html>
<html>

<head>
	<title>Admin</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link href="../quiz.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>
	<?php
	include("header.php");
	include("../database.php");
	extract($_POST);
	if (isset($submit)) {
		$rs = mysqli_query($con, "select * from mst_admin where loginid='$loginid' and pass='$pass'", $cn) or die(mysqli_error());
		if (mysqli_num_rows($rs) < 1) {
			echo "<BR><BR><BR><BR><div class=head1> Неправильное имя пользователя или пароль<br>
		<a href='index.php'>Нажмите здесь, чтобы войти снова </a>
		<div>";
			//exit;
			echo "<script>window.location='index.php'</script>";
		} else {
			echo "<script>window.location='login.php'</script>";
			$_SESSION['alogin'] = "true";
		}
	} else if (!isset($_SESSION['alogin'])) {
		echo "<BR><BR><BR><BR><div class=head1>Вы не вошли в систему <br> Пожалуйста <a href=index.php>войдите</a><div>";
		exit;
	}

	echo "<h1 class='text-center bg-danger'>Поле администратора</h1>";




	?>



</body>

</html>