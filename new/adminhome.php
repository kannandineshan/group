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
    <link rel="shortcut icon" href="admin_assets/admin_images/tabicon.png" type="image/x-icon" />

    <!-- CSS Stylesheet-->
    <link rel="stylesheet" href="admin_assets/admin_css/adminhome.css" type="text/css">
</head>
<!-- [END OF HEAD] ----------------------------------------------------------------------------------------------->


<!-- [START OF BODY] --------------------------------------------------------------------------------------------->
<body>



<!-- [START OF HEADER] ------------------------------------------------------->
<header>

    <!-- TOP PAGE BANNER -->
    <section class="container" id="bannercontainer">
        <img src="admin_assets/admin_images/bfcheaderbanner.png" id="bfcheaderbanner">
    </section>

    <!-- NAVIGATION -->
    <!-- [START OF NAVIGATION] ----------------------------------------------->
    <nav>

        <?php include("admin_assets/admin_htmlscripts/navigationscript.html"); ?>

    </nav>
    <!-- [END OF NAVIGATION] ------------------------------------------------->

</header>
<!-- [END OF HEADER] --------------------------------------------------------->


<!-- [START OF MAIN] --------------------------------------------------------->
<main>

    <!--  start page-title -->
    <div id="page-title">
        <h1>Administrator Home Page</h1>
    </div>
    <!--  end page-title -->

    <!--  start table-content  -->
    <div id="table-content">
        <h2><span style="text-decoration: underline;"> Features: </span></h2>
        <h3><a href="createlogin.php">Create Volunteer Account</a></h3>
        <h3><a href="delete-user.php">Edit Volunteers</h3>
        <h3><a href="view.php">Surveys</a></h3>
        <h3><a href="viewreport.php">Reports</a></h3>
    </div>
    <!--  end table-content  -->

</main>
<!-- [END OF MAIN] ---------------------------------------------------------->


<!-- [START OF FOOTER] ------------------------------------------------------>
<footer>

    <?php include("admin_assets/admin_htmlscripts/footerscript.html"); ?>

</footer>
<!-- [END OF FOOTER] -------------------------------------------------------->


</body>
<!-- [END OF BODY] --------------------------------------------------------------------------------------------->


</html>