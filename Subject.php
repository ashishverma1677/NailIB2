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
		 <form method="post" action="NailIBIncorporation.php">
		<div class="col-sm-6 moble-col-12 choicesubject1">
		
      <p id="choicein11Register">Register with Nail IB Incorporation</p>
	  <p class="Access-your">Access your notes on the go !</p>
	  <div class="col-6">
                           <div class="formonebyfirst">
                                <label>First Name</label> 
								<input type="text" name="firstname" required="required" value="" placeholder="First Name"  class="inp-ourfirst" >
   
                           </div>
                        </div>

					<div class="col-5">
                           <div class="formonebyfirst">
                                <label>Last Name</label> 
                               <input type="text" name="lastname" required="required" value="" placeholder="Last Name" class="inp-ourfirst" >
							   
                           </div> 
                        </div>
		
						<div class="col-12">
                           <div class="formonebyfirst">
                                <label style="margin-left:-8%">User Name</label> 
                                <input type="text" name="username" required="required" value=""  placeholder="User Name" class="inp-our2first">
							 
                           </div> 
                        </div>
		
		
					
		<div class="col-6">
                           <div class="formonebyfirst">
                                <label>Date Of Birth</label> 
                                     <input  type="date" name="dob" required="required" class="inp-ourfirst"/>
							   
                           </div> 
                        </div>
		
					<div class="col-5">
                           <div class="formonebyfirst">
                                <label>IBDP year</label> 
                               <select type="text" name="ibdpyear" class="inp-ourfirst" >
                                <option>2017</option>
                                <option>2016</option>
                                <option>2015</option>
                                <option>2014</option>
                               </select>
                           </div> 
                        </div>
		<a href="NailIBIncorporation.php">
<input type="submit" class="last-next" value="Next">
</a>
		<!--<a href=""><span class="last-next ">Next</span></a></li>-->
		</div>
		</form>
			<div class="container-fluid">
			<div class="col-sm-6"></div>
			<div class="col-sm-3 bottomdes113">
			<img src="../images/iconbar.PNG" alt=""  class="img-responsive" style="margin-left:75%;"/>
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
