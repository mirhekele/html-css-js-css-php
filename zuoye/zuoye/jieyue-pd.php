<?php
session_start();
echo "<meta charset='UTF-8'>";
@$id=$_GET['book_num'];
include "mysql.php";
if (isset($_SESSION['yh'])&& $_SESSION['yh']==true) {
    $sql="select book_syu from book where book_num='{$id}'";
    $result=mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($result);
    if ($row['book_syu']==0){
        echo "<script>alert('该图书已被借完，请等待管理员录入')</script>";
        header("refresh:0.1;url=yonghu.php");
    }else{
    $sql = "update book set book_jiechu=book_jiechu+1,book_syu=book_syu-1 where book_num='{$id}'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_affected_rows($link);
    echo "<script>alert('借阅成功！')</script>";
    header("refresh:0.1;url=yonghu.php");

}}else{
    header("location:yonghu-dl.php");
}
?>