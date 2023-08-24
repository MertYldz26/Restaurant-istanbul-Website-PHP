<!DOCTYPE html>

<html lang="tr">
<head>
    <meta charset="utf-8" />
    <title></title>
    <style>
        body {
            background-image: url("arka.png");
            background-repeat: repeat-x;
            background-color: rgb(20,9,9);
          
        }
        .ust {
            padding-left: 120px;
            padding-top: 10px;
        }
        .kutu2 {
            margin-top: 20px;
            width: 800px;
            height: 400px;
            margin-left: auto;
            margin-right: auto;
        }
        .logo img{
            float:left;

        }
        .banner img{
            width:400px;
        }
        .list li {
            margin-top:25px;
            list-style-image: url("image-a-53.png");
            float:left;
            margin-right:30px;
        }
        .list li a{
            color:#f1f1c1;
        }
        .alt{

        }
        .kutu {
            width: 800px;
            height: 600px;
            background-color: #f1f1c1;
            margin-left: auto;
            margin-right: auto;
            margin-top: -112px;
        }
        .menu{
            float:left;
            background-color:#ffcc99;
            width:200px;
            height:200px;
            margin-right:20px;
			margin-left:20px;
			margin-top:20px;
			margin bottom:300px;
        }
        .kucukmenu {
            background-color: #2b201e;
            width: 150px;
            height: 50px;
            margin: auto;
            margin-top: 10px;
            color: #f1f1c1;
            text-align:center;
            
        }
        .menu li {
            list-style-image: url("image-a-20.png");
            margin-bottom:10px;
        }
        .hakkinda {
            background-color: rgb(20,9,9);
            width: 540px;
            height: 550px;
            float: right;
            margin-top: 20px;
            margin-left: 5px;
            margin-right: 5px;
            text-align:center;
            color:#f1f1c1;
            
        }
        .hakkinda img{
            width:500px;
            height:300px;
        }
        .footer{
           background-color:white;
           width:700px;
           height:50px;
           margin-left:auto;
           margin-right:auto;
        }
        .footer img{
            width:700px;
            height:50px;
        }
        a:hover{
            color:#2b201e;
            background-color:#ffcc99;
        }
		.ab{
            background-color:#ffcc99;
            width:200px;
            height:200px;
			margin-top:40px;
		}
		.ka{
		  width:100px;
		}
    </style>
</head>
<body>
    <div class="kabuk">
        <div class="ust">
            <div class="kutu2">
            <div class="logo">
                <img src="logo.png"/>
            </div>
            <div class="banner">
                <img src="banner.jpg" />
            </div>
                <div class="list">
                    <ul>
                        <li><a href="#">Anasayfa</a></li>
                        <li><a href="#">Hakkımızda</a></li>
                        <li><a href="#">Menülerimiz</a></li>
                        <li><a href="#">Galeri</a></li>
                        <li><a href="#">İletişim</a></li>
                        <li><a href="#">Ziyaretçi Defteri</a></li>
                    </ul>

                </div>

            </div>
        </div>
        <div class="alt">
            <div class="kutu">
                <div class="menu">
                    <div class="kucukmenu">
                        MENÜ
                    </div>
                    <ul>
                        <li>Misyonuzmuz</li>
                        <li>Vizyonumuz</li>
                        <li>Kalite politikamız</li>
                        <li>Rezervazyon</li>
                    </ul>
					<div class="ab">
					
					<?php
error_reporting(0);
$msg="";
$kadi="Admin";
$sifre="12345";
if ($_POST){
$kadipost=$_POST["kullanici"];
$sifrepost=$_POST["sifre"];
if ($kadi==$kadipost and $sifre==$sifrepost){
session_start();
$_SESSION["cloud"]=$kadi;
header("location:ogrencipanel.php");    // header("refresh:2;url=ogrencipanel.php");
}
else $msg="Kullanıcı Adı veya Parola Hatalı";
}
else $msg="Formu Kullanın";
?>

<form action="" method="POST">
<table>
 <tr>
 <td>Kullanıcı Adı:</td>
 <td><input class="ka" type="text" name="kullanici"/></td>
 </tr>
 <tr>
 <td> Şifre:</td>
 <td> <input class="ka" type="password" name="sifre"/></td>
 </tr>
 <tr>
 <td></td>
 </tr>
 <tr>
 <td colspan="2"><?=$msg?></td>
 </tr>
 <tr>
 <td colspan="2" style="text-align:center;"><input type="submit" value="Giriş Yap"/>
 </td>
 </tr>
</table>
 </form>
					</div>
                </div>
                <div class="hakkinda">
                    <h3>Hakkımızda</h3>
                    <img src="1.png" />
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus efficitur, orci eget laoreet varius, sem nisl tincidunt leo, et placerat leo justo congue sapien. Praesent non congue urna. Aliquam congue, nisl ut vehicula lacinia, leo erat pharetra augue, vitae suscipit elit leo ut neque. Suspendisse sit amet posuere erat, a condimentum ipsum. Fusce mattis egestas magna id imperdiet. Pellentesque in nisi et ipsum dignissim convallis. Nunc finibus felis vel purus rutrum, eu hendrerit diam varius. Donec hendrerit sit amet ante at fringilla.
                </div>
            </div>
            <div class="footer">
                <img src="kredikart.png" />
            </div>
        </div>
    </div>
</body>
</html>