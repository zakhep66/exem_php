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
if (!isset($_SESSION[alogin])) {
  echo "<br><h2><div  class=head1>Вы не вошли в систему Пожалуйста, войдите, чтобы получить доступ к этой странице</div></h2>";
  echo "<a href=index.php><h3 align=center>Нажмите здесь для входа</h3></a>";
  exit();
}
echo "<h2 class='text-center bg-primary'>Добавить вопрос</h2>";
if ($_POST[submit] == 'Save' || strlen($_POST['testid']) > 0) {
  extract($_POST);
  mysqli_query($con, "insert into mst_question(test_id,que_desc,ans1,ans2,ans3,ans4,true_ans) values ('$testid','$addque','$ans1','$ans2','$ans3','$ans4','$anstrue')", $cn) or die(mysqli_error());
  echo "<p align=center>Вопрос успешно добавлен.</p>";
  unset($_POST);
}
?>
<script>
  function check() {
    mt = document.form1.addque.value;
    if (mt.length < 1) {
      alert("Please Enter Question");
      document.form1.addque.focus();
      return false;
    }
    a1 = document.form1.ans1.value;
    if (a1.length < 1) {
      alert("Please Enter Answer1");
      document.form1.ans1.focus();
      return false;
    }
    a2 = document.form1.ans2.value;
    if (a1.length < 1) {
      alert("Please Enter Answer2");
      document.form1.ans2.focus();
      return false;
    }
    a3 = document.form1.ans3.value;
    if (a3.length < 1) {
      alert("Please Enter Answer3");
      document.form1.ans3.focus();
      return false;
    }
    a4 = document.form1.ans4.value;
    if (a4.length < 1) {
      alert("Please Enter Answer4");
      document.form1.ans4.focus();
      return false;
    }
    at = document.form1.anstrue.value;
    if (at.length < 1) {
      alert("Введите правильный ответ");
      document.form1.anstrue.focus();
      return false;
    }
    return true;
  }
</script>

<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
  <form name="form1" method="post" onSubmit="return check();">
    <div class="table table-striped">

      <div width="24%" height="32">
        <div align="left"><strong>Выберите название теста</strong></div>
      </div>
      <div width="1%" height="5">
        <div width="75%" height="32"><select class="form-control" name="testid" id="testid">
            <?php
            $rs = mysqli_query($con, "Select * from mst_test order by test_name", $cn);
            while ($row = mysqli_fetch_array($rs)) {
              if ($row[0] == $testid) {
                echo "<option value='$row[0]' selected>$row[2]</option>";
              } else {
                echo "<option value='$row[0]'>$row[2]</option>";
              }
            }
            ?>
          </select>


          <div height="26">
            <div align="left"><strong>Введите вопрос</strong></div>
          </div>
          <div>&nbsp;</div>
          <div><textarea class="form-control" name="addque" cols="60" rows="2" id="addque"></textarea></div>


          <div height="26">
            <div align="left"><strong>Введите ответ 1</strong></div>
          </div>
          <div>&nbsp;</div>
          <div><input class="form-control" name="ans1" type="text" id="ans1" size="85" maxlength="85"></div>


          <div height="26"><strong>Введите ответ 2</strong></div>
          <div>&nbsp;</div>
          <div><input class="form-control" name="ans2" type="text" id="ans2" size="85" maxlength="85"></div>


          <div height="26"><strong>Введите ответ 3</strong></div>
          <div>&nbsp;</div>
          <div><input class="form-control" name="ans3" type="text" id="ans3" size="85" maxlength="85"></div>


          <div height="26"><strong>Введите ответ 4</strong></div>
          <div>&nbsp;</div>
          <div><input class="form-control" name="ans4" type="text" id="ans4" size="85" maxlength="85"></div>


          <div height="26"><strong>Введте ответ 5</strong></div>
          <div>&nbsp;</div>
          <div><input class="form-control" name="anstrue" type="text" id="anstrue" size="50" maxlength="50"></div>


          <div height="26"></div>
          <div>&nbsp;</div>
          <div><input class="btn btn-primary" type="submit" name="submit" value="Добавить"></div>

        </div>
  </form>
  <p>&nbsp; </p>
</div>