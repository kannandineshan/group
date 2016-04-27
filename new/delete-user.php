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
        <h2><span style="text-decoration: underline;"> Add User details: </span></h2>

        <!-- start id-form -->
        <form id="deleteform" action='' method='post'>

            <label>Sr. #</label>

            <label>Login Name</label>

            <label>First Name</label>

            <label>Surname</label>

            <label>Child Matched?</label>

            <label>Child Gender</label>

            <label>Child Date of Birth</label>

            <label>Options</label>

            <?php

            $result = getAllRegisteredUsers();

            if(mysqli_num_rows($result)>0)  {

            $counter = 0;
            while ($row=  mysqli_fetch_array($result))
            {
            $counter++;
            ?>

            <label><?php echo $counter; ?></label>
                <label><?php echo $row['vol_email']; ?></label>
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