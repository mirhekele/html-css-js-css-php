<?php
session_start();
include "mysql.php";
@$sql="select * from book order by book_num asc";
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
</style>
<body>
<?php
if (isset($_SESSION['yh']) && $_SESSION['yh'] == true) {
?>
<h1 align="center">欢迎进入用户页面</h1>
<div class="one">
    <table border="1" cellspacing="0" align="center">
               <tr>
                   <td style="text-align: center;width: 100px;height: 30px">书籍编号</td>
                   <td style="text-align: center;width: 100px;height: 30px">书籍名称</td>
                   <td style="text-align: center;width: 100px;height: 30px">书籍作者</td>
                   <td style="text-align: center;width: 100px;height: 30px">书籍数量</td>
                   <td style="text-align: center;width: 100px;height: 30px">借出数量</td>
                   <td style="text-align: center;width: 100px;height: 30px">剩余数量</td>
                   <td style="text-align: center;width: 100px;height: 30px">图书位置</td>
                   <td style="text-align: center;width: 100px;height: 30px">操作</td>
               </tr>
        <?php
        foreach ($rows as $value) {
        ?>
        <tr>
            <td style="text-align: center;width: 100px;height: 30px"><?php echo $value['book_num']?></td>
            <td style="text-align: center;width: 100px;height: 30px"><?php echo $value['book_name']?></td>
            <td style="text-align: center;width: 100px;height: 30px"><?php echo $value['book_author']?></td>
            <td style="text-align: center;width: 100px;height: 30px"><?php echo $value['book_shu']?></td>
            <td style="text-align: center;width: 100px;height: 30px"><?php echo $value['book_jiechu']?></td>
            <td style="text-align: center;width: 100px;height: 30px"><?php echo $value['book_syu']?></td>
            <td style="text-align: center;width: 100px;height: 30px"><?php echo $value['book_position']?></td>
            <?php
            echo"<td><a href='jieyue.php?book_num=".$value['book_num']."' style='font-size: 17px;display: block;text-align: center;padding: 0px;margin: 0px;'>借阅</a></td>";
            }
            ?>
            </tr>
    </table>
</div>
<?php }else{?>
    <?php
    header("location:yonghu-dl.php")?>
<?php };?>
</body>
</html>