<style type="text/css">


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
      if (isset($_SESSION['alogin'])) {
        echo "<div align=\"right\"><strong><a href=\"login.php\">Домашняя страница администратора</a>|<a href=\"signout.php\">Выйти</a></strong></div>";
      } else {
        echo "&nbsp;";
      }
      ?>
    </td>

  </tr>

</table>