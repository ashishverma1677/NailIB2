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
   <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css'>
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
	<!--<p class="profile_naillef">Profile</p>-->
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
		
		<p class="your-bin">Your Bundles</p>
		<button class="button-more">Buy More</button>
		
		</div>
		<div class="container-fluid">
		<div class="row">
			<div class="col-sm-9">
				<div class="container-fluid">
<div class="row-fluid">
<div class="span12">

        
    <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
            <div class="item active">
                    <ul class="thumbnails">
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
							<div class="caption" style="margin-left: 12px;margin-top: -138px;">
                            
                                <h2>Business and M...</h2>
                				<p>Higher Level</p>
                                
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption" style="margin-left: 12px;margin-top: -138px;">
                            
                                <h2>Business and M...</h2>
                				<p>Higher Level</p>
                                
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption" style="margin-left: 12px;margin-top: -138px;">
                            
                                <h2>Business and M...</h2>
                				<p>Higher Level</p>
                                
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption" style="margin-left: 12px;margin-top: -138px;">
                            
                                <h2>Business and M...</h2>
                				<p>Higher Level</p>
                                
                            </div>
                        </li>
                    </ul>
              </div><!-- /Slide1 --> 
            <div class="item">
                    <ul class="thumbnails">
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption" style="margin-left: 12px;margin-top: -138px;">
                            
                                <h2>Business and M...</h2>
                				<p>Higher Level</p>
                                
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption" style="margin-left: 12px;margin-top: -138px;">
                            
                                <h2>Business and M...</h2>
                				<p>Higher Level</p>
                                
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption" style="margin-left: 12px;margin-top: -138px;">
                            
                                <h2>Business and M...</h2>
                				<p>Higher Level</p>
                                
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption" style="margin-left: 12px;margin-top: -138px;">
                            
                                <h2>Business and M...</h2>
                				<p>Higher Level</p>
                                
                            </div>
                        </li>
                    </ul>
              </div><!-- /Slide2 --> 
            <div class="item">
                    <ul class="thumbnails">
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption" style="margin-left: 12px;margin-top: -138px;">
                            
                                <h2>Business and M...</h2>
                				<p>Higher Level</p>
                                
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption" style="margin-left: 12px;margin-top: -138px;">
                            
                                <h2>Business and M...</h2>
                				<p>Higher Level</p>
                                
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption" style="margin-left: 12px;margin-top: -138px;">
                            
                                <h2>Business and M...</h2>
                				<p>Higher Level</p>
                                
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                            </div>
                            <div class="caption" style="margin-left: 12px;margin-top: -138px;">
                            
                                <h2>Business and M...</h2>
                				<p>Higher Level</p>
                                
                            </div>
                        </li>
                    </ul>
              </div><!-- /Slide3 --> 
        </div>
        
        <div class="control-box" style=" margin-top: -101px;">                            
            <a data-slide="prev" href="#myCarousel" class="carousel-control left"style="margin-right: 883px;">‹</a>
            <a data-slide="next" href="#myCarousel" class="carousel-control right">›</a>
        </div><!-- /.control-box -->   
                              
    </div><!-- /#myCarousel -->
        
</div><!-- /.span12 -->          
</div><!-- /.row --> 
</div><!-- /.container -->

                            
<!-- Delete This -->            
			
			
			
		</div>
			
		
		
		
		<div class="container">
			
				<div class="col-sm-3">
				<p class="ibup">IB Updates</p>	
				
			</div>
				<div class="col-sm-6 bckcolcyn"></div>
			
<div class="container-fluid">
			<div class="row">
				<div class="col-sm-9 examtime">
				<p>Exam time tables are out</p>
			</div>
		</div>
	</div>			
	</div>
		
		
		
		
		</div>
	</div>
		
	</div>
		
		
	
		
        
       
        
        
        
        
        
        

        
        
    </div>
    
    </div>
    
    
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://simonalex.com/demo/bootstrap/carouselbox/bootstrap-carousel-ie.js'></script>

    <script  src="js/index.js"></script>
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
