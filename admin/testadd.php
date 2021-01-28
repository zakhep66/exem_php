<?php
session_start();
error_reporting(1);
if (!isset($_SESSION['alogin'])) {
  echo "<br><h2>Вы не вошли в систему Пожалуйста, войдите, чтобы получить доступ к этой странице</h2>";
  echo "<a href=index.php><h3 align=center>Войти</h3></a>";
  exit();
}
?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" />
<?php
require("../database.php");

include("header.php");


echo "<h2 class='text-center bg-primary'>Добавить тест</h2>";
if ($_POST[submit] == 'Save' || strlen($_POST['subid']) > 0) {
  extract($_POST);
  mysqli_query($con, "insert into mst_test(sub_id,test_name,total_que) values ('$subid','$testname','$totque')", $cn) or die(mysqli_error());
  echo "<p align=center>Test <b>\"$testname\"</b>Добавлено успешно.</p>";
  unset($_POST);
}
?>
<script>
  function check() {
    mt = document.form1.testname.value;
    if (mt.length < 1) {
      alert("Введите название теста");
      document.form1.testname.focus();
      return false;
    }
    tt = document.form1.totque.value;
    if (tt.length < 1) {
      alert("Введите название вопроса");
      document.form1.totque.value;
      return false;
    }
    return true;
  }
</script>
<form name="form1" method="post" onSubmit="return check();">
  <table class="table table-striped">>
    <tr>
      <td width="49%" height="32">
        <div align="left"><strong>Введите название темы</strong></div>
      </td>
      <td width="3%" height="5">
      <td width="48%" height="32"><select class="form-control" name="subid">
          <?php
          $rs = mysqli_query($con, "Select * from mst_subject order by  sub_name", $cn);
          while ($row = mysqli_fetch_array($rs)) {
            if ($row[0] == $subid) {
              echo "<option value='$row[0]' selected>$row[1]</option>";
            } else {
              echo "<option value='$row[0]'>$row[1]</option>";
            }
          }
          ?>
        </select>

    <tr>
      <td height="26">
        <div align="left"><strong>Введите название теста</strong></div>
      </td>
      <td>&nbsp;</td>
      <td><input class="form-control" name="testname" type="text" id="testname"></td>
    </tr>
    <tr>
      <td height="26">
        <div align="left"><strong>Введите название вопроса</strong></div>
      </td>
      <td>&nbsp;</td>
      <td><input class="form-control" name="totque" type="text" id="totque"></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input class="btn btn-primary" type="submit" name="submit" value="Добавить"></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>