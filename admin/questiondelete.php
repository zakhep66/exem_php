<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>exem_php</title>
	<link href="../quiz.css" rel="stylesheet" type="text/css">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link href="quiz.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>
	<?php
	include("header.php");
	include("../database.php"); {
		$sql = mysqli_query($con, "select * from mst_question");

		echo "<table class='table table-striped'>";
		echo "<tr><th><a  class='btn btn-danger'href=\"questionadd.php\">Добавить вопрос</a>&emsp;&emsp;</th></tr>";
		echo "<tr><th class='text-primary'>ID</th><th class='text-primary'>Вопрос</th>
	<th class='text-primary'>Изменить</th>
	<th class='text-primary'>Удалить</th></tR>";

		while ($result = mysqli_fetch_assoc($sql)) {
			$id = $result['que_id'];

			echo "<tr>";
			echo "<td>" . $result['que_id'] . "</td>";
			echo "<td>" . $result['que_desc'] . "</td>";
			echo "<td><a href='queupdate.php?que_id=$id'><span class='glyphicon glyphicon-edit'></span></a></td>";
			echo "<td><a href='quedelete.php?que_id=$id'><span class='glyphicon glyphicon-trash'></span></a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	?>
</body>

</html>