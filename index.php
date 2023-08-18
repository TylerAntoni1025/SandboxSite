<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beta Bands</title>
    <link rel="stylesheet" type="text/css" media="screen" href="style.php">
</head>
<body>
    <form id="custom-svg-form" action="handler.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="logo-upload">Upload Logo:</label>
            <input type="file" id="logo-upload" name="logo">
        </div>
    
        <div class="colors-group">
            <label for="color1">Color 1:</label>
            <input type="color" id="color1" name="color1">
            
            <label for="color2">Color 2:</label>
            <input type="color" id="color2" name="color2">
            
            <label for="color3">Color 3:</label>
            <input type="color" id="color3" name="color3">
    
            <label for="color4">Color 4:</label>
            <input type="color" id="color4" name="color4">
        </div>
    
        <input type="submit" value="Submit">
    </form>   

    



    <script
        src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
        crossorigin="anonymous">
    </script>
</body>
</html>