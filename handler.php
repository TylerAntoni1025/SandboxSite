<?php   
    session_start();

    // if(isset($_FILES['logo'])){
    //     // HANDLE LOGO UPLOADED
    //     $uploaded_logo = $_FILES['logo'];
    //     $size = getimagesize($_FILES['logo']['tmp_name']); //get size
    //     $image = "data:" . $size["mime"] . ";base64," . base64_encode(file_get_contents($_FILES['logo']['tmp_name'])); //get image
    // }
    
    if(isset($_POST['color1']) && isset($_POST['color2']) && isset($_POST['color3']) && isset($_POST['color4'])) {
        // COLORS
        $_SESSION["color1"] = $_POST['color1'];
        $_SESSION["color2"] = $_POST['color2'];
        $_SESSION["color3"] = $_POST['color3'];
        $_SESSION["color4"] = $_POST['color4'];
    }

    header('Location: pdf.php');