<?php
    header("Content-type:text/html;charset=utf-8");

    $name = $_REQUEST["username"];
    $pwd = $_REQUEST["pwd"];

    $conn = mysql_connect("http://www.woftsun.com","chuizi","chuizi");

    if($conn){
        mysql_select_db("chuizi");
    }

    $result = mysql_query("select * from chuizi where uname='$name'",$conn);

    if(mysql_num_rows($result)==1){
        echo 0;
    }else{
        mysql_query("insert into chuizi(uname,pwd) values('$name','$pwd')",$conn);
        echo 1;
    }
?>
