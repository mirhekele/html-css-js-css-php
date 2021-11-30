<?php
session_start();
@$id=$_GET['book_num'];
include "mysql.php";
$sql="select * from book where book_num='{$id}'";
@$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
?>
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
    .one{
        margin-left: 50%;
        width: 90px;
        height: 40px;
        border-radius: 5px;
        color: black;
        background: #0066CC;
        font-size: 17px;
        outline: none;
        border: none;
        cursor: pointer;
    }
</style>
<body>
<?php
if (isset($_SESSION['yh'])&& $_SESSION['yh']==true){
?>
<h1 align="center">欢迎进入用户页面</h1>
<div class="aa">
    <table border="1" cellspacing="0" align="center">
        <tr>
            <td style="text-align: center;width: 100px;height: 30px">书籍编号</td>
            <td style="text-align: center;width: 100px;height: 30px">书籍名称</td>
            <td style="text-align: center;width: 100px;height: 30px">书籍作者</td>
            <td style="text-align: center;width: 100px;height: 30px">书籍数量</td>
            <td style="text-align: center;width: 100px;height: 30px">借出数量</td>
            <td style="text-align: center;width: 100px;height: 30px">剩余数量</td>
            <td style="text-align: center;width: 100px;height: 30px">图书位置</td>
        </tr>
        <tr>
            <td style="text-align: center;width: 100px;height: 30px"><?php echo $row['book_num']?></td>
            <td style="text-align: center;width: 100px;height: 30px"><?php echo $row['book_name']?></td>
            <td style="text-align: center;width: 100px;height: 30px"><?php echo $row['book_author']?></td>
            <td style="text-align: center;width: 100px;height: 30px"><?php echo $row['book_shu']?></td>
            <td style="text-align: center;width: 100px;height: 30px"><?php echo $row['book_jiechu']?></td>
            <td style="text-align: center;width: 100px;height: 30px"><?php echo $row['book_syu']?></td>
            <td style="text-align: center;width: 100px;height: 30px"><?php echo $row['book_position']?></td>
        </tr>
    </table>
    <a href="jieyue-pd.php?book_num=<?php echo $row['book_num']?>"><button class="one">确认借阅</button></a>
</div>
<?php }else{?>
    <?php
    header("location:yonghu-dl.php")?>
<?php };?>
</body>
</html>
