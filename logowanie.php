<?php

                                           //LOGOWANIE TaWuA8kf
      
            $haslo = $_GET['password'];
            $login = $_GET['name'];
            $servername = "db.zut.edu.pl";
            $dbname = "gg36296";
            $username = "gg36296";
            $password = "TaWuA8kf";
       
            	// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}else{
            
            
			$sql = "SELECT name,password FROM accountdata WHERE name LIKE '$login' AND password LIKE '$haslo' ";
		$conn->real_query($sql);
		$res = $conn->use_result();

		
		while ($row = $res->fetch_assoc()) {
		     if ($login== $row['name']&&$haslo==$row['password'] ){
		     	echo("xD");
		     }else{
                 
                 echo "login or password is incorrect";
             };
		    };
        };
    
?>