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
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 75%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 37px 10px;
        border: 0px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
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
            $.get("backend-search3.php", {term: inputVal}).done(function(data){
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
		<div class="col-sm-6">
		<div class="search-box">
							<input type="text" class="inp-search searc-icon-1 searc-position" autocomplete="off" placeholder="Search ..." style="width: 185%;    height: 57px;    border: none;    border-radius: 15px;    font-size: 20px;    background-color: #fff;    padding: 0px 50px 0px 15px;    margin-bottom: 30px;    margin-top: 10px;    outline: none;">
        <div class="result"></div>
    </div>
		
		</div>
		
		<div class="col-sm-3">
		<button class="buttonregistertobuy">Register</button>
		</div>
      
		<div class="col-sm-3">
		<p class="pararight3">to buy the bundles</p>
		</div>
	</div>   
    </div>
    	<div class="container">
		<div class="row">
			<div class="col-sm-4 box1">
			
				
	<p class="center1">Business and M...</p>
	<p class="center2">Higher Level</p>
	
	
		</div>
				<div class="col-sm-4 box1">
			
				
	<p class="center1">Business and M...</p>
	<p class="center2">Higher Level</p>
	
	
		</div>
		
		<div class="col-sm-4 box1">
			
				
	<p class="center1">Business and M...</p>
	<p class="center2">Higher Level</p>
	
	
		</div>
		
		<div class="col-sm-4 box2">
			
				
	<p class="center1">Business and M...</p>
	<p class="center2">Higher Level</p>
	
	
		</div>
		
		<div class="col-sm-4 box2">
			
				
	<p class="center1">Business and M...</p>
	<p class="center2">Higher Level</p>
	
	
		</div>
		
		
		<div class="col-sm-4 box2">
			
				
	<p class="center1">Business and M...</p>
	<p class="center2">Higher Level</p>
	
	
		</div>
		
		<div class="col-sm-4 box3">
			
		</div>
		<div class="col-sm-4 box3">
			
		</div>
		
		<div class="col-sm-4 box3">
			
		</div>
	</div>
</div>
	
	<div class="container">
			<div class="row">
				<div class="col-sm-12 middle">
				
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
