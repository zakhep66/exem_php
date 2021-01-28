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
  $id = $_GET['test_id'];
  $q = mysqli_query($con, "select * from mst_test where test_id='$id'");
  $res = mysqli_fetch_assoc($q);


  if (isset($update)) {

    $query = "update mst_test SET test_name='$testname',total_que='$totque' where test_id='$id'";
    mysqli_query($con, $query);
    echo "records updated";
  }



  ?>
  <form name="form1" method="post" onSubmit="return check();">
    <h2 class='text-center bg-primary'>Update TEST</h2>
    <table class="table table-striped">

      <div class="container">
        <div height="26">
          <div align="left"><strong> Enter Test Name </strong></div>
        </div>
        <div>&nbsp;</div>
        <div><input class="form-control" value="<?php echo $res['test_name']; ?>" name="testname" type="text" id="testname"></div>
      </div>
      <div class="container">
        <div height="26">
          <div align="left"><strong>Enter Total Question </strong></div>
        </div>
        <div>&nbsp;</div>
        <div><input class="form-control" value="<?php echo $res['total_que']; ?>" name="totque" type="text" id="totque"></div>
      </div>
      <div class="container">
        <div height="26"></div>
        <div>&nbsp;</div>
        <div><input class="btn btn-primary" type="submit" name="update" value="update"></div>
      </div>
    </table>
  </form>
  <p>&nbsp; </p>
</body>

</html>