<style type="text/css">
	<link rel="stylesheet"href="css/bootstrap.min.css"/>
</style>
<table>
	<tr>
		<td width="10%">
			<img border="0" src="https://dgdesign.ru/uploads/posts/2019-02/1549455082_shapka-sayta-vesna-1151132.jpg" width="100%" height="150" align="right"></td>
	</tr>

</table>
<Table width="100%">
	<tr>
		<td>
			<?php @$_SESSION['login'];
			error_reporting(1);
			?>
		</td>
		<td>

			<?php
			if (isset($_SESSION['alogin'])) {

				echo "<h4 class='text-success text-center btn btn-success'>
	<div align=\"left\"><strong>
	<a href=\"viewsub.php\">Просмотр темы</a>&emsp;&emsp;
	<a href=\"testview.php\">Просмотр тестов</a>&emsp;&emsp;  
	<a href=\"questiondelete.php\">Вопросы</a>&emsp;&emsp;
	<a href=\"showuser.php\">Пользователи</a></strong>
	&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	<strong><a href=\"login.php\">Домашняя</a>&emsp;
	<a href=\"signout.php\">Выйти</a></strong>&emsp;&emsp;
	</div></h4>";
			} else {
				echo "&nbsp;";
			}
			?>
		</td>

	</tr>

</table>