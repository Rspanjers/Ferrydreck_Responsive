<?php
$xmlDoc=new DOMDocument();

$mysqli = new mysqli ("localhost","root","","producten");
if (mysqli_connect_errno($mysqli)){
          
            echo "Failed to connect to database: " . mysqli_connect_error();
          }

//get the q parameter from URL
$data = $_GET["invoer"];

if(isset($_GET["invoer"] && $_GET["invoer"]!="")){

$query = "SELECT auteur , titel FROM Artikelen WHERE auteur LIKE '"$_GET["invoer"] . "'";

if ($result = $mysqli -> query($query)){
  while ($row = mysqli_fetch_array("result"))
    echo $row["auteur" . "titel"];
}



}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") {
  $response="no suggestion";
} else {
  $response=$hint;
}

//output the response
echo $response;
?>