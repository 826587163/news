<?php
   define("HOST","127.0.0.1");
   define("USERNAME","root");
   define("PASSWORD","");
   define("DBNAME","nms");
   define("MYSQL_CHARSET", "utf8");

   $conn=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
   if(!$conn){
   	   die("服务器异常，请联系管理员");
   }

   $mysql_charset_sql = "set names ".MYSQL_CHARSET;

   mysqli_query($conn, $mysql_charset_sql);