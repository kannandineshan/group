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

    <!-- JQUERY SCRIPT -->
    <script src="jsadminpage/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
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
        <h1>Create User Login</h1>
    </div>
    <!--  end page-title -->

    <!--  start table-content  -->
    <div id="table-content">
        <h2><span style="text-decoration: underline;"> Add User details: </span></h2>

        <!-- start id-form -->
        <form id="idform" action='createlogin.php' method='post'>

    <div>
            <label for="firstname">Firstname:</label>
                <input type="text"  class="inp-form" name="firstname" id="firstname" required/>
    </div>
        <br>
    <div>
            <label for="surname">Surname:</label>
                <input type="text" class="inp-form" name="surname" id="surname" required/>

    </div>
        <br>
    <div>
            <label for="email">E-mail:</label>
                <input type="email" class="inp-form" name="email" id="email" required/>
    </div>
        <br>
    <div>
            <!-- added field for random password -->
            <label for="pass">Password:</label>
                <input type="password" class="inp-form" name="password" id="pass" required/>
                <button type="button" onclick="output()">Create Password</button>
    <div>
        <br>
    <div>
            <label>Currently matched with a child?</label>
                    <input type="radio" name="child_matched" value=true id="yes" required>Yes
                    <input type="radio" name="child_matched" value=false id="no" required>No

            <div id="childinfo" style="display: none;">
        <br>
                <div>
                <label for="gender">Child's gender:</label>
                    <input type="radio" name="child_gender" value="male" class="disabledelements" id="gender" required>Male
                    <input type="radio" name="child_gender" value="female" class="disabledelements" id="gender" required>Female
                    <input type="radio" name="child_gender" value="other" class="disabledelements" id="gender" required>Other
                </div>
                <br>
                <div>
                <label for="dateofbirth">Child's date of birth:</label>
                    <input  type="date" class="disabledelements" disabled name="date_of_birth" id="dateofbirth" required/>
                </div>
            </div>
    </div>
        <br>
    <div>
            <label></label>
            <input id="submit" type="submit" value="SUBMIT" class="form-submit"/>
            <input type="reset" value="RESET" class="form-reset"/>
    </div>

        </form>

        <!-- end id-form  -->

    </div>
    <!--  end table-content  -->

</main>
<!-- [END OF MAIN] ---------------------------------------------------------->


<!-- [START OF FOOTER] ------------------------------------------------------>
<footer>

    <?php include("admin_assets/admin_htmlscripts/footerscript.html"); ?>

</footer>
<!-- [END OF FOOTER] -------------------------------------------------------->



<!-- [START CALL JQUERY SCRIPT FUNCTIONS] --------------------------------------------------------------->

<!-- javascript for random password -->
<script type='text/javascript' src='admin_assets/admin_javascript/randompassword.js'></script>

<!-- javascript for enable/disable option -->
<script src="admin_assets/admin_javascript/enabledisable.js" type="text/javascript"></script>

<!-- [END CALL JQUERY SCRIPT FUNCTIONS] ---------------------------------------------------------------->



</body>
<!-- [END OF BODY] --------------------------------------------------------------------------------------------->


</html>