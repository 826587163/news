drop database if exists nms;

create database nms;

use nms;

create table sysUser	
(
   name varchar(20),
   password varchar(20),
   email varchar(50)

)engine=Innodb default charset=utf8;


create table blockNews 
(
   id varchar(50) primary key,
   title varchar(100) not null,
   content varchar(1000) not null,
   newstype varchar(20)
)engine=Innodb default charset=utf8;

create table img(
     newsid varchar(50), 
     name varchar(50),
     imgPath varchar(50)
)engine=Innodb default charset=utf8;




create table reStation   
(
   ID int auto_increment primary key,
   content varchar(1000),
   ph varchar(100),
   title varchar(100)
   
)engine=Innodb default charset=utf8;

create table bloActivity   
(
   ID int auto_increment primary key,
   content longtext,
   title varchar(100),
   tm varchar(50)
)engine=Innodb default charset=utf8;

create table news
(
   content1 longtext,
   content2 longtext,
   content3 longtext,
   content4 longtext,
   content5 longtext,
   content6 longtext,
   content7 longtext,
   content8 longtext
)engine=Innodb default charset=utf8;
set names 'gbk';
insert into news values('【大街访谈】对话Founders Space创始人...','3月15日,由北京大学创业训练营、中信前沿竞技与中关村创业大街联合主办的“创业思奔硅谷顶级孵化器Founde...','2017梦想着市集体活动北京站首发','中国社会主义学院民主党派干部到访创业大街','全国妇联领导调研中关村创业大街','【大街访谈】对话Founders Space创始人','中关村创业者瞄准痛点抢先机','民革中央建言：搭建青年创业就业服务平台');

create table imgtext
( 
   content1 longtext,
   content2 longtext,
   content3 longtext,
   content4 longtext,
   content5 longtext,
   content6 longtext,
   content7 longtext,
   content8 longtext,
   content9 longtext
)engine=Innodb default charset=utf8;

create table imgtext1
( 
   content1 longtext,
   content2 longtext,
   content3 longtext,
   content4 longtext,
   content5 longtext,
   content6 longtext,
   content7 longtext,
   content8 longtext,
   content9 longtext
)engine=Innodb default charset=utf8;
insert into imgtext1 values('55adb1f0922cf.jpg','创业邦','最懂创业者，离资本最近','55b18f271faf0.gif','拓荒族','集公办、营销、孵化功能三位一体的企业发展生态圈','55bb29cd76b19.gif','洋葱投','洋葱投致力于为创业者打造一个全方位、宽领域、多元化的创投服务平台');
insert into imgtext values('568cd5343f525.gif','可可豆创新孵化平台','可可豆创新孵化平台隶属于洛可可创新设计集团','56b2ab8db9bea.jpg','中科金','为科技企业提供多元化、多层次、全方位的金融服务','56f35bf25b14c.jpg','硬派空间','硬派空间位于中关村创业大街，由创业大街运营管理公司海置科技创办');
insert into imgtext values('5382d949c32e6.gif','车库咖啡','成立于2011年4月，是中关村创业大街最早的一批创业主题咖啡厅之一','5382d939c6df0.gif','3W咖啡','互联网主题馆以咖啡和空间为载体,利用群智、跨界创新的创新型，','5382d8f746dae.gif','Binggo咖啡','一家以咖啡和空间为载体,利用群智、跨界创新的创新型孵化器'); 

create table streetnews
(
  content1 longtext,
  content2 longtext,
  content3 longtext,
  content4 longtext
)engine=Innodb default charset=utf8;

insert into streetnews values('中关村创业者瞄准痛点抢占先机','58abb87502963.jpg','5月20日，北京市八一学校“八一创业营”的师生们在党委书记牛震云的带领下，来到中关村创业大街参观交流，近距离感受创新创业氛围。中关村创业大街相关负责人接待了“八一创业营”一行，并进行了详细讲解。“八一','2017年03月15日');
insert into streetnews values('民革中央建言：搭建青年创业就业服务平台','58abb87502963.jpg','从北京中关村地铁口出来再走十分钟。远远就能看到“中关村创业大街”的牌匾。每天，无数怀揣着创业梦想的青年汇聚于此。在全面建成小康社会决胜阶段','2017年03月13日');
insert into streetnews values('经济参考报：法国创新企业为何青睐中国','58abb87502963.jpg','法国和中国的合作今年俩已经不在限于传统领域，开始探索技术创新领域方面的机会。而在创新合作方面，除了活跃着阿尔斯通、法国电力、施耐德等大企业的身影外，不少中小企业同样','2017年03月9日');
insert into streetnews values('人明日报：中关村创新方式助推原始创新','58abb87502963.jpg','中关村平均每天诞生十多家科技企业，究竟哪家企业拥有重大颠覆性原创核心技术？哪家企业具有新产业的领军潜力，将面向未来、前途无限？ 两会之前，手握创新创业核心密码的36家“中关村前沿技术企业”在北京首都','2017年03月8日');   

create table station
(
  content1 longtext,
  content2 longtext,
  content3 longtext,
  content4 longtext
)engine=Innodb default charset=utf8;
insert into station values('创业邦','55adb1f0922cf.jpg','最懂创业者，离资本最近','2017年02月21日');
insert into station values('拓荒族','55b18f271faf0.gif','集公办、营销、孵化功能三位一体的企业发展生态圈','2017年02月21日');
insert into station values('洋葱投','55bb29cd76b19.gif','洋葱投致力于为创业者打造一个全方位、宽领域、多元化的创投服务平台','2017年02月21日');
insert into station values('可可豆创新孵化平台','568cd5343f525.gif','可可豆创新孵化平台隶属于洛可可创新设计集团','2017年02月21日');
insert into station values('中科金','56b2ab8db9bea.jpg','为科技企业提供多元化、多层次、全方位的金融服务','2017年02月21日');
insert into station values('硬派空间','56f35bf25b14c.jpg','硬派空间位于中关村创业大街，由创业大街<br>运营管理公司海置科技创办','2017年02月21日'); 





