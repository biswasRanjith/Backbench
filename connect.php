<?php
require('connection.php');

session_start();
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['member_id'])){
 header("location:access-denied.php");
}
?>
<html><head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
</head><body bgcolor="tan">

<center><b><font color = "brown" size="6">Welcome User</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>User HOME </h1>
<a href="connect.php">Home</a> | <a href="manage-profile.php">Manage My Profile</a> | <a href="logout.php">Logout</a>
</div>
<div id="container">
<p>click a link above </p>
</div>
<div id="footer">
<div class="bottom_addr"></div>
</div>
</div>
</body></html>