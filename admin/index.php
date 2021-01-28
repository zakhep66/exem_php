<?php
session_start();
?>

<!DOCTYPE html">
<html>

<head>
  <title>Admin Login</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link href="../quiz.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.min.css" />

</head>

<body>
  <?php
  include("header.php");
  ?>

  <h1 class="text-center bg-danger">Войти как админ</h1>
  <form name="form1" method="post" action="login.php">
    <table class="table table-striped">
      <div class="container">
        <div width="106"><span class="style2"></span></div>
        <div width="132"><span class="style2"><span class="head1"><img src="login.jpg" width="131" height="155"></span></span></div>
        <div width="238">
          <table width="219" border="0" align="center">
            <div class="container">
              <div width="163" class="style2">Логин</div>
              <div width="149"><input class="form-control" name="loginid" type="text" id="loginid"></div>
            </div>
            <div class="container">
              <div class="style2">Пароль</div>
              <div><input class="form-control" name="pass" type="password" id="pass"></div>
            </div>
            <div class="container">
              <div class="style2">&nbsp;</div>
              <div>&nbsp;</div>
            </div>
            <div class="container">
              <div class="style2">&nbsp;</div>
              <div><input class="btn btn-primary" name="submit" type="submit" id="submit" value="Войти"></div>
            </div>
          </table>
        </div>
      </div>
    </table>

  </form>

</body>

</html>