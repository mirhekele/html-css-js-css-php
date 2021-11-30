<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户登录</title>
</head>
<style type="text/css">
    *{
        padding: 0;
        margin: 0;
    }
    .one{
        text-align: center;
        padding: 100px;
        font-size: 30px;
    }
    .onee{

        width: 200px;
        height: 50px;
        border: 0px;
        outline: none;
        background-color: transparent;
        cursor: pointer;
        font-size: 30px;
        text-align: center;
        background: url("3.png") no-repeat scroll left center transparent;
        margin: 20px;
    }
    .onee:hover{
        background-color: turquoise;
    }

    .two:hover{
        background-color: turquoise;
        cursor: pointer;
    }
    .two{
        text-align: center;
        font-size: 30px;
        width: 200px;
        height: 50px;
        border: 0px;
        outline: none;
        background-color: transparent;
        background: url("4.png") no-repeat scroll left center transparent;
    }
    body{
        background-image: url("2.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 100%;
    }
    input{
        border-radius: 20px;
    }
</style>
<body>
<?php if (isset($_SESSION['yh']) && $_SESSION['yh'] == true) {
    header("location:yonghu.php"); ?>
<?php }else{?>
<form action="yonghu-dlpd.php" method="post">

<div class="one">
    <input type="text" class="onee"AutoComplete="off" placeholder="请输入账号" name="user">
    <br>
    <br>
    <input type="text" class="two"AutoComplete="off" placeholder="请输入密码" name="password">
    <br>
    <br>
    <input type="submit" value="登录"style="cursor: pointer;color: red;width: 50px;height: 30px"></input>
    <input type="button" class="signup"style="cursor: poin\
    ter;color: red;width: 50px;height: 30px"onclick="window.location.href='yonghu-zhuce.html'" value="注册">
</div>
</form>
<?php };?>
</body>
</html>
