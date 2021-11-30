<?php
    $host="127.0.0.1";
    $dbuser="root";
    $dbpassword="root";
    $dbname="library";
    $link=mysqli_connect($host,$dbuser,$dbpassword,$dbname);
    if (mysqli_connect_errno()){
        echo "数据库连接失败，原因为:".mysqli_connect_error();
    }
?>