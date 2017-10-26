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

  <link rel="stylesheet" href="css/style2.css">
  <style type="text/css">
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 108%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 202%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 15px 10px;
        border: 41px solid transparent;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: transparent;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
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
                                <li><a href="subject.php">Subjects</a></li>
                                <li><a href="about.php"><span class="last-menu-butt">Login</span></a></li>
                             </ul>
                         </div>
                    </div>
                </div>
                <div class="mobile-show">
                    <div class="mobl-menue-col-9">
                         <p class="click-menu"><span class="nav-icon"><i class="fa fa-bars" aria-hidden="true"></i></span></p>
                         <ul class="desktop-ul-new">
                             <img src="images/logo.svg">
                            <li><a href="pricing.php">Pricing</a></li>
                            <li><a href="subject.php">Subject</a></li>
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
        <div class="col-12 banner-sec">
            <div class="banner container mobile-bg">
                <div class="col-6 moble-col-6">
                    <div class="banner-side">
                        <h2>For students planning to ace International Baccalaureate Program</h2>
                        <h3>providing notes that matter</h3>
                        <button class="registe-butt-mob">Registe now</button>
                    </div>
                </div>
				<form class="form-horizontal" method="post">
                <div class="col-6 moble-col-6">
                    <div class="banner-aside">
                        <div class="col-6">
                           <div class="formoneby">
                                <label>First Name</label> 
								 <input type="text" required="required" name="firstname" value="" placeholder="First Name"  class="inp-our" >
                               
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="formoneby">
                                <label>Last Name</label> 
								<input type="text" required="required" name="lastname" value="" placeholder="Last Name" class="inp-our" >

                           </div> 
                        </div>
                        <div class="col-12">
                           <div class="formoneby">
                                <label>User Name</label> 
								<input type="text" required="required" name="username" value=""  placeholder="User Name" class="inp-our2">
  
                           </div> 
                        </div>
                        <div class="col-6">
                           <div class="formoneby">
                                <label>Date Of Birth</label> 
								<input  required="required" type="date" name="dob" class="inp-our"/>
	
                           </div> 
                        </div>
                        <div class="col-6">
                           <div class="formoneby">
                                <label>IBDP year</label> 
                               <select type="text" name="ibdpyear" class="inp-our" >
                                <option>2017</option>
                                <option>2016</option>
                                <option>2015</option>
                                <option>2014</option>
                               </select>
                           </div> 
                        </div>
                        <div class="col-12">
                           <div class="formoneby">
                                <label>Email Address</label> 
								<input type="text" required="required" name="email" value=""  placeholder="Email Address" class="inp-our2">

                           </div> 
                        </div>
                        <div class="col-12">
                           <div class="formoneby">
                                <label>Password</label> 
								 <input type="Password" required="required" name="password" value=""  placeholder="Password" class="inp-our2">
      
                           </div> 
                        </div>
                        <div class="col-12">
                           <div class="formoneby">
                                <label>Confirm Password</label> 
								 <input type="Password" required="required" name="password" value=""  placeholder="Password" class="inp-our2">
 

                               
                           </div> 
                        </div>
                        <div class="col-12">
                           <div class="formoneby">
                               <input name="register" type="submit" class="input-our-butt" value="Register ">
							   <a href="about.php">
							   <p style="float:right; color:#3BCEFC;">Returning user ? Login</p>
							   </a>
                           </div> 
                        </div>
                    </div>
                </div>  
				</form>
            </div>
        </div>
        <!--end banner section-->
        
        
        <div class="col-12 search-sec">
            <div class="search container">
                <div class="col-12">
                    <div class="serch-sec-row">
                        <h5>Search for your HL &amp; SL units</h5>
                        <div class="search-sec-grp">
                            <div class="search-box">
							<input type="text" class="inp-search searc-icon-1 searc-position" autocomplete="off" placeholder="Search ..." style="width: 201%;    height: 90px;    border: none;    border-radius: 15px;    font-size: 20px;    background-color: #fff;    padding: 0px 50px 0px 15px;    margin-bottom: 30px;    margin-top: 10px;    outline: none;">
        <div class="result"></div>
    </div>
							<!--
                        --></div>
                        <div class="search-sec-grp">
                            <input type="text" class="inp-search searc-icon-2 searc-position" placeholder="">
                        </div>
                        <div class="search-sec-grp">
                            <input type="text" class="inp-search searc-icon-2 searc-position" placeholder="" style="margin-top: -29px;">
                        </div>
                        <h5>All the subject might not be available</h5>
                    </div>
                </div>
            </div>
        </div>
        <!--search-->
        
        
        <div class="col-12 registe-sec">
            <span class="bode-le"></span>
            <div class="egiste-studet">
                <div class="col-6 egiste-12">
                    <h2>Registered Students</h2>
                </div>
                <div class="col-6 egiste-12 bodemobil">
                    <h2>100,0000+</h2>
                </div>
            </div>
        </div>
        
        
        <div class="col-12 package-sec">
            <div class="package container">
                <div class="col-6 mobile-12-col">
                    <div class="pakage-sec-col">
                        <p>prices in USD</p>
                        <section id="usdprice1">
                            <p class="prictop">$25</p>
                            <p class="pricecentee1">$19.99</p>
                            <p class="forstandard">for standard level subjects</p>
                            <br>
                            <br>
                            <hr class="hrlineinusd">
                            <br>
                            <br>

                            <p class="notesofallthecha">Notes of all the chapters</p><br>
                            <p class="simplepaper">Sample paper collection</p><br>
                            <p class="simpleext">Sample Extended Essay</p><br>
                            <p class="simpleextok">Sample TOK essay</p><br>
                            <p class="simpleias">Sample IAs</p><br>
                            <p class="ongiingup">ongoing database update</p><br>
                            <br>
                        </section>
                        <input type="button" class="Register_Now" value="Register Now">
                    </div>
                </div>
                <div class="col-6 mobile-12-col">
                    <div class="pakage-sec-col pakage-right">
                        <p class="price-usd-right">prices in USD</p>
                        <section id="usdprice1">
                            <p class="prictop">$25</p>
                            <p class="pricecentee1">$34.99</p>
                            <p class="forstandard">for standard level subjects</p>
                            <br>
                            <br>
                            <hr class="hrlineinusd">
                            <br>
                            <br>

                            <p class="notesofallthecha">Notes of all the chapters</p><br>
                            <p class="simplepaper">Sample paper collection</p><br>
                            <p class="simpleext">Sample Extended Essay</p><br>
                            <p class="simpleextok">Sample TOK essay</p><br>
                            <p class="simpleias">Sample IAs</p><br>
                            <p class="ongiingup">ongoing database update</p><br>
                            <br>
                        </section>
                        <input type="button" class="Register_Now" value="Register Now">
                    </div>
                </div>
                    <div class="col-8 mobile-12-buss">
                        <div class="busnies-left">
                            <div class="busniess-para">
                                <h3 class="bussinessm1">Business and M...</h3>
                                <h4 class="examplenotes1">Example Notes</h4>
								<a href="index.php">
                                <p class="bussinessregister1">Register</p>
								</a>
                            </div>
                            <input type="button" class="buttonviewleft" value="View">
                        </div>
                    </div>
                    <div class="col-8 mobile-12-buss right-burr">
                        <div class="busnies-right">
                            <div class="busniess-para-right">
                                <h3 class="bussinessm1">Business and M...</h3>
                                <h4 class="examplenotes1">Example Notes</h4>
								<a href="index.php">
                                <p class="bussinessregister1">Register</p>
								</a>
                            </div>
                            <input type="button" class="buttonviewleft" value="View">
                        </div>
                    </div>
                    <span class="bussiess-bg">&nbsp;</span>
            </div>
        </div>
        <!--end package-->

        
        <div class="col-12 qurese">
            <span class="bg-img"></span>
            <div class="qures-bg-con">
                <div class="qures-con">
                    <h3>Still have doubts or queries</h3>
                    <button class="contact-bg-butt">Contact Us</button>
                </div>
            </div>
        </div>
        <!--end qurese-->
        
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
if(isset($_POST['register']))
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