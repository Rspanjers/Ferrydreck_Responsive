<?php 

class Nieuwsbrief{
    
    Private $email;
    Private $voornaam;
    Private $achternaam;
    
    /*Constructor die aangeroepen wordt als je een object maakt van de class*/
    function __construct($voornaam, $achternaam, $email){
        
        //$con = mysqli_connect("localhost","root","","fans");
        $con = new mysqli("localhost","root","","fans");

        if (mysqli_connect_errno($con)){
          
            echo "Failed to connect to database: " . mysqli_connect_error();
          }
          /*Checks if the values are not empty*/
        if(!empty($voornaam) && !empty($achternaam) && !empty($email)){

        }    
        else
        {
            echo "Fill in everything";
        }
    }
      
      function senddata(){
       $con = new mysqli("localhost","root","","fans");
      $sql = "INSERT INTO fanstable (voornaam, achternaam, emailadres) 
            VALUES ('".mysqli_real_escape_string($con, $_POST["voornaam"])."', '".mysqli_real_escape_string($con, $_POST["achternaam"])."', '".mysqli_real_escape_string($con, $_POST["email"])."');";

        if ($con->query($sql) === TRUE) {
                        echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
                }
        }  

    }

?>
