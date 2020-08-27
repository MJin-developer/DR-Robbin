<?php
    header('Content-Type:text/plain; charset=utf-8');

    $conn=mysqli_connect("localhost","hkh26","rudgns26!","hkh26");
    mysqli_query($conn,"set names utf8");

    $sql="SELECT * FROM drrobbine";
    $result=mysqli_query($conn,$sql);
    
    $app_num=mysqli_num_rows($result);

    $arr=$result;

    for($i=0; $i<$app_num; $i++){
        $app=mysqli_fetch_array($result,MYSQLI_ASSOC);
        echo '<br>'.$app['no'].'. ';
        echo '이름 : '.$app['name'].'<br>';
        echo ' 이메일 : '.$app['email'].'<br>';
        echo '    소개 : '.$app['introduce'].'<br>';
    }
?>