<?php
    header('Content-Type:text/html; charset=utf-8');

    $name=$_POST['name'];
    $email=$_POST['email'];
    $introduce=$_POST['introduce'];

    $conn=mysqli_connect('localhost','hkh26','rudgns26!','hkh26');
    mysqli_query($conn,"set names utf8");

    $sql="INSERT INTO drrobbine(name,email,introduce) VALUES('$name','$email','$introduce')";
    $result= mysqli_query($conn,$sql);

    echo '<a href="./Main.html">홈페이지 돌아가기</a>';
        
?>