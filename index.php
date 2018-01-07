<html><head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/user.js">
</script>
</head><body bgcolor="tan">

<center><b><font color = "brown" size="6">Assignment One</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>User Login </h1>
<div class="news"><marquee behavior="alternate">Backbench Assignment </marquee></div>
</div>
<div id="container">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<form name="form1" method="post" action="checklogin.php" onSubmit="return loginValidate(this)">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="tan">
<tr>
<td width="78">Email</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="checkbox" name="remember" value="1" id="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> /></td>
<td><b><font color="red" size="2">Remember me</font></b></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<center>
<br>Not yet registered? <a href="register.php"><b>Register Here</b></a>
</center>
</div>
<div id="footer">
<div class="bottom_addr"></div>
</div>
</div>
</body></html>