<?php
echo "<meta charset='UTF-8'>";
include "mysql.php";
@$name=$_POST['name'];
@$author=$_POST['author'];
@$number=$_POST['number'];
@$position=$_POST['position'];
if ($name==""||$author==""||$number==""||$position==""){
    echo "<script>alert('请输入书籍信息')</script>";
    header("refresh:0.1;url=tushuluru.php");
}else {
        $sql="insert into book('book_name','book_author','book_shu','book_position') values {'{$name}','{$author}',{$number},'{$position}'}";
        mysqli_query($link,$sql);
        $row = mysqli_affected_rows($link);
        if ($row==0) {
            echo "<script>alert('录入失败')</script>";
            header("refresh:0.1;url=tushuluru.php");
        } else {
            echo "<script>alert('录入成功!')</script>";
            header("refresh:0.1;url=tushuluru.php");
        }
    }

?>