<?php
	header("Content-type:text/html;charset=utf-8");
	$name = $_POST["username"];
	$pwd = $_POST["pwd"];

	$conn=mysql_connect("http:www.woftsun.com","chuizi","chuizi");
	if($conn){
		mysql_select_db("chuizi");
	}
	$result=mysql_query("select * from chuizi where uname='$name' and pwd='$pwd'",$conn);
	if(mysql_num_rows($result)==1){
		echo 0;
	}else{
		echo 1;
	}
	mysql_close($conn);
?>