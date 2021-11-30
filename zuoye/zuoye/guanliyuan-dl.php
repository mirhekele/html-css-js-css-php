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
        cursor: pointer;
    }
    .two:hover{
        background-color: turquoise;

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
    .m:hover{
        cursor: pointer;
        color: red;
    }
    .n:hover{
        cursor: pointer;
        color: red;
    }
    input{
        border-radius: 20px;
    }
</style>
<body>
<?php if (isset($_SESSION['already_login']) && $_SESSION['already_login'] == true) {
    header("location:guanliyuan.php"); ?>
<?php }else{?>
<form action="guanliyuan-dlpd.php" method="post">
<div class="one">
    <input type="text"class="onee" placeholder="请输入账号" style=" color: #4a4a4a" name="user"AutoComplete="off">
    <br>
    <br>
    <input type="text" class="two" placeholder="请输入密码" style="color: #4a4a4a"name="password"AutoComplete="off">
    <br>
    <br>
    <input type="button" class="n" onclick="window.location.href='library-zhuye.html'"value="返回主页">
    <input type="submit"class="m" value="登录">
    <hr>
    <p>该页面下不可注册！</p>
</div>
</form>
<?php };?>
</body>
</html>


