<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("sg2plcpnl0056.prod.sin2.secureserver.net", "nail_user", "nail_pass", "nail_db");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$term = mysqli_real_escape_string($link, $_REQUEST['term']);
 
if(isset($term)){
    // Attempt select query execution
    $sql = "SELECT * FROM add_pdf_file WHERE model_name LIKE '" . $term . "%' limit 0,1;";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                
				echo "<p style='margin-top: 47%;width: 145%;background-color: white;margin-left: 23px;'>" . $row['model_name'] . "</p>";
            }
            // Close result set
            mysqli_free_result($result);
        } else{
            echo "<p style='margin-top: 46%;background-color: white;margin-left: 10%;width: 145%;'>No matches found</p>";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
	$sql = "SELECT * FROM add_pdf_file WHERE model_name LIKE '" . $term . "%' limit 1,1;";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                
				echo "<p style='margin-top: -42%;width: 145%;background-color: white;margin-left: 181%;'>" . $row['model_name'] . "</p>";
            }
            // Close result set
            mysqli_free_result($result);
        } else{
           
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
	$sql = "SELECT * FROM add_pdf_file WHERE model_name LIKE '" . $term . "%' limit 2,1;";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                
				echo "<p style='margin-left: 354%;margin-top: -42%;width: 145%;background-color: white;'>" . $row['model_name'] . "</p>";
            }
            // Close result set
            mysqli_free_result($result);
        } else{
           
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
	$sql = "SELECT * FROM add_pdf_file WHERE model_name LIKE '" . $term . "%' limit 3,1;";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                
				echo "<p style='margin-top: 74%;width: 145%;background-color: white;margin-left: 23px;'>" . $row['model_name'] . "</p>";
            }
            // Close result set
            mysqli_free_result($result);
        } else{
           
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
	$sql = "SELECT * FROM add_pdf_file WHERE model_name LIKE '" . $term . "%' limit 4,1;";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                
				echo "<p style='margin-top: -42%;width: 145%;background-color: white;margin-left: 181%;'>" . $row['model_name'] . "</p>";
            }
            // Close result set
            mysqli_free_result($result);
        } else{
           
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
	$sql = "SELECT * FROM add_pdf_file WHERE model_name LIKE '" . $term . "%' limit 5,1;";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                
				echo "<p style='margin-top: -42%;width: 145%;background-color: white;margin-left: 354%;'>" . $row['model_name'] . "</p>";
            }
            // Close result set
            mysqli_free_result($result);
        } else{
           
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
 
// close connection
mysqli_close($link);
?>