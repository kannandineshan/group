<?php

//THIS PAGE IS DESTINATION FOR ADMIN WHEN LOGGED IN AND TRYING TO ACCESS INDEX.PHP, AND WHEN CLICKING LINKS LEADING HERE

//If no session exists, admin is sent to index.php
session_start();
if(!isset($_SESSION['ad_email'])){
    header("Location: index.php");
}

?>




<!DOCTYPE html>

<html lang="en">

<!-- [START OF HEAD] --------------------------------------------------------------------------------------------->
<head>
    <!-- CHARACTER ENCODING -->
    <meta charset="UTF-8">

    <!-- WINDOW TAB TITLE -->
    <title>Admin Home</title>

    <!-- WINDOW TAB ICON -->
    <link rel="shortcut icon" href="assets/images/tabicon.png" type="image/x-icon" />

    <!-- CSS Stylesheet-->
    <link rel="stylesheet" href="assets/css/adminhome.css" type="text/css">
</head>
<!-- [END OF HEAD] ----------------------------------------------------------------------------------------------->


<!-- [START OF BODY] --------------------------------------------------------------------------------------------->
<body>



<!-- [START OF HEADER] ------------------------------------------------------>
<header>

    <!-- TOP PAGE BANNER -->
    <section class="container" id="bannercontainer"></section>

    <!-- NAVIGATION -->
    <nav> <?php include("assets/htmlscripts/navigationscript.html"); ?> </nav>



</header>
<!-- [END OF HEADER] ------------------------------------------------------->





</body>
<!-- [END OF BODY] --------------------------------------------------------------------------------------------->


</html>