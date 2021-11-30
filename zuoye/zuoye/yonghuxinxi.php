<?php
session_start();
include "mysql.php";
@$sql="select * from yonghu_shuju order by num asc";
@$rows=array();
@$result=mysqli_query($link,$sql);
while ($row=mysqli_fetch_assoc($result)){
    $rows[]=$row;
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>
<style type="text/css">
    body{
        background-image: url("2.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 100%;
    }
    table{
        text-align: center;

        font-size: 20px;
    }
    a:hover{
        color: red;
    }
</style>
<body>
<?php
if (isset($_SESSION['already_login']) && $_SESSION['already_login'] == true) {
    ?>
    <h1 align="center">欢迎进入管理员页面</h1>
    <div class="one" align="center">
        <table border="1" cellspacing="0" align="center">
            <tr>
                <td style="text-align: center;width: 100px;height: 30px">编号</td>
                <td style="text-align: center;width: 100px;height: 30px">账户</td>
                <td style="text-align: center;width: 100px;height: 30px">密码</td>
                <td style="text-align: center;width: 100px;height: 30px">真实姓名</td>
                <td style="text-align: center;width: 100px;height: 30px">年龄</td>
                <td style="text-align: center;width: 100px;height: 30px">性别</td>
                <td style="text-align: center;width: 100px;height: 30px">手机号</td>
                <td style="text-align: center;width: 100px;height: 30px">邮箱</td>
            </tr>
            <?php
            foreach ($rows as $value) {
            ?>
            <tr>
                <td style="text-align: center;width: 100px;height: 30px"><?php echo $value['num']?></td>
                <td style="text-align: center;width: 100px;height: 30px"><?php echo $value['user']?></td>
                <td style="text-align: center;width: 100px;height: 30px"><?php echo $value['password']?></td>
                <td style="text-align: center;width: 100px;height: 30px"><?php echo $value['name']?></td>
                <td style="text-align: center;width: 100px;height: 30px"><?php echo $value['age']?></td>
                <td style="text-align: center;width: 100px;height: 30px"><?php echo $value['gender']?></td>
                <td style="text-align: center;width: 100px;height: 30px"><?php echo $value['phone']?></td>
                <td style="text-align: center;width: 100px;height: 30px"><?php echo $value['mail']?></td>
                <?php
                }
                ?>
            </tr>
        </table>
        <a href="guanliyuan.php" style="text-decoration: none;font-size: 30px;">点击返回管理页面</a>
    </div>
<?php }else{
    header("location:guanliyuan-dl.php");
}?>
</body>
</html>