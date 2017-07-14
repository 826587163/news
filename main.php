<?php
   include "util/util.php";
   $sql2="select * from news";
   $result=mysqli_query($conn,$sql2);
   
   $queryArray = array();
   
   while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
   	   // $content1=$row['content1'];
   	   // $content2=$row['content2'];
   	   // $content3=$row['content3'];
   	   // $content4=$row['content4'];
   	   // $content5=$row['content5'];
   	   // $content6=$row['content6'];
   	   // $content7=$row['content7'];
   	   // $content8=$row['content8'];
       array_push($queryArray,$row);
   	   
   }
   
   echo json_encode($queryArray);