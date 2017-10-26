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
				<div class="header-tophide"></div>
            </div>
            <hr class="hrlinetop">
        </div>
		
      
        <!--end header-->
        
		<div class="container">
		<div class="row">
		<div class="col-sm-6 topdes11">
		
		</div>
		<form method="post"  action="NailIBIncorporation.php">
		<div class="col-sm-6 moble-col-12 choicesubject1">
		
      <p id="choicein11Register">Register with Nail IB Incorporation</p>
	  <p class="Access-your">Access your notes on the go !</p>
	  <span><p class="email-add1">Email Address</p></span>
		
        <input type="textEmail-Address" name="email" value=""  placeholder="Email Address">
	    <span><p class="email-add2">Password</p></span>
		<input type="textEmail-Address" name="password" value=""  placeholder="Password">
        <span><p class="email-add2">Confirm Password</p></span>
		<input type="textEmail-Address" name="password" value=""  placeholder="Password">
		<input type="hidden" name="firstname" 
 value="<?php echo $_POST['firstname']; ?>">
 <input type="hidden" name="lastname" 
 value="<?php echo $_POST['lastname']; ?>">
 <input type="hidden" name="username" 
 value="<?php echo $_POST['username']; ?>">
 <input type="hidden" name="dob" 
 value="<?php echo $_POST['dob']; ?>">
  <input type="hidden" name="ibdpyear" 
 value="<?php echo $_POST['ibdpyear']; ?>">
		
		
		
		<a href="checkout.php">
	<input type="submit" name="submit" class="last-next" value="Next">
    </a>
		
		
		
		
		</div>
		</form>
			<div class="container-fluid">
			<div class="col-sm-6"></div>
			<div class="col-sm-3 bottomdes113">
			<img src="images/iconbar1.png" alt=""  class="img-responsive" style="margin-left:75%;"/>
				</div>
			
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
if(isset($_POST['submit']))
{
    $first_name=$_POST['firstname'];
    $last_name=$_POST['lastname'];
    $username=$_POST['username'];
    $dob=$_POST['dob'];
    $ibdp_year=$_POST['ibdpyear'];
    $email=$_POST['email'];
    $password = md5($_POST['password']);
 
    $insert_user="INSERT into student(first_name,last_name,username,dob,ibdp_year,email,password)
     VALUE ('$first_name','$last_name','$username','$dob','$ibdp_year','$email','$password')";
    if(mysqli_query($dbcon,$insert_user))
    {
       echo "<script>alert('submit successfull');</script>";  
    }
}
?>