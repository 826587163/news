<?php 
   include "../../util/util.php";
   $newstype=$_GET["newstype"];
   $id = $_GET["id"];
   $sql="select * from blockNews b left join img i on b.id = i.newsid where b.id = '".$id."'";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result,MYSQL_ASSOC);
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="../css/pintuer.css">
<link rel="stylesheet" href="../css/admin.css">
<script src="../js/jquery.js"></script>
<script type="text/javascript">
    $(function(){
          $("#url1").change(function(){
              var imgurl = $("#url1").val();
              var arr=imgurl.split('\\');//注split可以用字符或字符串分割 
              var imgurl=arr[arr.length-1];//这就是要取得的图片名称 
              $("#imgpath").val(imgurl);
          });
    });
    function ChooseFile(){
         document.getElementById("url1").click();
    }
</script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改内容</strong></div>
  <div class="body-content">
     <script type="text/javascript">
         $(function(){
            var newsType = GetQueryString("newstype");
            $("#frm").attr('action',"modify.php?newstype=" + newsType);
          });

          function GetQueryString(name) {  
              var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");  
              var r = window.location.search.substr(1).match(reg); 
              var context = "";  
              if (r != null)  
                   context = r[2];  
              reg = null;  
              r = null;  
              return context == null || context == "" || context == "undefined" ? "" : context;  
          }
     </script>
    <form method="post" id="frm" class="form-x" action="" enctype='multipart/form-data'>
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="hidden" name="hide" value="<?php echo $id; ?>">
          <input type="text" class="input w50" value="<?php echo $row['title'] ?>" name="title" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
         <!--  <input type="file" id="url1"  name="img" class="input tips" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-image="" /> -->
               <input type="button" value="选择图片" onclick="ChooseFile()" />
               <input type="file" id="url1"  name="img" class="input tips" style="width:25%; float:left;display: none;"  value=""  data-toggle="hover" data-place="right" data-image="" />
               <input type="text" value="<?php echo $row['imgPath']; ?>" name="imagepath" id="imgpath" style=""/>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>内容：</label>
        </div>
        <div class="field">
          <textarea name="content" class="input" style="height:200px; border:1px solid #ddd;"><?php echo $row['content'] ?></textarea>
          <div class="tips"></div>
        </div>
      </div>
     
      <div class="clear"></div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>

</body></html>