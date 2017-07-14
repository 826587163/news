<?php 
 include "../../util/util.php";
  $username=$_POST["name"];
  $password=$_POST["password"];
  $email=$_POST["email"]; 
  
  $msg="";

  $sql="select * from sysUser where name='$username'";

  $result=mysqli_query($conn,$sql); 
  if($result->num_rows>0){
       $msg="用户名已存在";
       header("location:register.html?msg=$msg");
       return;
  }
  $sql2="insert into sysUser values('$username','$password','$email')";

  $flag=mysqli_query($conn,$sql2);

  if($flag){
       $msg='{"flag":true,"msg":"注册成功"}';
       header("location:login.html?msg=$msg");
  }else{
       $msg='{"flag":false,"msg":"注册失败"}';
       header("location:register.html?msg=$msg");
  }