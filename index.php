<?php
session_start();
?>
<!DOCTYPE html">
<html>

<head>
	<title>хай</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php
	include("header.php");
	include("database.php");
	extract($_POST);

	if (isset($submit)) {
		$rs = mysqli_query($con, "select * from mst_user where login='$loginid' and pass='$pass'");
		if (mysqli_num_rows($rs) < 1) {
			$found = "N";
		} else {
			$_SESSION[login] = $loginid;
		}
	}
	if (isset($_SESSION[login])) {
		echo "<h1 class='text-center bg-danger'>Привет</h1>";
		echo '<div align="center">
		
		<div align="center" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></div>
		<div align="center" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4">Упражнения</a></div>
		
		
		<div align="center" valign="bottom"><img src="image/DEGREE.JPG" width="43" height="43" align="absmiddle"></div>
		<div align="center" valign="bottom"> <a href="result.php" class="style4">Результат</a></div>
		
		</div>';

		exit;
	}


	?>
	<div width="100%" border="0">

		<tr>
			<td height="296" valign="top">
				<div align="center">
					<h1 class="style8">Приветик</h1>
					<span class="style5"><img src="image/paathshala.jpg" width="129" height="100"><span class="style7"><img src="image/HLPBUTT2.JPG" width="50" height="50"><img src="image/BOOKPG.JPG" width="43" height="43"></span> </span>
					<param name="movie" value="english theams two brothers.dat">
					<param name="quality" value="high">
					<param name="movie" value="Drag to a file to choose it.">
					<param name="quality" value="high">
					<param name="BGCOLOR" value="#FFFFFF">
					<p align="left" class="style5">&nbsp;</p>
				</div>
			</td>
			<table align="center" border="0" WIDTH="50%" height="250">
				<h1 class="text-center bg-warning">Ниже можно войти</h1>
				<form method="post" action="">
					<center>
						<img class="img-circle" src="1.jpg" title="this is my profile pic" width="240px" height="190px" border="1" />
					</center> <br>

					<tr>
						<th class="text-primary">Логин</th>
						<th>
							<input class="form-control" type="TEXT" title="enter your regitered LOGIN ID" placeholder="тут логин" maxlength="10" size="25" id="loginid2" name="loginid" /></tD>
						</th>
					<tr>
						<th class="text-primary">Пароль</th>
						<th><input class="form-control" type="password" name="pass" id="pass2" placeholder="а тут пароль" /></th>
					</tr>
					<?php
					if (isset($found)) {
						echo "Invalid Username or Password";
					}
					?>
					</span></td>
					<th></th>
					<th class="errors">
						<input class="btn btn-danger" type="submit" name="submit" id="submit" Value="Войти" />

						<a class="btn btn-success" href="signup.php">Ещё нет не зарегистрирован?</a></th>
			</table>
			</form>
			</td>
		</tr>
	</table>

</body>

</html>