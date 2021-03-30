<?php
include ("library.php");
if(empty($_SESSION['id_user'])){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
navbarindex();
modallogin();
?>
<div class="container">
        <div class="jumbotron">
            <h2>TUTORIAL JAGOCODING</h2>
            <p>BELAJAR TERUS YAH<small>semangat</small></p>
        </div>
<?php
register();

footer();
?>
</div>
</body>
</html>
<?php
}
else
{
header("Location:home.php");
}
?><span style="line-height: 1.428571429; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;"> </span>
