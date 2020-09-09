    //      var i = 1;
    //        alert(i);

    //    var passward = prompt("请输入密码：");
    //        if(passward != "123456789"){
    //            alert("密码错误！");
    //            location.reload();
    //        }else{
    //            alert("密码正确，欢迎访问！")；
    //        }
    
    //        while (prompt("请输入密码:") != "123") {
    //            alert("密码错误！请重新输入！");
    //        }
    //
    //        var n = 0;
    //        var add = prompt("请输入要累加的数字(必须是整数）：");
    //        add = parseFloat(add);
    //        for (i = 1; i < add + 1; i++) {
    //            n = n + i;
    //        }
    //        alert(n);

    // do {
    // var passwd = prompt("输入密码")；
    // } while (passwd = "");

    // function isCorrect() {
    //     var passwd = prompt("请输入密码：");
    //     if (passwd != 123) {
    //         alert("密码错误！");
    //         return;
    //     }
    // }
    //
    // isCorrect(); //调用函数

    //计算和
    // function add(x, y) {
    //     return x + y;
    // }

    function showBBQ() {
      var  nick = document.getElementsByTagName('input')[0].value;
      var content = document.getElementsByTagName('textarea')[0].value;
      var show_ele = document.getElementById('show');
      show_ele.innerHTML += nick + "<br />" + content + "<br />" + "<br />"
    }
