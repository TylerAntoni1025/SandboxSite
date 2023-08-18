<?php 
header("Content-type: image/svg+xml"); 

session_start();
$bg1 = $_SESSION["color1"];
// $color = sanitize_hex_color( '#' . $bg1 );

echo '
<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 764.16 229.47">
    <rect style="fill: ' . $bg1 . ' ;" x=".5" y="28.13" width="763.16" height="173.21"/>
    <circle style="fill: ' . $bg1 . ' ;" cx="382.08" cy="114.73" r="114.23"/>
</svg>';

// function sanitize_hex_color( $color ) {

//     if ( '' === $color ) {
//         return '';
//     }

//     // 3 or 6 hex digits, or the empty string.
//     if ( preg_match( '|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) ) {
//         return $color;
//     }

//     return '';

// }

?>