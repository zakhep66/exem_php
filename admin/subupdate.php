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
  include("../database.php");
  extract($_REQUEST);
  $id = $_GET['sub_id'];
  $q = mysqli_query($con, "select * from mst_subject where sub_id='$id'");
  $res = mysqli_fetch_assoc($q);


  if (isset($update)) {

    $query = "update mst_subject SET sub_name='$subname' where sub_id='$id'";
    mysqli_query($con, $query);
    echo "records updated";
  }



  ?>
  <h1 class='text-center bg-primary'>Изменить тему</h1>
  <div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
    <title>Добавить тему</title>
    <form name="form1" method="post" onSubmit="return check();">
      <table class="table table-striped">
        <tr>
          <td width="45%" height="32">
            <div align="center"><strong>Изменить название темы</strong></div>
          </td>
          <td width="2%" height="5">
          <td width="53%" height="32">
            <input class="form-control" value="<?php echo $res['sub_name']; ?>" name="subname" placeholder="Введите название" type="text" id="subname">
        <tr>
          <td height="26"> </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="26"></td>
          <td>&nbsp;</td>
          <td><input class="btn btn-primary" type="submit" name="update" value="Изменить"></td>
        </tr>
      </table>
    </form>
    <p>&nbsp; </p>
  </div>
</body>

</html>