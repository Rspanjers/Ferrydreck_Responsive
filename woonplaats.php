<?php

	error_reporting(E_ALL);

	$mysqli = new mysqli ("localhost","root","","producten");
	if (mysqli_connect_errno($mysqli)){
	          
	    echo "Failed to connect to database: " . mysqli_connect_error();
	}


		$query = "SELECT naam FROM plaatsen WHERE naam LIKE '" . $_GET["invoer"] . "%'";
		$result = $mysqli -> query($query);
	 	while ($row = mysqli_fetch_array($result)){
	    	echo $row["naam"] . "<br />";
	    }


	function showconcerts(){
		$mysqli = new mysqli ("localhost","root","","producten");
		$query = "SELECT naam FROM plaatsen";
		$result = $mysqli -> query($query);
		while ($row = mysqli_fetch_array($result)){
	   		echo $row["naam"] . "<br />";
		}  
	}
?>