<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理员登录</title>
</head>
<style type="text/css">

    body{
        background-image: url("2.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 100%;
        text-align: center;
        padding-top: 100px;
    }
     .one{
         color: red;
     }
    a{
        text-decoration: none;
    }
</style>
<body>
<?php
if (isset($_SESSION['already_login']) && $_SESSION['already_login'] == true) {
    ?>
<h1>欢迎进入管理员页面</h1>
    <a href="tushuluru.php" style="font-size: 20px"class="one">图书录入</a>
  <br/>
    <br/>
    <a href="yonghuxinxi.php" style="font-size: 20px"class="one">用户信息</a>
<br>
<br>
<br>
    <a href="library-zhuye.html" style="text-decoration: none;font-size: 30px;">点击返回主页面</a>
<hr>
<p>其他功能暂未开启，敬请期待！</p>
<?php }else{?>
<?php
header("location:guanliyuan-dl.php")?>
<?php };?>
</body>
</html>
