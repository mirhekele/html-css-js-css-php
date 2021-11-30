<?php
session_start();
echo '<meta charset="UTF-8">';
include "mysql.php";
@$user=$_POST['user'];
@$password=$_POST['password'];
if ($user || $password != ""){
    $sql="select user,password from yonghu_shuju where user='{$user}' and password='{$password}'";
    $result=mysqli_query($link,$sql);
    $row=mysqli_num_rows($result);
    if ($row == 0){
        $_SESSION['yh']=false;
        header("refresh:0.2;url=yonghu-dl.php");
        echo "<script>alert('用户名或密码错误，请重新输入')</script>";
    }else{
        $_SESSION['yh']=true;
        echo "登录成功，即将跳转！";
        header("location:yonghu.php");
    }
}else{
    echo "<script>alert('用户名或密码为空，请重新输入')</script>";
    header("refresh:0.1;url=yonghu-dl.php");
}
?>