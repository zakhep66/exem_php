<!DOCTYPE html>
<html>

<head>
  <title>exem_php</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <script>
    function check() {

      if (document.form1.lid.value == "") {
        alert("Пожалуйста, введите логин");
        document.form1.lid.focus();
        return false;
      }

      if (document.form1.pass.value == "") {
        alert("Пожалуйста, введите свой пароль");
        document.form1.pass.focus();
        return false;
      }
      if (document.form1.cpass.value == "") {
        alert("Пожалуйста, введите Подтвердите Пароль");
        document.form1.cpass.focus();
        return false;
      }
      if (document.form1.pass.value != document.form1.cpass.value) {
        alert("Подтверждение пароля не соответствует");
        document.form1.cpass.focus();
        return false;
      }
      if (document.form1.name.value == "") {
        alert("Пожалуйста, введите ваше имя");
        document.form1.name.focus();
        return false;
      }
      if (document.form1.address.value == "") {
        alert("Пожалуйста, введите адрес");
        document.form1.address.focus();
        return false;
      }
      if (document.form1.city.value == "") {
        alert("Пожалуйста, введите название города");
        document.form1.city.focus();
        return false;
      }
      if (document.form1.phone.value == "") {
        alert("Пожалуйста, введите контактный тел.");
        document.form1.phone.focus();
        return false;
      }
      if (document.form1.email.value == "") {
        alert("Пожалуйста, введите свой адрес электронной почты");
        document.form1.email.focus();
        return false;
      }
      e = document.form1.email.value;
      f1 = e.indexOf('@');
      f2 = e.indexOf('@', f1 + 1);
      e1 = e.indexOf('.');
      e2 = e.indexOf('.', e1 + 1);
      n = e.length;

      if (!(f1 > 0 && f2 == -1 && e1 > 0 && e2 == -1 && f1 != e1 + 1 && e1 != f1 + 1 && f1 != n - 1 && e1 != n - 1)) {
        alert("Пожалуйста, введите действующий адрес электронной почты");
        document.form1.email.focus();
        return false;
      }
      return true;
    }
  </script>
  <link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-success">
  <?php
  include("header.php");
  ?>
  <div width="100%" border="0">

    <div width="132" rowspan="2" valign="top"><span class="style8"><img src="images/connected_multiple_big.jpg" width="131" height="155"></span></div>
    <h1 class="text-center bg-primary">Страница регистрации</h1>


    <div>
      <form name="form1" method="post" action="signupuser.php" onSubmit="return check();">
        <center>
          <img class="img-circle" src="2.jpg" width="240px" height="190px" border="1" />
        </center> <br>
        <div class=" table table-striped">


          <div class="style7">Логин</div>
        </div>
        <div><input class="form-control" type="text" name="lid"></div>


        <div class="style7">Пароль</div>
        <div><input class="form-control" type="password" name="pass"></div>


        <div class="style7">Повторите пароль</div>
        <div><input class="form-control" name="cpass" type="password" id="cpass"></div>


        <div class="style7">Имя</div>
        <div><input class="form-control" name="name" type="text" id="name"></div>


        <div valign="top" class="style7">Адрес</div>
        <div><textarea class="form-control" name="address" id="address"></textarea></div>


        <div valign="top" class="style7">Город</div>
        <div><input class="form-control" name="city" type="text" id="city"></div>


        <div valign="top" class="style7">Телефон</div>
        <div><input class="form-control" name="phone" type="text" id="phone"></div>


        <div valign="top" class="style7">E-mail</div>
        <div><input class="form-control" name="email" type="text" id="email"></div>


        <div>&nbsp;</div>
        <div><input class="btn btn-danger" type="submit" name="Submit" value="Signup">
        </div>

    </div>
    </form>
  </div>

  </div>
  <p>&nbsp; </p>
</body>

</html>