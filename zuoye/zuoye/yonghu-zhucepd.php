<?php
echo "<meta charset='UTF-8'>";
include "mysql.php";
@$user=$_POST['user'];
@$password=$_POST['password'];
@$password1=$_POST['password1'];
@$name=$_POST['name'];
@$age=$_POST['age'];
@$gender=$_POST['gender'];
@$phone=$_POST['phone'];
@$mail=$_POST['mail'];
if ($user == "" || $password == "" || $password1==""|| $name == "" || $age == "" || $gender == "" || $phone == "" || $mail == ""){
    echo "<script>alert('信息输入不完整，请重新输入')</script>";
    header("refresh:0.1;url=yonghu-zhuce.html");
}else {
    $sql = "select user from yonghu_shuju where user = '{$user}'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_num_rows($result);
    if ($row != 0) {
        echo "<script>alert('用户名已被占用，请重新输入')</script>";
        header("refresh:0.1;url=yonghu-zhuce.html");
    } else {
        if (strlen($_POST["password"])<6) {
            echo "<script>alert('密码要六位以上，请重新输入')</script>";
            header("refresh:0.1;url=yonghu-zhuce.html");
        } else {
            if ($password != $password1) {
                echo "<script>alert('两次密码不一致，请重新输入')</script>";
                header("refresh:0.1;url=yonghu-zhuce.html");
            } else {
                $sql = "select phone from yonghu_shuju where phone = '{$phone}'";
                $result = mysqli_query($link, $sql);
                $rows = mysqli_num_rows($result);
                if ($rows != 0) {
                    echo "<script>alert('该手机号已注册，请重新输入')</script>";
                    header("refresh:0.1;url=yonghu-zhuce.html");
                } else {
                        $sql = "insert into yonghu_shuju values ('{$user}',{$password},'{$name}',{$age},'{$gender}',{$phone},'{$mail}')";
                        mysqli_query($link, $sql);
                        $row = mysqli_affected_rows($link);
                        if ($row != 0) {
                            echo "<script>alert('注册成功，点击确定返回登陆界面')</script>";
                            header("refresh:0.1;url=yonghu-dl.php");
                        } else {
                            echo "<script>alert('注册失败，请重新尝试')</script>";
                            header("refresh:0.1;url=yonghu-zhuce.html");
                        }
                    }
                }
            }
        }

}
?>