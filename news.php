<?php
   include "util/util.php";
   $sql2="select * from streetnews";
   $result=mysqli_query($conn,$sql2);
   
   $queryArray = array();
   
   while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
   	   
       array_push($queryArray,$row);
   	   
   }
   
   echo json_encode($queryArray);