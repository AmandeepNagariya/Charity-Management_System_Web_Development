<?php 

	session_start();
	
	if(isset($_SESSION['uid']))
	{
		header('location:Dashboard.php');
	}
	
	if(isset($_SESSION['uid1']))
	{
		header('location:Dashboard.php');
	}


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keyword" content="">
  <title>Admin Login</title>

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form method="post" class="form-login">
        <h2 class="form-login-heading">Login Now</h2>
        <div class="login-wrap">
          <input type="text" name="userid" class="form-control" placeholder="Username" autofocus>
          <br>
          <input type="password" name="password" class="form-control" placeholder="Password">
          <br>
		   
          <input type="submit" name="login" class="btn btn-theme btn-block" value="submit">
          <hr>
		  <h5 align="center" style="color:#4ECDC4;">&copy; 2018 Almighty's Technology</h5>
			<div align="center">
				
            </div>
             <br>
         
        </div>
        
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
<?php 
//database connection string file
include("database.php");
if(isset($_POST['login']))
{
	//print_r($_POST);exit();
	$userid = mysqli_real_escape_string($con,$_POST['userid']);
	$password = mysqli_real_escape_string($con,$_POST['password']);
	//print_r($name);
	//print_r($password);exit();
	

	//print_r($row);exit();
	
	if($userid=="admin" && $password=="admin")
	{
		
	   
	    $id = "1";
		//print_r($id);exit();
	    $_SESSION['uid'] = $id;
		//print_r($_SESSION['uid']);exit();
		header('location:Dashboard.php');
	}
	else
	{

		  ?>
		<script>
			alert("Username or Password not match");
			window.open('index.php','_self')
		</script>
		<?php  
	}


}




?>









