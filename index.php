<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
     
<div class="img"></div>    
<form action="insert.php" method="post">  
        <label for="name">Name</label>
        <input name="name" type="text"  id="name"><br>

        <label for="Location">Location</label>
        <input type="text" name="Location" id="Location"><br>

        <label for="price in Lacks">Price</label>
        <input type="double" name="Price" id="Price"><br>

        <label for="Area in sqft">Area</label>
        <input name="Area" type="number" id="Area"><br>

        <label for="Number of Bedrooms">Bedrooms</label>
        <input name="Bedrooms" type="number" id="Bedrooms"><br>

        <label for="Number of Bathrooms">Bathrooms</label>
        <input type="number" name="Bathrooms" id="Bathrooms"><br>

        <button type="submit">Submit</button>
        


    </form>
    
</body>
</html>