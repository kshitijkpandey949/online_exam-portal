<?php
session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Administrative Login - Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>

</head>

<body>
<?php
include("header.php");
?>

<h1 class="text-center bg-danger">Adminstrative Login</h1>
<form name="form1" method="post" action="login.php">
<table class="table table-striped">
  <tr>
    <td width="106"><span class="style2"></span></td>
    <td width="132"><span class="style2"><span class="head1"><img src="o.jpg" width="70%" height="50%"></span></span></td>
   <br> <td width="50%"><table width="50%" border="0" align="left">
  <tr>
    <td width="20" class="style2">Login ID </td>
    <td width="100"><input class="form-control" name="loginid" type="text" id="loginid"></td>
  </tr>
  <tr>
    <td class="style2">Password</td>
    <td><input class="form-control" name="pass" type="password" id="pass"></td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td><input class="btn btn-primary" name="submit" type="submit" id="submit" value="Login"></td>
  </tr>
</table></td>
  </tr>
</table><br>

</form>

</body>
</html>
