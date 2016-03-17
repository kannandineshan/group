
<?php
function show_admin_home(){

$htmlpage = <<< HTMLPAGE
<!DOCTYPE html>

<html lang="en">

<!-- [START OF HEAD] --------------------------------------------------------------------------------------------->
<head>
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




<!-- [START OF HEADER] ------------------------------------------------------------------------------------------->
<header>

    <!-- TOP PAGE BANNER -->
    <section class="container" id="bannercontainer"></section>

    <!-- NAVIGATION -->
    <nav>
        <ul>
            <li><a class="active" href="#">Home</a></li>
            <li class="dropdown"><a href="#" class="dropbtn">User Login Setup</a>
                <div class="dropdown-content">
                    <a href="#">Create User Login</a>
                    <a href="#">Delete User Login</a>
                </div>
            </li>
            <li class="dropdown"><a href="#" class="dropbtn">Report</a>
                <div class="dropdown-content">
                    <a href="#">Generate Report</a>
                    <a href="#">Delete Report</a>
                </div>
            </li>
            <li style="float:right"><a href="#">Logout</a></li>
            <li style="float:right" ><a href="#">My Account</a></li>
        </ul>
    </nav>
</header>
<!-- [END OF HEADER] ---------------------------------------------------------------------------------------------->





</body>
</html>

HTMLPAGE;
print $htmlpage;
}
?>

