<?php

    //THIS PAGE IS DESTINATION WHEN ADMIN WANTS TO CREATE A NEW USER AND WHEN A NEW USER HAS BEEN ADDED TO THE DATABASE



    //sends user back to index.php if not logged in
    session_start();
    if(!isset($_SESSION['ad_email'])){
        header("Location: index.php");
    }


    //This check shows the right message if the user was created or existed already
    if($_SERVER['REQUEST_METHOD']==='GET'){
        $success = $_GET["Success"];

        if($success=="Yes"){
            echo "<SCRIPT>alert('User created!!!');</SCRIPT>";
        }
        elseif($success=="No"){
            echo "<script>alert('User already exists');</script>";
        }
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
    <section class="container" id="bannercontainer"></section>

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
        <h1>Create User Login</h1>
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