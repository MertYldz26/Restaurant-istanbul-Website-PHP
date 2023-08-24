<html>
<head>
<meta charset="utf-8">
<style>
.cls1{
font-size:14px;
font-family:Verdana;
color:#f00;
font-weight:bold;
}
.mesaj{
	color:#f00;
	font-size:11px;
	font-weight:bold;
	font-family:verdana;
	width:300px;
	padding:20;
}
</style>
</head>
<body>
<?php
session_start();
if (isset($_GET["islem"]) && $_GET["islem"]=="cikis"){
session_destroy();
header("location:index.php");
}
if (isset($_SESSION["cloud"])) {
?>
<p><span class="cls1"><?=$_SESSION["cloud"]?></span> Kullanıcı İle Oturum Açılmıştır</p>
<p><a class="cls1"href="?islem=cikis">Oturum Kapat</a></p>
<?php
if (isset($_COOKIE["durum"])) {
	
}
else 
{
?>
<?php
	session_destroy();
	
}

?>
</body>
<?php
}
else header("location:index.php");
?>
</html>
