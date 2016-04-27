<?php

//THIS PAGE IS DESTINATION FOR ADMIN WHEN LOGGED IN AND TRYING TO ACCESS INDEX.PHP, AND WHEN CLICKING LINKS LEADING HERE


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
    <section class="container" id="bannercontainer"></section>

    <!-- NAVIGATION -->
    <nav> <?php include("admin_assets/admin_htmlscripts/navigationscript.html"); ?> </nav>

</header>
<!-- [END OF HEADER] --------------------------------------------------------->


<!-- [START OF MAIN] --------------------------------------------------------->
<main>

    <!--  start page-title -->
    <div id="page-title">
        Administrator Home Page
    </div>
    <!--  end page-title -->

    <!--  start table-content  -->
    <div id="table-content">
        <h2><span style="text-decoration: underline;"> Features: </span></h2>
        <h3><a href="createlogin.php">Create Volunteer Account</a></h3>
        <h3><a href="delete-user.php">Edit Volunteers</h3>
        <h3><a href="view.php">Surveys</a></h3>
        <h3><a href="viewreport.php">Reports</a></h3>
    <!--  end table-content  -->

</main>
<!-- [END OF MAIN] ---------------------------------------------------------->


<!-- [START OF FOOTER] ------------------------------------------------------>
<footer>

    <!--  start footer-content -->
    <div id="footer-left">
        <img src="admin_assets/admin_images/bfcfooterlogo.png">
        Copyright 2016 Befriend A Child <a href="http://www.befriendachild.org.uk">http://www.befriendachild.org.uk/</a>
        All rights reserved.
    </div>
    <!--  end footer-footer -->

</footer>
<!-- [END OF FOOTER] -------------------------------------------------------->


</body>
<!-- [END OF BODY] --------------------------------------------------------------------------------------------->


</html>