<?php
    header('Content-Type:text/plain; charset=utf-8');

    $conn=mysqli_connect("localhost","hkh26","rudgns26!","hkh26");
    mysqli_query($conn,"set names utf8");

    $sql="SELECT * FROM drrobbine";
    $result=mysqli_query($conn,$sql);
    
    $app_num=mysqli_num_rows($result);

    for($i=0; $i<$app_num; $i++){
        $app=mysqli_fetch_array($result,MYSQLI_ASSOC);
        echo $app['no'];
        echo $app['name'];
        echo $app['email'];
        echo $app['introduce'];
    }
?>