<?php
	$xmlDoc=new DOMDocument();

	$mysqli = new mysqli ("localhost","root","","producten");
	if (mysqli_connect_errno($mysqli)){
	          
	            echo "Failed to connect to database: " . mysqli_connect_error();
	          }

	//invoer parameter
	if(isset($_GET["invoer"]) && $_GET["invoer"]!=""){

		$query = "SELECT auteur , titel FROM artikelen WHERE auteur LIKE '" . $_GET["invoer"] . "%'";
		$result = $mysqli -> query($query);
	 	while ($row = mysqli_fetch_array($result))
	    echo $row["auteur"] . "<br />";
		echo $row['titel'] . "<br />";

	}

	
?>