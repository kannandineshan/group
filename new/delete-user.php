
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

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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





        <!-- start content-outer ........................................................................................................................START -->
        <div class="container">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Sr. #</th>
                    <th>Login Name</th>
                    <th>First Name</th>
                    <th>Surname</th>

                    <th>Child Matched?</th>
                    <th>Child Gender</th>
                    <th>Child Date of Birth</th>

                    <th>Options</th>
                </tr>
                </thead>
                <?php

                $result = getAllRegisteredUsers();

                if(mysqli_num_rows($result)>0)                                                {

                    $counter = 0;
                    while ($row=  mysqli_fetch_array($result))
                    {
                        $counter++;
                        ?>
                        <tbody>
                        <tr>
                            <td><?php echo $counter; ?></td>
                            <td><?php echo $row['vol_email']; ?></td>
                            <td><?php echo $row['vol_firstname']; ?></td>
                            <td><?php echo $row['vol_surname']; ?></td>
                            <td><?php
                                if($row['vol_child_matched']==1){
                                    echo "Yes";
                                }
                                else{
                                    echo "No";
                                }
                                ?></td>
                            <td><?php
                                if($row['vol_child_matched']==1){
                                    echo $row['vol_child_gender'];
                                }
                                else{
                                    echo "/";
                                }?></td>
                            <td><?php
                                if($row['vol_child_matched']==1) {
                                    echo $row['vol_child_dob'];
                                }
                                else{
                                    echo "/";
                                }?></td>
                            <td>
                                <a href="edit-user.php?vol_email=<?php echo $row['vol_email']; ?>" style="color:green;">Edit</a>
                                &nbsp;&nbsp;&nbsp;<a href="?vol_email=<?php echo $row['vol_email']; ?>" style="color:red;">Delete</a>
                            </td>

                        </tr>
                        </tbody>
                        <?php

                    }//end of for loop
                }//end if statement
                ?>

            </table>

        </div>
        <!--  end content-outer........................................................END -->




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