<?php 

    include "../../util/util.php";
    $newstype=$_GET['newstype'];

    $id= $_POST['hide'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $imgepath = $_POST['imagepath'];
    // echo $title;
    // echo $imgepath;

    $msg="";
    $sql="update blockNews set title='$title',content='$content',newstype='$newstype' where id='".$id."'";
    
    $flag = mysqli_query($conn,$sql);
    $filename = "";
    if($_FILES["img"]["error"]>0){
      $filename= $imgepath;
    }else{
      $filename = time().rand(1000,9999).".jpg";
      move_uploaded_file($_FILES["img"]["tmp_name"], "upimg/".$filename);
    }
    $newsid = $id;
    $name = $filename;
    $img = $filename;
    $sql3="update img set imgpath = '$img' where newsid = '".$id."'";
    $flag3 = mysqli_query($conn,$sql3);
    
    if(!$flag3){
        echo "数据库:更新失败！";
        return;
    }else{
        header("location:list.php?newstype=$newstype");
    }
     mysqli_close($conn);


 ?>



    