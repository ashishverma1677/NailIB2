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
        top: 161%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 202%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 29px 10px;
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
            $.get("backend-search2.php", {term: inputVal}).done(function(data){
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
		<div class="col-sm-3 harry_notesbuy1 ">
		
		
	
	<p id="harry111_notes13buy">Hi,
	
	<?php echo $row['username']; ?>
	</p>
	<a href="Personalprofile.php">
	<p class="profile_naillef">Profile</p>
	</a>
	<hr / class="hrprofilel">
	<a href="Your Notes.php">
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
		
		<div class="col-sm-9 your-notes">
		<p>Buy more bundles</p>
		<div class="search-sec-grp">
		<div class="search-box">
							<input type="text" class="inp-search searc-icon-1 searc-position" autocomplete="off" placeholder="Search ..." style="width: 201%;    height: 90px;    border: none;    border-radius: 15px;    font-size: 20px;    background-color: #fff;    padding: 0px 50px 0px 15px;    margin-bottom: 30px;    margin-top: 10px;    outline: none;">
        <div class="result"></div>
    </div>

                        </div>
		</div>
		
		
		<div class="container">
	<div class="row">
	<div class="col-sm-8 ">
		<div class="Business-Management">
		<p></p>
		
			</div>
		<div class="Business-Management">
		<p></p>
		
			</div>	
			
			
		<div class="Business-Management">
		<p></p>
		
			</div>
			
			
			<div class="Business-Management">
		<p></p>
		
			</div>
			
			
			
			<div class="Business-Management1">
		<p>Total Price: $350</p>
		
			</div>
			
		</div>
	<div class="col-sm-1">
	<button class="contact-bg-butt1">Add</button>
	<button class="contact-bg-butt1">Add</button>
	<button class="contact-bg-butt1">Add</button>
	<button class="contact-bg-butt1">Add</button>
	<button class="contact-bg-butt2">Check Out</button>
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