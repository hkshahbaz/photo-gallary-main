<?php

include_once('1pg_connection.php');

mysqli_select_db ($conn,$dbname);


$id=$_GET['id'];


if(isset ($_POST['submit']))
{
$email	= $_POST['email'];
$fname	= $_POST['fname'];
$lname	= $_POST['lname'];
$pass	= $_POST['pass'];

$sql="UPDATE users_record SET  Email='$email',First_Name='$fname',Last_Name='$lname',Password='$pass' WHERE id='$id'";
#echo "<pre>";
#print_r($sql);
#exit;
$result=mysqli_query($conn,$sql);

// if successfully updated. 

if($result){
echo "Successful";
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

<form action="" method="post">
    <div class="form-group has-feedback"> 
<input type="text" class="form-control" placeholder="Email" name="email">
<span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

<div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="First Name" name="fname">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Last Name" name="lname">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="pass">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
<div class="row">
        <div class="col-xs-6">
          <div class="checkbox pull-right icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Update</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
</form> 
<a href="catmanagement.php">Go back</a><br>
</body>
</html> 
