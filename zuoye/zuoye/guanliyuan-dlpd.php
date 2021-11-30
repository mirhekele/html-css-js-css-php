<?php
session_start();
 echo '<meta charset="UTF-8">';
include "mysql.php";
@$user=$_POST['user'];
@$password=$_POST['password'];
if ($user || $password != ""){
    $sql="select user,password from guanliyuan_shuju where user='{$user}' and password='{$password}'";
    @$result=mysqli_query($link,$sql);
    $row=mysqli_num_rows($result);
    if ($row == 0){
        $_SESSION['already_login']=false;
        header("refresh:0.2;url=guanliyuan-dl.php");

    }else{
        $_SESSION['already_login']=true;
        header("location:guanliyuan.php");
    }
}else{
    echo "<script>alert('用户名或密码为空，请重新输入')</script>";
    header("refresh:0.1;url=guanliyuan-dl.php");
}
?>