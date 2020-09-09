<?php

session_start();

if(isset($_GET['nick']))
{
    $nick=$_GET['nick'];
    $content=$_GET['content'];

    $data=json_encode([$nick,$content]);
    $_SESSION['show']=$data;
}

var_dump($_SESSION);
?>




<!DOCTYPE html>
<html> lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Test</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
        <div>
            <h1 style="font-size: 400%; text-align: center;">表白墙</h1>
        </div>

        <div class="div-tijiao">
            <h2 style="text-align: center">发布内容区域</h2>
            <form action="">
                <p>
                    昵称：
                    <input type="text" name="nick" value="">
                </p>
                <p>
                    内容：
                    <textarea name="content" rows="5" cols="23"></textarea>
                </p>
                <button>
                    提交
                </button>
            </form>
        </div>
        <div>
            <h2 style="text-align: center">内容展示区域</h2>
            <div id="show" class="show">

            </div>
        </div>
    <!-- <script src="./js/index.js"></script> -->
</body>

</html>

<?php
           $data = $_SESSION['bbq'];
           $bbq_obj = json_decode($data);
        
            echo $bbq_obj[0];
            echo "---";
            echo $bbq_obj[1];
    ?>