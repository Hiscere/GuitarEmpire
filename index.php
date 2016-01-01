
    <?php
                                                        //REJESTRACJA

        $name = $_POST["name"];
        $passworda = $_POST["password"];
        $passwordRe = $_POST["passwordRe"];
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
                if (strval($passworda)==strval($passwordRe)){
                    $sql = "INSERT INTO accountdata (name, password, passwordRe) VALUES ('$name','$passworda', '$passwordRe')" ;
                    echo "Success";
                    $conn->real_query($sql);
                    $res = $conn->use_result();
                    print_r(json_encode($_POST));
                    }else{
                    echo "password don't mach";
                }
                 }
		    
     
     ?>

