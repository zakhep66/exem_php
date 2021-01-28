<style type="text/css">
	<!--
	body {
		margin-left: 0px;
		margin-top: 0px;
	}
	-->
</style>
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
			if (isset($_SESSION['login'])) {
				echo "<div align=\"right\"><strong><a href=\"index.php\">Домашняя</a>|<a href=\"signout.php\">Выйти</a></strong></div>";
			} else {
				echo "&nbsp;";
			}
			?>
		</td>

	</tr>

</table>