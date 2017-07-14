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
 <style>
     .img{
          width: 50px;
          height: 50px;
     }
 </style>
</head>
<body>

<form method="post" action="" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li> <a class="button border-main icon-plus-square-o" href="add.html?newstype=<?php
          $newstype=$_GET['newstype']; 
          echo $newstype;
        ?>"> 添加内容</a> </li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="100" style="text-align:left; padding-left:20px;">ID</th>
        <th>图片</th>
        <th>标题</th>
        <th width="10%">更新时间</th>
        <th width="310">操作</th>
      </tr>
       <?php
         date_default_timezone_set('prc');
         include "../../util/util.php";
         $sql2="select * from blockNews b left join img i on b.id = i.newsid where b.newstype='".$newstype."'";
         $result=mysqli_query($conn,$sql2);
         $time = time();
         $i=1;
         while($row=mysqli_fetch_array($result,MYSQL_ASSOC)){
             $id=$row["id"];
             $title=$row["title"];
             $imgPath=$row["imgPath"];
             echo "<tr id='list'>
                            <td style='text-align:left; padding-left:20px;'>
           <input type='checkbox' name='id[]' value='' />".$i."</td><td><img class='img' src='upimg/".$imgPath."' class='ListImages'></td><td>".$title."</td><td>".date("y-m-d",$time)."</td>
                             <td>
                                   <div class='button-group'>
                                        <a class='button border-main' onclick='editBlockNews(\"".$id."\")'>
                                        <span class='icon-edit'>修改</span></a>

                                        <a class='button border-red' onclick='deleteBlockNews(\"".$id."\")'>
                                        <span class='icon-trash-o '>删除</span></a>
                                   </div>
                              </td> 
                      </tr>";
              $i++;      
         }
       ?>

      <script type="text/javascript">
          //修改街区新闻
          function editBlockNews(sid){
              window.location.href = "edit.php?id="+sid +"&newstype=" + GetQueryString("newstype");
          }
          //删除街区新闻
          function deleteBlockNews(sid){
               $.ajax({
                  type:"post",
                  url:"delete.php",
                  data:{sid:sid, newstype:GetQueryString("newstype")},
                  success:function(data){
                    alert("删除成功");
                    location.reload(true);
                  }
               });
          }

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


       <tr>
            <td colspan="8">
                <div class="pagelist">
                      <a href="">上一页</a>
                      <span class="current">1</span>
                      <a href="">  2</a><a href="">3</a><a href="">下一页</a><a href="">尾页</a></div></td>
      </tr>

       
    </table>
  </div>
</form>
<script type="text/javascript">
//删除
function del(id,mid,iscid){
	if(confirm("您确定要删除吗?")){
        /*window.location.href="../delete.php?id="+id;*/
	}else{
        alert(1);
    }
}
</script>
</body>
</html>