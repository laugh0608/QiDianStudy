<?php
ini_set("display_errors","on");
    $dbms='mysql';
    $host='localhost';
    $dbName='test';
    $user='test';
    $pass='test';
    $dsn="$dbms:host=$host;dbname=$dbName";

/** @var TYPE_NAME $user */
$pdo = new PDO($dsn, $user, $pass);
    $res = $pdo->query("select * from students")->fetchAll();
    //$res = $pdo->exec("INSERT INTO students (id, name, male) values(5,'nink','1')");
    var_dump($res);

