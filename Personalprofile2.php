<?php
session_start();

if(!$_SESSION['name'])
	
{
 header("Location: about.php");
}
include("db_conection.php");
$query=mysqli_query($dbcon,"select * from student where username='".$_SESSION['name']."'");
	$row=mysqli_fetch_assoc($query);
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
                        <h1>Hi <?php echo $row['username']; ?></h1>
                           
                        </div>
                    </div>
                
            
            
        
      
        <!--end header-->
        
		
		<div class="container-fluid">
		<div class="row">
		<div class="col-sm-3 harry_notesbuy1">
		
		
	
	<p id="harry111_notes13buy">Hi,
	<?php echo $row['username']; ?>
	</p>
	<?php
include_once("config.php");
//$_SESSION['name']=$Name;
$username=$_SESSION['name'];
$result2 = mysqli_query($mysqli, "SELECT * FROM student where username='$username'"); 
while($row2 = mysqli_fetch_array($result2)) { 	
	echo "<td><a href=\"Personalprofile.php?stu_id=$row2[stu_id]\" style='text-decoration: none;    font-size: 1.5em;    margin-left: 10%;
    color: black;'><span>Profile</span>
                      </a></td>";
	
	}

    ?>
	<!--<a href="Your Notes.php">
	<p class="profile_naillef">Profile</p>
	</a>-->
	<hr / class="hrprofilel">
	<a href="YourNotes.php">
	<p class="profile_naillef1">Your Notes</p>
	</a>
	<hr / class="hrprofilel1">
	<a href="Send Refrence.php">
	<p class="profile_naillef12">Send Refrence</p>
	</a>
	<hr / class="hrprofilel12">
	<a href="logout.php">
	<p class="profile_logout">Log Out</p>
	</a>
	</div>
		
		
		<div class="col-sm-9">
		
		<div class="container-fluid">
		<div class="row">
		<div class="col-sm-6">
		<p class="pers-prof">Personal Profile</p>
		</div>
		<div class="col-sm-3">
		<button class="buttonVerifyEmail">Verify Email</button>
		
		
		</div>
		


		
	</div>
		
		</div>
		</div>
		<form class="form-horizontal" method="post" >
		<div class="container-fluid">
	<div class="row">
	<div class="col-sm-6">
	<div id="First-Name">
	<p class="firstname1">First Name</p>

	<input class="inputfristname1" name="first_name" value="<?php echo $row['first_name']; ?>" type="text" >
 
	<!--<input class="inputfristname1" placeholder="Harry" type="text" >-->
	
	<p class="firstname1">Last Name</p>
	<input class="inputfristname1" name="last_name" value="<?php echo $row['last_name']; ?>" type="text" >
	
	<!--<input class="inputfristname1" placeholder="Styles" type="text" >-->
	
	<p class="firstname1">Email</p>
	<input class="inputfristname1" name="email" value="<?php echo $row['email']; ?>" type="text" >
	
	<!--<input class="inputfristname1" placeholder="harrystyles@gmail.com" type="text" >-->
	
	<p class="firstname1">Date of Birth</p>
	<input class="inputfristname1" name="dob" value="<?php echo $row['dob']; ?>" type="text" >

	<!--<input class="inputfristname1" placeholder="00/09/2017" type="date" >-->
	
	
	
		</div>
	
	</div>
	
	<div class="col-sm-3 sidebarright1">
	<h2 class="rightchange1">Change Password</h2>
	<p class="currentpass11">Current Password</p>
	<input class="currentpasswor11" name="old_pass" type="password" >
	
	
	<p class="currentpass11">New Password</p>
	<input class="currentpasswor11" name="new_pass" type="password" >
		<input type="submit" name="re_password" class="savepp11" value="Save">
	
	
	
	</div>
		
	
		</div>
	
	
	
	
	
	</div>	
	</form>
	</div>
	</div>
		<div class="container-fluid">
		
		<div class="col-sm-6"></div>
		<div class="col-sm-6">
		<div id="backrightcolor1">
		<p class="payment11">Payment Details</p>
		<button class="addright1">Add</button>
			</div>
		
		</div>
	</div>
        
       <div class="container-fluid">
				
				<div class="col-sm-3"></div>
				<div class="col-sm-6 cardholder12">
				
				<div class="col-sm-6">
				<p class="firstname1">Card Holder's Name</p>
	<input class="inputfristname1" placeholder="Harry Styles" type="text" >
	<p class="firstname1">Expiry Dates</p>
	<input class="inputfristname1" placeholder="Harry Styles" type="text" >
	
				</div>
				<div class="col-sm-6">
				<p class="firstname1">Card Number</p>
	<input class="inputfristname1" placeholder="12234 1233 12313123" type="text" >
	
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
		$conn_db = mysql_connect("localhost","root","") or die();
		$sel_db = mysql_select_db("nail",$conn_db) or die();
		//s$stu_id = $_GET['stu_id'];
		$stu_id = $_GET['stu_id'];
//$user_email = $_SESSION['email'];
        $_SESSION["stu_id"] =$stu_id;
		if(isset($_POST['re_password']))
		{
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$email=$_POST['email'];
		$dob=$_POST['dob'];
		
		
		
			$update_pwd=mysql_query("update student set first_name='$first_name',last_name='$last_name',email='$email',dob='$dob' where stu_id='" . $_SESSION["stu_id"] . "'");
			echo "<script>alert('Update Sucessfully'); window.location='Personalprofile2.php'</script>";
		
		
		}
		?>