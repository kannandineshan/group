
<?php
function show_admin_home(){

$htmlpage = <<< HTMLPAGE
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

HTMLPAGE;
print $htmlpage;
}
?>

