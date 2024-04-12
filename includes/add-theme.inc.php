<?php
$valueAssigned = isset($_POST['name']) &&
    isset($_POST['bg-color']) &&
    isset($_POST['h1-color']) &&
    isset($_POST['h1-align']) &&
    isset($_POST['par-color']) &&
    isset($_POST['par-size']);

if ($valueAssigned) {
    $name = $_POST['name'];
    $bg_color = $_POST['bg-color'];
    $h1_color = $_POST['h1-color'];
    $h1_align = strtolower($_POST['h1-align']);
    $par_color = $_POST['par-color'];
    $par_size = $_POST['par-size'];
    $themeData = "$bg_color~$h1_color~$h1_align~$par_color~$par_size";
    setcookie("themes[$name]", "$themeData", time() + 60 * 60 * 24 * 365, '/');

    header("Location:../add-theme.php");
} else {
    header("Location:../add-theme.php");
}
