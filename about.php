<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>NAIL IB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.css"/>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>


    
    <div class="wrap col-12">
        <div class="col-12">
            <div class="header container ">
                <div class="mobile-hide">
                    <div class="col-3 moble-col-3">
                        <div class="img-sec-logo">
						<a href="index.php">
                            <img src="images/logo.svg">
							</a>
                        </div>
                    </div>
                    <div class="col-9 moble-col-9">
                         <div class="menu-naviga">
                             <ul class="desktop-ul">
                                <li><a href="pricing.php">Pricing</a></li>
                                <li><a href="Subject.php">Subjects</a></li>
                                <li><a href="about.php"><span class="last-menu-butt">Login</span></a></li>
                             </ul>
                         </div>
                    </div>
                </div>
                <div class="mobile-show">
                    <div class="mobl-menue-col-9">
                         <p class="click-menu"><span class="nav-icon"><i class="fa fa-bars" aria-hidden="true"></i></span></p>
                         <ul class="desktop-ul-new">
                             
                            <li><a href="pricing.php">Pricing</a></li>
                            <li><a href="Subject.php">Subject</a></li>
                            <li><a href="index.php">Register</a></li>
                            <li><a href="about.php">Login</a></li>
                         </ul>
                    </div>
                    <div class="mobl-menue-col-3">
                        <div class="img-sec-logo">
						<a href="index.php">
                            <img src="images/logo.svg">
							</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
      <p style="padding-top:100px;"><hr> </p>
        <!--end header-->
        
		<div class="topabout">
		<div class="container-fluid">
		<div class="row">
		<form class="form-horizontal" method="post">
		<div class="col-sm-6  col-md-3 col-lg-4 formleft">
	<p class="singab">Sign In</p>
	<p class="singab1">Access your notes on the go !</p>
	
	<input class="input" name="name" autofocus  placeholder="Username" type="text" >
  <input class="input1" name="pass" autofocus placeholder="Password" type="password" >

	<button class="buttonloginab1" name="login" type="submit">Login</button>
	<p class="forguser1">forgot username ?</p>
	        <a href="reset.php">
		<p class="forgpass1">forgot password ?</p>
		</p>
	</div>
	</form>
	<div class="col-sm-6 singn">
	<p class="ifitisimport">If it is important to you, you</p><br/>
	<p class="willfindaway">will find a way. If not, you will</p>
	<p class="findan">find an excuse</p>
	<hr class="hrlineright1">
	<p class="hide1">Stop procasting and get revision bundle today</p>
	</div>
		</div>
				</div>
		
      
        
    </div>
    
    </div>
    
    
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
        <script>
        $(document).ready(function(){
           $('.click-menu').click(function(){
               $(".desktop-ul-new").animate({
                    width: "toggle"
                });
           })
        });
        </script>



    
    
    
</body>
</html>
<?php

include("db_conection.php");

if(isset($_POST['login']))
{
     $username=$_POST['name'];
    $password = md5($_POST['pass']);
    $check_user="select * from student WHERE username='$username'AND password='$password'";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('Bundles.php','_self')</script>";

        $_SESSION['name']=$username;
		 $_SESSION['stu_id']=$stu_id;
		
    }
    else
    {
        echo "<script>alert('username or password is incorrect!')</script>";
    }
}
?>
