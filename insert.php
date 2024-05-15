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
    
    $name='';
    $Location  ='';
    $Price = '';
    $Area = '';
    
    $Bedrooms='';
    $Bathrooms = '';
    
        
if($_SERVER['REQUEST_METHOD'] === 'POST'){

    // validate form
    
    $name= $_REQUEST['name'];
	$Location=$_REQUEST['Location'];
    $Price = $_REQUEST['Price'];
    $Area = $_REQUEST['Area'];
    $Bedrooms = $_REQUEST['Bedrooms'];
    $Bathrooms = $_REQUEST['Bathrooms'];
    
     
    if(!$name){
        $errors[] = 'Enter  Name';
    }
    if(!$Location){
        $errors[] = 'Enter Location';
    }
    if(!$Price){
        $errors[] = 'Enter Price in Lacks';
    }
    if(!$Area){
        $errors[] = 'Enter Area in sqft';
    }
	if(!$Bedrooms){
        $errors[] = 'Enter Number of Bedrooms';
    }
    if(!$Bathrooms){
        $errors[] = 'Enter Number of Bathrooms';
    }

     

    if(empty($errors)){


        $sql = "INSERT INTO houseprice VALUES ( '$name','$Location','$Price','$Area','$Bedrooms','$Bathrooms')";

        if(mysqli_query($conn, $sql)){
            echo "Congratulations!! Record Saved..";
                
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
       
        $name = '';
        $Location = '';
        $Price = '';
        $Area = '';
        $Bedrooms = '';
        $Bathrooms = '';
        
    }
}

mysqli_close($conn);
?>