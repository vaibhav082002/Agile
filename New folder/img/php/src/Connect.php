<?php
    //These are the defined authentication environment in the db service
    
        // The MySQL service named in the docker-compose.yml.
        $host = 'db';
    
        // Database use name
        $user = 'MYSQL_USER';
    
        //database user password
        $pass = 'MYSQL_PASSWORD';
    
        //database name
        $mydatabase = 'MYSQL_DATABASE';
    
    $conn = new mysqli($host, $user, $pass, $mydatabase);
    
        $errors = [];
        
        $area ='';
        $bhk = '';
        $bath ='';
        $location = '';

    if (!$conn) {
        echo "Connection failed!";
        exit();
    }        
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
        // validate form
        $area=$_REQUEST['area (square feet)'];
        $bhkno= $_REQUEST['bhk'];
        $bathno = $_REQUEST['bath'];
        $location = $_REQUEST['location'];
         
        if(!$area){
            $errors[] = 'Enter area (square feet)';
        }
        if(!$bhk){
            $errors[] = 'Enter bhk';
        }
        if(!$bath){
            $errors[] = 'Enter bath';
        }
        if(!$location){
            $errors[] = 'Enter Location';
        }
        
        if(empty($errors)){
    
    
            $sql = "INSERT INTO price_prediction VALUES ( '$area','$bhk','$bath','$location')";
    
            if(mysqli_query($conn, $sql)){
                echo "Congratulations!! Record Saved..";
                    
            } else{
                echo "ERROR: Hush! Sorry $sql. "
                    . mysqli_error($conn);
            }
             
            $area ='';
            $bhk = '';
            $bath = '';
            $location= '';
            
        }
    }
    
    mysqli_close($conn);
?>