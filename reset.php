<?php require('includes/config.php');

//if logged in redirect to members page


//if form has been submitted process it
if(isset($_POST['submit'])){

	//email validation
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	    $error[] = 'Please enter a valid email address';
	} else {
		$stmt = $db->prepare('SELECT email FROM student WHERE email = :email');
		$stmt->execute(array(':email' => $_POST['email']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(empty($row['email'])){
			$error[] = 'Email provided is not on recognised.';
		}

	}

	//if no errors have been created carry on
	if(!isset($error)){

		//create the activasion code
		$token = md5(uniqid(rand(),true));

		try {

			$stmt = $db->prepare("UPDATE student SET resetToken = :token, resetComplete='No' WHERE email = :email");
			$stmt->execute(array(
				':email' => $row['email'],
				':token' => $token
			));

			//send email
			$to = $row['email'];
			$subject = "Password Reset";
			$body = "<p>Someone requested that the password be reset.</p>
			<p>If this was a mistake, just ignore this email and nothing will happen.</p>
			<p>To reset your password, visit the following address: <a href='".DIR."resetPassword.php?key=$token'>".DIR."resetPassword.php?key=$token</a></p>";

			$mail = new Mail();
			$mail->setFrom(SITEEMAIL);
			$mail->addAddress($to);
			$mail->subject($subject);
			$mail->body($body);
			$mail->send();

			//redirect to index page
			header('Location: about.php?action=reset');
			exit;

		//else catch the exception and show the error.
		} catch(PDOException $e) {
		    $error[] = $e->getMessage();
		}

	}

}

//define page title
$title = 'Reset Account';


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nail IB | About Us</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>

  <!-- RESET CSS -->
  <link rel="stylesheet" href="Reset.css" type="text/css" />
  <!-- STYLE SHEET -->
  <link rel="stylesheet" href="css/pass_style.css" type="text/css" />
  <!-- WEBSITE ICON LINK-->
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
        
        <!--end header-->
        <form role="form" method="post" action="" autocomplete="off">
		<div class="col-sm-12 resetpass">
			<div class="container">
			
				<div class="col-sm-12 col-lg-12 col-md-12 moble-col-9 resetyourpass">
					<h2 style="font-weight:700;">Password Reset</h2>
					<p style="font-size:18px;">To reset your password enter the email you used <br>to register</p>
					<?php
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				}

				if(isset($_GET['action'])){

					//check the action
					switch ($_GET['action']) {
						case 'active':
							echo "<h2 class='bg-success'>Your account is now active you may now log in.</h2>";
							break;
						case 'reset':
							echo "<h2 class='bg-success'>Please check your inbox for a reset link.</h2>";
							break;
					}
				}
				?>
					<input type="reset-password"  name="email" placeholder="eg: helloWorld@gmail.com">
					
					<input type="submit"  name="submit" class="buttonReset" value="Get Reset Link">
			        </div>
	                </div>
               </div> 
               </form>
		
		
  <div class="col-12">
            <div class="footer container">
                <div class="footer-sec">
                    <div class="col-3 footer-full-12">
                        <div class="footer-sec1 footer-sec1-1">
                            <div class="foter-lit">
                                <h4>Nail IB Inc.</h4>
                                <ul>
                                    <li><a href="Aboutus.php">About Us</a></li>
                                    <li><a href="privacy_policy.php">Privacy Policy</a></li>
                                    <li><a href="">Infringement Policies</a></li>
                                    <li><a href="why_us.php">Why Us</a></li>
                                    <li><a href="rules.php">Rules</a></li>


                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 footer-full-12">
                        <div class="footer-sec1 footer-sec1-2">
                            <div class="foter-lit">
                                <h4>Quick Links</h4>
                                <ul class="Quinklink">
                                    <li><a href="about.php">Login</a></li>
                                    <li><a href="Subject.php">Register Now</a></li>
                                    <li><a href="">List of subjects</a></li>
                                    <li><a href="">Coming up</a></li>
                                    <li><a href="">Prices</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 footer-full-12">
                        <div class="footer-sec1 footer-sec1-3">
                            <div class="foter-lit">
                                <h4>Language</h4>
                                <select class="langu-selec">
                                    <option>Hindi </option>
                                    <option>English</option>
                                    <option>Urdu</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>   
        

        
        
    </div>
    
  
  </div>
  <!-- JQuery Attachment -->
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
  <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="JS.js"></script>
</body>

</html>
