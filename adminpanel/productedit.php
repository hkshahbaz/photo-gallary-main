<?php
session_start();
if( !isset($_SESSION["name"])){
  header("location:index.php");
}
include_once('1pg_connection.php');

mysqli_select_db ($conn,$dbname);


$id=$_GET['id'];


if(isset ($_POST['submit']))
{

$name=$_POST["txtPTitle"];
$cat=$_POST["selCat"];
$image=$_POST["image"];

$sql="UPDATE photo SET  Name='$name' Image='$image' id='selcat' WHERE id='$id'";
#echo "<pre>";
#print_r($sql);
#exit;
$result=mysqli_query($conn,$sql);

// if successfully updated. 

if($result){
header("location:prouductmanagement.php?");
echo "<BR>";
}

else {
echo "ERROR";
}
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Update Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
 </head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Update </p>

<!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Insert Product Record</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form name="frmEdit" action="productadd.php" method="post" enctype="multipart/form-data">
              <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Product name"  name="txtPTitle">
        
        
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Image"  name="image">
        
        
      </div>
    
      <div class="form-group has-feedback">
      <select name="selCat" class="form-control" >
      <option value="">Select Category</option>
    <?php

include("1pg_connection.php");
$sql="select * from cat order by id";
$result=$conn->query($sql);
while($rowTr=$result->fetch_assoc())
{
  echo "<option value=".$rowTr["Id"].">".$rowTr["Name"]."</option>";
  
}
?>
      
    
        </select>
        <br>
        <br>

        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Update</button>
        </div>

        </form>
        <a href="productmanagement.php">Go back</a><br>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        

    </section>
    <

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
<script>
  $(function () {

    $('#example1').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>     
</body>

</html>

