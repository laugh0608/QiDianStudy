<?php

$u_name = $_POST['u_name'];
$u_password = $_POST['password'];
if (!isset($u_password)){
    die("没有输入密码");
}

$servername = "localhost";
$username = "test";
$password = "test";
$dbname = "bbq";

// 创建连接
$conn = new mysqli($servername, $username, $password,$dbname);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
//$sql = "SELECT * FROM user";

if ($_POST['action'] == "sign_up"){
    $sql = "INSERT INTO user (name,password) VALUES ('{$u_name}','{$u_password}')";
    $res = $conn -> query($sql);
    if ($res){
        echo "注册成功";
    }else{
        echo "注册失败";
    }
}

if ($_POST['action'] == "login"){
    $sql = "SELECT * FROM user WHERE name = '{$u_name}' and password = '{$u_password}'";

    $res = $conn -> query($sql)->fetch_all();
    if ($res){
        echo "登录成功";
    }else{
        echo "密码错误或未注册";
    }
}
