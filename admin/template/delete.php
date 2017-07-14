<?php
   include "../../util/util.php";
   $sid = $_POST["sid"];
   $sql = "delete from blockNews where id = '".$sid."'";
   $flag = mysqli_query($conn,$sql);
   
   $msg="";
   if(!$flag){
      $msg="删除失败";
      header("location:list.php?msg=$msg");
      return;
   }else{
      $msg="删除成功";
      header("location:list.php?msg=$msg");
   }