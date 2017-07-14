<?php

   $name = $_POST["name"];
   $password = $_POST["password"];
   $email = $_POST["email"];

   include "../../util/util.php";
   $msg="";

   $sql= "select name,password,email from sysUser where name='$name'";
   $result=mysqli_query($conn,$sql);
   if($result->num_rows>0){
       $msg='{"flag":false,"msg":"用户名已存在"}';
       header("location:register.html?msg=$msg");
       return;
   }

   $sql2="insert into sysUser values('$name','$password','$email')";

   $flag=mysqli_query($conn,$sql2);

   if($flag){
       $msg='{"flag":true,"msg":"注册成功"}';
       header("location:login.html?msg=$msg");
   }else{
       $msg='{"flag":false,"msg":"注册失败"}';
       header("location:register.html?msg=$msg");
   }


