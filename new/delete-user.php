
<?php
/**
 * Created by PhpStorm.
 * User: chukwudiezekwesili
 * Date: 29/03/2016
 * Time: 13:42
 */
//THIS PAGE IS DESTINATION FOR ADMIN WHEN LOGGED IN AND TRYING TO ACCESS INDEX.PHP, AND WHEN CLICKING LINKS LEADING HERE
include 'functions.php';
//If no session exists, admin is sent to index.php
session_start();
if(!isset($_SESSION['ad_email'])){
    header("Location: index.php");
}


//I DO NOW UNDERSTAND WHAT THIS DOES...
if(isset($_GET['vol_email']))
{
    $login_name=$_GET['vol_email'];

    $result = getUser($login_name);
    $row = mysqli_fetch_array($result);
    $imageurl = $row['imageurl'];
    if(file_exists($imageurl))
    {

        unlink($imageurl);

    }
    deleteUser($login_name);
    // header("location: delete-user.php");
}


?>





<!DOCTYPE html>

<html lang="en">

<!-- [START OF HEAD] --------------------------------------------------------------------------------------------->
<head>
    <!-- CHARACTER ENCODING -->
    <meta charset="UTF-8">

    <!-- WINDOW TAB TITLE -->
    <title>Delete Volunteer</title>

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
        <h1>Delete Volunteer</h1>
    </div>
    <!--  end page-title -->

    <!--  start table-content  -->
    <div id="table-content">
        <h2><span style="text-decoration: underline;"> Volunteer details: </span></h2>

        <!-- start id-form -->
        <form id="deleteform" action='' method='post'>


            <label><span style="text-decoration: underline;"> Login Name</span></label>

            <label></label>

            <label><span style="text-decoration: underline;"> First Name</span></label>

            <label><span style="text-decoration: underline;"> Surname</span></label>

            <label><span style="text-decoration: underline;"> Child Matched?</span></label>

            <label><span style="text-decoration: underline;"> Child Gender</span></label>

            <label><span style="text-decoration: underline;"> Child Date of Birth</span></label>

            <label><span style="text-decoration: underline;"> Options</span></label>

            <?php

            $result = getAllRegisteredUsers();

            if(mysqli_num_rows($result)>0)  {

            $counter = 0;
            while ($row=  mysqli_fetch_array($result))
            {
            $counter++;
            ?>
<div>


                <label><?php echo $row['vol_email']; ?></label>
    <label></label>
                    <label><?php echo $row['vol_firstname']; ?></label>
                        <label><?php echo $row['vol_surname']; ?></label>
                            <label><?php
                    if($row['vol_child_matched']==1){
                        echo "Yes";
                    }
                    else{
                        echo "No";
                    }
                    ?></label>
                                <label><?php
                    if($row['vol_child_matched']==1){
                        echo $row['vol_child_gender'];
                    }
                    else{
                        echo "/";
                    }?></label>
                                    <label><?php
                    if($row['vol_child_matched']==1) {
                        echo $row['vol_child_dob'];
                    }
                    else{
                        echo "/";
                    }?></label>
                                        <label>
                    <a href="edit-user.php?vol_email=<?php echo $row['vol_email']; ?>" style="color:green;">Edit</a>
                    &nbsp;&nbsp;&nbsp;<a href="?vol_email=<?php echo $row['vol_email']; ?>" style="color:red;">Delete</a>
                                        </label>

</div>
                <?php

            }//end of for loop
            }//end if statement
            ?>


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