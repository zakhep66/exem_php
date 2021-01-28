<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>exem_php</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link href="quiz.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>
	<?php
	include("header.php");
	include("database.php");
	echo "<h1 class='text-center bg-danger'>Выберите тему</h1>";
	$rs = mysqli_query($con, "select * from mst_subject");
	echo "<table class='table table-striped'>";
	while ($row = mysqli_fetch_row($rs)) {
		echo "<tr><td align=center ><a href=showtest.php?subid=$row[0]><font size=4>$row[1]</font></a>";
	}
	echo "</table>";
	?>
</body>

</html>