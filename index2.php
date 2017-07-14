<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="admin/css/index2.css">
	<link rel="stylesheet" href="admin/css/bootstrap.min.css">
	<script type="text/javascript" src="admin/js/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="admin/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="admin/js/index.js"></script>
    <script type="text/javascript" src="admin/js/template-web.js"></script>
    <script type="text/html" id="imgInfo1">
         {{each data v i}}
             <div class="row" >
                <div class="col-md-3 col-md-offset-2">
                    <img src="images/{{v.content1}}" class="img-circle img">
                    <div class="little-text">
                        <h4>{{v.content2}}</h4>
                        <span>{{v.content3}}</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="images/{{v.content4}}" class="img-circle img">
                    <div class="little-text">
                        <h4>{{v.content5}}</h4>
                        <span>{{v.content6}}</span>
                        <span></span>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="images/{{v.content7}}" class="img-circle img">
                    <div class="little-text">
                        <h4>{{v.content8}}</h4>
                        <span>{{v.content9}}</span>
                    </div>
                </div>
            </div>
            <br>
         {{/each}}   
    </script>
    <script type="text/html" id="imgInfo">
         {{each data v i}}
             <div class="row miss" >
                <div class="col-md-3 col-md-offset-2">
                    <img src="images/{{v.content1}}" class="img-circle img">
                    <div class="little-text">
                        <h4>{{v.content2}}</h4>
                        <span>{{v.content3}}</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="images/{{v.content4}}" class="img-circle img">
                    <div class="little-text">
                        <h4>{{v.content5}}</h4>
                        <span>{{v.content6}}</span>
                        <span></span>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="images/{{v.content7}}" class="img-circle img">
                    <div class="little-text">
                        <h4>{{v.content8}}</h4>
                        <span>{{v.content9}}</span>
                    </div>
                </div>
            </div>
            <br>
         {{/each}}   
    </script>
	<script type="text/javascript">
         $(function(){
            addimg();
            addimg1();
            $.ajax({
                url: "main.php",
                type: "post",
                dataType:"json",
                success:function(data){                  
                    console.log(typeof data,":",data);
                    var str="";
                    $.each(data,function(i,v){

                        str="<h2>"+v.content1+"</h2><p>"+v.content2+"</p><br><p>"+v.content3+"</p><p>"+v.content4+"</p><p>"+v.content5+"</p><p>"+v.content6+"</p><p>"+v.content7+"</p><p>"+v.content8+"</p>";
                    });
                    $("#street-text").html(str);
                    
                }
            })
            
         }); 
         function  addimg(){
            $.ajax({
                url: "main2.php",
                type: "post",
                dataType:"json",
                success:function(data){                  
                    console.log(typeof data,":",data);
                    var htmlStr = template("imgInfo",{"data":data});
                    $("#content").html(htmlStr);
                    
                }
            });
         }
         function  addimg1(){
            $.ajax({
                url: "main3.php",
                type: "post",
                dataType:"json",
                success:function(data){                  
                    console.log(typeof data,":",data);
                    var htmlStr = template("imgInfo1",{"data":data});
                    $("#content1").html(htmlStr);
                    
                }
            });
         }
    </script>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                         <img src="images/logo.png">
                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                       
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                       <ul class="nav navbar-nav navbar-right myurl">
                                <li class="active"><a href="#">首页<span class="sr-only">(current)</span></a></li>
                                <li><a href="news.html">街区新闻</a></li>
                                <li><a href="station.html">入驻机构</a></li>
                                <li><a href="activity.html">街区活动</a></li>
                          </ul>
                    </div><!-- /.navbar-collapse -->
             </div><!-- /.container-fluid -->
    </nav>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
		  </ol>

	  <!-- Wrapper for slides -->
		   <div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="images/banner_n_01s.jpg">			
				</div>
			    <div class="item">
			        <img src="images/banner_02.jpg">	        
			    </div>
			    <div class="item">
			        <img src="images/banner_n_03.jpg">	        
			    </div>
			    <div class="item">
			        <img src="images/banner_04.jpg">	        
			    </div>
		   </div>

		  <!-- Controls -->
		   <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		      <span class="sr-only">Previous</span>
		   </a>
		   <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		      <span class="sr-only">Next</span>
		   </a>
    </div>
    <div class="container middle">
 <!-- 街区新闻 -->
        <div class="row">
        	<div class="col-md-3 col-md-offset-2 title-text">街区新闻</div>
        </div>
    	<div class="row">
    		<div class="col-md-5 col-sm-offset-1">
    			<img src="images/bng5.jpg" class="bng5">
    		</div>
    		<div class="col-md-4 col-md-offset-2" id="street-text">
    			<!-- <h2>【大街访谈】对话Founders Space创始人...</h2>
    			<p>3月15日,由北京大学创业训练营、中信前沿竞技与中关村创业大街联合主办的“创业思奔硅谷顶级孵化器Founde...</p>
    			<br>
    			<p>2017梦想着市集体活动北京站首发</p>
    			<p>中国社会主义学院民主党派干部到访创业大街</p>
    			<p>全国妇联领导调研中关村创业大街</p>
    			<p>【大街访谈】对话Founders Space创始人</p>
    			<p>中关村创业者瞄准痛点抢先机</p>
    			<p>民革中央建言：搭建青年创业就业服务平台</p> -->
    		</div>
    	</div>
    	<br>
   <!-- 入驻机构 -->
    	<div class="row">
        	<div class="col-sm-3 col-sm-offset-2 title-text">入驻机构</div>
        </div>
        <div id="content1">
            
        </div>
        <div id="content">
            <!-- <div class="row" >
            	<div class="col-md-3 col-md-offset-2">
            	    <img src="images/55adb1f0922cf.jpg" class="img-circle">
            	    <div class="little-text">
            	    	<h4>创业邦</h4>
            	        <span>最懂创业者，离资本最近</span>
            	    </div>
            	</div>
            	<div class="col-md-3">
            	    <img src="images/55b18f271faf0.gif" class="img-circle">
            	    <div class="little-text">
            	    	<h4>拓荒族</h4>
            	        <span>集公办、营销、孵化功能三位一体的<br>企业发展生态圈</span>
            	        <span></span>
            	    </div>
            	</div>
            	<div class="col-md-4">
            	    <img src="images/55bb29cd76b19.gif" class="img-circle">
            	    <div class="little-text">
            	    	<h4>洋葱投</h4>
            	        <span>洋葱投致力于为创业者打造一个全方位、<br>宽领域、多元化的创投服务平台</span>
            	    </div>
            	</div>
            </div>
            <br>
            <div class="row  miss">
            	<div class="col-md-3 col-md-offset-2">
            	    <img src="images/568cd5343f525.gif" class="img-circle">
            	    <div class="little-text">
            	    	<h4>可可豆创新孵化平台</h4>
            	        <span>可可豆创新孵化平台隶属于洛可可创新<br>设计集团</span>
            	    </div>
            	</div>
            	<div class="col-md-3">
            	    <img src="images/56b2ab8db9bea.jpg" class="img-circle">
            	    <div class="little-text">
            	    	<h4>中科金</h4>
            	        <span>为科技企业提供多元化、多层次、全方位<br>的金融服务</span>
            	        <span></span>
            	    </div>
            	</div>
            	<div class="col-md-4">
            	    <img src="images/56f35bf25b14c.jpg" class="img-circle  img">
            	    <div class="little-text">
            	    	<h4>硬派空间</h4>
            	        <span>硬派空间位于中关村创业大街，由创业大街<br>运营管理公司海置科技创办</span>
            	    </div>
            	</div>
            </div>
            <br>
            <div class="row miss">
            	<div class="col-md-3 col-md-offset-2">
            	    <img src="images/5382d949c32e6.gif" class="img-circle">
            	    <div class="little-text">
            	    	<h4>车库咖啡</h4>
            	        <span>成立于2011年4月，是中关村创业大街<br>最早的一批创业主题咖啡厅之一</span>
            	    </div>
            	</div>
            	<div class="col-md-3">
            	    <img src="images/5382d939c6df0.gif" class="img-circle">
            	    <div class="little-text">
            	    	<h4>3W咖啡</h4>
            	        <span>互联网主题馆，</span>
            	        <span></span>
            	    </div>
            	</div>
            	<div class="col-md-4">
            	    <img src="images/5382d8f746dae.gif" class="img-circle">
            	    <div class="little-text">
            	    	<h4>Binggo咖啡</h4>
            	        <span>一家以咖啡和空间为载体，<br>利用群智、跨界创新的创新型孵化器</span>
            	    </div>
            	</div>
            </div> -->
        </div>
        <br>
  <!-- 街区活动 -->
        <div class="row">
        	<div class="col-sm-3 col-sm-offset-2 title-text">街区活动</div>
        </div>
        <div class="row ">
            <div class="col-xs-12 col-md-5 col-md-offset-2">
	        	<!-- <div class="col-xm-12 col-md-6 col-sm-3  col-sm-offset-2 slide-left"> -->
	        	<div class="slide-left">
	        		<img src="images/bng1.png" class="bng1">
	        	</div>
	        	<div class="hid">
	        		<p class="img-text">中关村创业大街首次手机摄影大赛报名啦！！！</p>
	        	</div>
	        </div>
	        <div  class="col-xs-12 col-md-5  rig slide-right">
                <div class="row">
                     <div class="col-md-12 " >
                            <div class="slide1">
                                <img src="images/bng2.png" class="bng2">
                            </div>
                            <div class="hid2">
                                <p class="img-text1">招募、注册、孵化、资讯...</p>
                            </div>
                     </div> 
                 </div>
                 <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class=" slide2">
                                 <img src="images/bng3.png" class="bng3">
                            </div>
                            <div class="hid3">
                                <p class="img-text2">午间时光，打开艺术大门</p>
                            </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class=" slide3">
                               <img src="images/bng4.png" class="bng4">
                            </div>
                            <div class="hid4">
                                <p class="img-text3">【创业整理控】那些全球顶尖的...</p>
                            </div>
                      </div>
                 </div>
	        </div>
        </div>
    </div>
    <!-- 底部 -->
    <nav class="navbar navbar-inverse navbar-fixed-bottom footer">
        版权所有：北京海置科创科技有限公司 京ICP备14017783号-1 京公网安备11010802017670
    </nav>
</body>
</html>