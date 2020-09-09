<?php
    echo "hellowrold!";
    $name = "abc";  //变量命名规则和js差不多
//   这里是注释
//数据类型有很多：整型，浮点型，数组等
    echo $name;
//    变量都必须加上美元符号$

    $day = date("w");
    if ($day == 1) {
        echo ("今天星期一！");
    } elseif ($day == 2) {
        echo ("今天星期二！");
    } elseif ($day == 3) {
        echo ("今天星期三！");
    }elseif ($day == 4) {
        echo ("今天星期四！");
    }elseif ($day == 5) {
        echo ("今天星期五！");
    }elseif ($day == 6) {
        echo ("今天星期六！");
    }elseif ($day == 7) {
        echo ("今天星期日！");
    }

    switch ($day){
        case 1:
            echo ("今天星期一！");
            break;
        case 2:
            echo ("今天星期二！");
            break;
        case 3:
            echo ("今天星期三！");
            break;
        case 4:
            echo ("今天星期四！");
            break;
        case 5:
            echo ("今天星期五！");
            break;
        case 6:
            echo ("今天星期六！");
            break;
        case 7:
            echo ("今天星期天！");
            break;
    }


//    两种判断方式
//  break语句就是用来跳出循环或者判断