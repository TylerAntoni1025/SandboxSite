<?php header("Content-type: text/css"); 
    session_start();
    $bg1 = $_SESSION["color1"];
    $bg2 = $_SESSION["color2"];
    $bg3 = $_SESSION["color3"];
    $bg4 = $_SESSION["color4"]; 
?>

:root {
    --bg-1: <?=$bg1?>;
    --bg-2: <?=$bg2?>;
    --bg-3: <?=$bg3?>;
    --bg-4: <?=$bg4?>;
}

.box {
    border: 1px solid #c2c2c2;
}

.bg-1 {
    background-color: var(--bg-1) !important;
    fill: var(--bg-1) !important;
}

.bg-2 {
    background-color: var(--bg-2) !important;
    fill: var(--bg-2) !important;
}

.bg-3 {
    background-color: var(--bg-3) !important;
    fill: var(--bg-3) !important;
}

.bg-4 {
    background-color: var(--bg-4) !important;
    fill: var(--bg-4) !important;
}