<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="Login/style.css"/>
<link rel="stylesheet" href="Style/style.css" type="text/css" media="screen" />
<div id="main wrapper" align="center">
<div id="Page_header">
<link href="css/bootstrap.css" rel="stylesheet">                            
<table width="1500" height="" border="0">
  <tr>
    <td colspan="8" bgcolor="#B50416" height="35"><font size="+1">Kenya Motors Tel:0710871782 Email: kmotors@gmail.com</font></td>
  </tr>
  <tr>
    <td height="45" colspan="8"  bgcolor="#000000">&nbsp;</td>
 </tr>
    <tr>
<!--        <div style="float:right ;position: relative;top: 50px;">
                                <form class="navbar-form pull-right" action="system_login.php" method="POST" style="float: right;margin-right: 20px">
                                    <input type="text" placeholder="username" name="username" class="input-small"/>
                                    <input type="password" placeholder="Password" name="password" class="input-small"/>
                                    <input type="hidden"  name="submit_" class="input-small"/>
                                    <button class="btn" type="submit">Login</button>
                                </form>

        </div>-->
      
    </tr>
  <tr bgcolor="#333333" bordercolor="#333333">
    <td width="190" align="center" bgcolor="#333333">&nbsp;</td>
    <td width="116" height="55" bgcolor="#333333" align="center"><a href="index.php"><font color="#FFFFFF">HOME</a></td>
    <td width="120" bgcolor="#333333" align="center"><a href="services.php"><font color="#FFFFFF">SERVICES</font></a></td>
    <td width="148" bgcolor="#333333" align="center" ><a href="appointment.php"><font color="#FFFFFF">APPOINTMENT</font></a></td>
  <td width="100" bgcolor="#333333" align="center"><a href="#"><font color="#FFFFFF">STORE</font></a></td>
  <td width="114" bgcolor="#333333" align="center"><a href="about.php"><font color="#FFFFFF">ABOUT US</font></a></td>
  <td width="139" bgcolor="#333333" align="center"><a href="contact.php"><font color="#FFFFFF">CONTACT US</font></a></td>
    <td width="1474" bgcolor="#333333" align="center">&nbsp;</td>
  </tr>
</table>
<div id="pagecontent" align="center">
  <p>&nbsp;</p>
  <p>KENYA MOTORS</p>
  <p><img class="imgl" src="file:///A|/stage3 sem2/Projo/kiplooo/Waitittu/Logo/Logo2.gif" alt="" width="245" height="256" align="left" /></p>
  <div id="form" align="center">
  <form action="system_login.php" method="POST">
  <h1> Log in</h1>
  <div class="inset">
  <p>
    <label for="email">User name</label>
    <input type="text" name="username" id="username">
  </p>
  <p>
    <label for="password"> PASSWORD</label>
    <input type="password" name="password" id="password">
     <p align="right">&nbsp;</p>
  <p>&nbsp;  </p>
  </div>
  <p class="p-container">
    <input type="submit" name="go" id="go" value="Log in">
    <a href="Registration.php">Create new account.</a></p>
</form>
</div>
</div>
</div>
<div id="pagefooter">
<?php include './footer.php';?>

</div>
</body>
</html>