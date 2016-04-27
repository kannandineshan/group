<?php


//THIS PAGE PRESENTS ADMIN WITH A FORM TO CHANGE DATA ABOUT VOLUNTEERS, IT IS LINKED TO/FROM DELETE-USER

//important functions are here
include 'functions.php';

//without login session, the admin is sent back to index.php
session_start();
if(!isset($_SESSION['ad_email'])){
    header("Location: index.php");
}


//I DON'T WANNA TOUCH THIS NEXT BIT...
if(isset($_POST['update']))
{

    updateUser();
    header("location: delete-user.php");
}
elseif(isset($_GET['vol_email']))
{
    $user_login=$_GET['vol_email'];
    $result = getUser($user_login);
    $row = mysqli_fetch_array($result);
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
        <h1>Edit Volunteers</h1>
    </div>
    <!--  end page-title -->

    <!--  start table-content  -->
    <div id="table-content">
        <h2><span style="text-decoration: underline;"> Add User details: </span></h2>

        <!-- start id-form -->
        <form method="post" enctype="multipart/form-data">

            <div>
                <label for="firstname">Firstname:</label>
                <input name="firstName" type="text" class="inp-form" value="<?php echo $row['vol_firstname']; ?>" />
            </div>
            <br>
            <div>
                <label for="surname">Surname:</label>
                <input name="surName" type="text" class="inp-form" value="<?php echo $row['vol_surname']; ?>" />

            </div>
            <br>
            <div>
                <label for="email">Login Name:</label>
                <input name="user_login_prev" type="hidden" value="<?php echo $row['vol_email'] ?>" />
                <input name="loginName" type="text" class="inp-form" value="<?php echo $row['vol_email']; ?>" />
            </div>
            <br>
            <div>
                <!-- added field for random password -->
                <label for="pass">Password:</label>
                <input name="password" type="password" class="inp-form" value="<?php echo $row['vol_password']; ?>" />
                <div>
                    <br>
                    <div>
                        <label>Currently matched with a child?</label>
                        <?php
                        if ($row['vol_child_matched']==true){
                            ?>
                            <input type="radio" name="child_matched" value=true checked id="yes" >Yes
                            <input type="radio" name="child_matched" value=false id="no" >No
                            <?php
                        }
                        else if ($row['vol_child_matched']==false){
                            ?>

                            <input type="radio" name="child_matched" value=true id="yes">Yes
                            <input type="radio" name="child_matched" value=false checked id="no">No
                            <?php
                        }
                        ?>

                        <div id="childinfo" style="display: none;">
                            <br>
                            <div>
                                <label for="gender">Child's gender:</label>
                                <?php
                                if ($row['vol_child_gender']=="male"){
                                    ?>
                                    <input type="radio" name="child_gender" value="male" class="disabledelements" id="gender" required checked >Male
                                    <input type="radio" name="child_gender" value="female" class="disabledelements" id="gender" required>Female
                                    <input type="radio" name="child_gender" value="other" class="disabledelements" id="gender" required>Other
                                    <?php
                                }else if ($row['vol_child_gender']=="female"){
                                    ?>
                                    <input type="radio" name="child_gender" value="male" class="disabledelements" id="gender" required>Male
                                    <input type="radio" name="child_gender" value="female" class="disabledelements" id="gender" required checked>Female
                                    <input type="radio" name="child_gender" value="other" class="disabledelements" id="gender" required>Other
                                    <?php
                                }else if ($row['vol_child_gender']=="other"){
                                    ?>
                                    <input type="radio" name="child_gender" value="male" class="disabledelements" id="gender" required>Male
                                    <input type="radio" name="child_gender" value="female" class="disabledelements" id="gender" required>Female
                                    <input type="radio" name="child_gender" value="other" class="disabledelements" id="gender" required checked>Other
                                    <?php
                                }else {
                                    ?>
                                    <input type="radio" name="child_gender" value="male" class="disabledelements" id="gender" required>Male
                                    <input type="radio" name="child_gender" value="female" class="disabledelements" id="gender" required>Female
                                    <input type="radio" name="child_gender" value="other" class="disabledelements" id="gender" required>Other
                                    <?php
                                }
                                ?>
                            </div>
                            <br>
                            <div>
                                <label for="dateofbirth">Child's date of birth:</label>
                                <input  type="date" class="disabledelements" name="date_of_birth" id="dateofbirth" value="<?php echo $row['vol_child_dob']; ?>"  required>
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