<?php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>practice makes a man perfect</title>
<link rel="stylesheet" href="../css/style.css" />
<style>
#cont{ height:400px; width:79.5%;left:20%; right:20%; top:200px; position:absolute; border:2px solid # 0FF; background-color: #666;}
</style>
</head>

<body>
<div id="logo">
<img src="../img/green.jpg" alt="kola" height="150px" width="100%" />
</div>
<div id="ban">
<img src="../img/green1.jpg" alt="kola" height="150px" width="100%" />
</div>
<div id="menu"> </div>
<div id="lsb"> 
<a href=""><p> Home </p></a>
<p> contact </p>
<p> aboutus </p>
<p> <a href="model/stdform.php">Signup</a> </p>

</div>

<div id="cont">
<?php
include("../view/alluser.php");
?>
</div>



</body>
</html>
