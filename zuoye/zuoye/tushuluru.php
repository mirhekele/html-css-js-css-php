<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>图书管理系统</title>
</head>
<style type="text/css">
    *{
        padding: 0;
        margin: 0;
    }
    body{
        background: url("2.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 100%;
        text-align: center;
    }
    .one{
        padding-left: 250px;
        margin-top:150px;
    }
    .c{
        background-color:transparent;
        border-style:none;
        cursor:pointer;
        font-size: 20px;
    }
    .c:hover{
        color: red;
    }
    a:hover{
        color: red;
    }
</style>
<body>
<?php
if (isset($_SESSION['already_login']) && $_SESSION['already_login'] == true) {
?>
<form action="tushuluru-pd.php" method="post">
<div class="one">
    <table border="1" cellspacing=0>
        <tr>
            <td width=100 height=20 style="text-align: center">书名</td>
            <td width=100 style="text-align: center">作者</td>
            <td width=100 style="text-align: center">录入数量</td>
            <td width=100 style="text-align: center">录入位置</td>
            <td width=100 style="text-align: center">操作</td>
        </tr>
        <tr>
            <td width=100 height=40><input type="text" style="height: 40px" name="name" AutoComplete="off"></td>
            <td width=100><input type="text" style="height: 40px" name="author" AutoComplete="off"></td>
            <td width=100><input type="text" style="height: 40px" name="number" AutoComplete="off"></td>
            <td width=100><input type="text" style="height: 40px" name="position" AutoComplete="off"></td>
            <td width=100 style="text-align: center"><input type="submit"class="c" value="确定"></td>
        </tr>
    </table>
</div>
    <a href="guanliyuan.php" style="text-decoration: none;font-size: 30px;">点击返回管理页面</a>
</form>
<?php }else{?>
    <?php
    header("location:guanliyuan-dl.php")?>
<?php };?>
</body>
</html>
