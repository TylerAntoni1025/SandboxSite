<?php
    session_start();
    // COMPOSER INIT
    require 'vendor/autoload.php';
    
    // include DOMPDF autoloader
    require_once 'dompdf/autoload.inc.php';

    // reference the Dompdf namespace
    use Dompdf\Dompdf;

    // DISPLAY VALUES TRHOUGH SESSION
    $bg1 = $_SESSION["color1"];
    $bg2 = $_SESSION["color2"];
    $bg3 = $_SESSION["color3"];
    $bg4 = $_SESSION["color4"];

    function generate_pdf_command($bg1, $bg2, $bg3, $bg4){
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->getOptions()->setChroot('/path/to/common/assets-directory');

        $content = <<<EOD
            <div style="background-color: {$bg1}">Box with Color 1</div>
            <div style="background-color: {$bg2}">Box with Color 2</div>
            <div style="background-color: {$bg3}">Box with Color 3</div>
            <div style="background-color: {$bg4}">Box with Color 4</div>
            <img src="assets/svg/svg-1.php">
        EOD;
        
        $dompdf->loadHtml($content);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }

    if(array_key_exists('generate_pdf',$_POST)){
        generate_pdf_command($bg1, $bg2, $bg3, $bg4);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beta Bands | PDF</title>
    <link rel="stylesheet" type="text/css" media="screen" href="style.php">
</head>
<body style="max-width: 1040px; margin: 0 auto; padding: 1rem;">
    <?php echo $bg1 ?>
    <img src="assets/svg/svg-1.php">
    <?php echo $bg2 ?>
    <?php echo $bg3 ?>
    <?php echo $bg4 ?>

    <form method="post">
        <input type="submit" name="generate_pdf" id="generate_pdf" value="Generate PDF" /><br/>
    </form>
    <a href="index.php">Back home</a>
</body>
</html>
