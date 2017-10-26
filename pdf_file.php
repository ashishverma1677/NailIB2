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
<?php
// including the database connection file
include_once("config.php");
if(isset($_GET['id']))
{
	
  $id=$_GET['id'];
if(isset($_POST['update']))
{	
    $emodel_name = mysqli_real_escape_string($mysqli, $_POST['emodel_name']);
	$eDimensions = mysqli_real_escape_string($mysqli, $_POST['eDimensions']);
	$emegapizels = mysqli_real_escape_string($mysqli, $_POST['emegapizels']);
	
		$result = mysqli_query($mysqli, "UPDATE add_pdf_file SET model_name='$emodel_name',
		Dimensions='$eDimensions',megapizels='$emegapizels'
		 WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: home2.php");
	}

}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM add_pdf_file WHERE id=$id");

while($res = mysqli_fetch_array($result))
	
{
    $model_name = $res['model_name'];
	$Dimensions = $res['Dimensions'];
	$megapizels = $res['megapizels'];
	$productimage1 = $res["productimage1"];

}
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
  <script src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    //Disable cut copy paste
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
   
    //Disable mouse right click
    $("body").on("contextmenu",function(e){
        return false;
    });
});
</script>
<script>
 
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
 
if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
 
function mischandler(){
 
return false;
 
}
 
function mousehandler(e){
 
var myevent = (isNS) ? e : event;
 
var eventbutton = (isNS) ? myevent.which : myevent.button;
 
if((eventbutton==2)||(eventbutton==3)) return false;
 
}
 
document.oncontextmenu = mischandler;
 
document.onmousedown = mousehandler;
 
document.onmouseup = mousehandler;
 
</script>
<script type="text/JavaScript">
//courtesy of BoogieJack.com
function killCopy(e){
return false
}
function reEnable(){
return true
}
document.onselectstart=new Function ("return false")
if (window.sidebar){
document.onmousedown=killCopy
document.onclick=reEnable
}
</script>
<script type="text/javascript"> 
function copyToClipboard() {

  var aux = document.createElement("input");
  aux.setAttribute("value", "print screen disabled!");      
  document.body.appendChild(aux);
  aux.select();
  document.execCommand("copy");
  // Remove it from the body
  document.body.removeChild(aux);
  alert("Print screen disabled!");
}

$(window).keyup(function(e){
  if(e.keyCode == 44){
    copyToClipboard();
  }
});

</script>
<SCRIPT LANGUAGE="JavaScript">
<!-- Disable
function disableselect(e){
return false
}
function reEnable(){
return true
}
//if IE4+
document.onselectstart=new Function ("return false")
document.oncontextmenu=new Function ("return false")
//if NS6
if (window.sidebar){
document.onmousedown=disableselect
document.onclick=reEnable
}
//-->
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
		
		
		
	</div>   
    </div>
    </div>
    <embed src="productimages/<?php echo $model_name;?>/<?php echo $productimage1; ?>#toolbar=0&navpanes=0&scrollbar=0" width="940" height="485" style="pointer-events:none;margin-top: -30%;margin-left: 26%;"> 
	
</body>
</html>