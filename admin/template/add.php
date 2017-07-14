<?php
   include "../../util/util.php";
    $newstype=$_GET["newstype"]; 
    
    $id = uniqid();
    $title=$_POST["title"];
    $content=$_POST["content"];
    
    $sql1="insert into blockNews values('$id','$title','$content','$newstype')";
    $flag1 = mysqli_query($conn,$sql1);

    if(!$flag1){
      echo "数据库：保存街区新闻失败！";
      return;
    }
      
    $newName = "";
    if($_FILES["img"]["error"]>0){
      $newName=null;
      }else{
      $newName = time().rand(1000,9999).".jpg";
      move_uploaded_file($_FILES["img"]["tmp_name"], "upimg/".$newName);
    }
    $newsid = $id;
    $name = $newName;
    $img = $newName;
    $sql2="insert into img values('$newsid','$name','$img')";
    $flag2 = mysqli_query($conn,$sql2);
    if(!$flag2){
      echo "数据库:保存街区新闻图片失败！";
    }
    else
    {
       header("location:list.php?newstype=$newstype");
    }
    mysqli_close($conn);  
?>