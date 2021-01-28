<?php
session_start();
require("../database.php");
include("header.php");
error_reporting(1);
?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" />
<?php

extract($_POST);

echo "<BR>";
if (!isset($_SESSION['alogin'])) {
  echo "<br><h2><div  class=head1>Вы не вошли в систему Пожалуйста, войдите, чтобы получить доступ к этой странице</div></h2>";
  echo "<a href=index.php><h3 align=center>Нажмите здесь для входа</h3></a>";
  exit();
}
echo "<h1 class='text-center bg-primary'>ADD SUBJECT</h1>";

echo "<table width=100%>";
echo "<tr><td align=center></table>";
if ($submit == 'submit' || strlen($subname) > 0) {
  $rs = mysqli_query($con, "select * from mst_subject where sub_name='$subname'");
  if (mysqli_num_rows($rs) > 0) {
    echo "<br><br><br><div class=head1>Тема уже существует</div>";
    exit;
  }
  mysqli_query($con, "insert into mst_subject(sub_name) values ('$subname')", $cn) or die(mysqli_error());
  echo "<p align=center>Тема <b> \"$subname \"</b>успешно добавлен.</p>";
  $submit = "";
}
?>
<script>
  function check() {
    mt = document.form1.subname.value;
    if (mt.length < 1) {
      alert("Please Enter Subject Name");
      document.form1.subname.focus();
      return false;
    }
    return true;
  }
</script>

<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
  <title>Добавить тему</title>
  <form name="form1" method="post" onSubmit="return check();">
    <table class="table table-striped">>
      <tr>
        <td width="45%" height="32">
          <div align="center"><strong>Введите название темы</strong></div>
        </td>
        <td width="2%" height="5">
        <td width="53%" height="32">
          <input class="form-control" name="subname" placeholder="Введите название" type="text" id="subname">
      <tr>
        <td height="26"> </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="26"></td>
        <td>&nbsp;</td>
        <td><input class="btn btn-primary" type="submit" name="submit" value="Добавить"></td>
      </tr>
    </table>
  </form>
  <p>&nbsp; </p>
</div>