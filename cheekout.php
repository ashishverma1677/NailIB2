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
        top: 178%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 159%;
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
                            <img src="images/logo.svg">
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
                            <img src="images/logo.svg">
                        </div>
                    </div>
                </div>
				<div class="header-tophide"></div>
            </div>
            <hr class="hrlinetop">
        </div>
		<div class="container">
		<div class="row">
		<div class="col-sm-6 topdes11">
		
		</div>
		<div class="col-sm-6 moble-col-12 choicesubject1">
		
      <p id="choicein11">Choose your subjects</p> 
	  <div class="search-box">
	<input type="text"  autocomplete="off" placeholder="Search ..." style="    width: 154%;border: 1px solid black;border-radius: 20px;    font-size: 14px;background-color: #fff; background-image: url(file:///C:/Users/faim%20saifi/Desktop/nail%20ib/images/searchicon.png);background-position: 93% center;background-repeat: no-repeat;padding: 10%; -webkit-transition: width 0.3s ease-in-out;transition: width 0.3s ease-in-out;margin-left: 8%; background-size: 30px;margin-top: 10%;position: relative;outline: none;">
        <div class="result"></div>
    </div>
		<!--<input type="textsearch1"  name="search" placeholder="Search..">-->
		<input type="textsearch121" name="search" placeholder="">
		<input type="textsearch123" name="search" placeholder="">
		<h3 class="pricett1">Total Price: $350</h3>
		<a href=""><span class="last-menu-butt1">Cheek Out</span></a></li>
		</div>
		
			<div class="container-fluid">
			<div class="col-sm-6"></div>
			<div class="col-sm-3 bottomdes113">
			<img src="images/icon4.png" alt=""  class="img-responsive" style="margin-left:50%;"/>
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
