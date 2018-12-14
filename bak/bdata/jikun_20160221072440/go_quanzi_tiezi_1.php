<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `go_quanzi_tiezi`;");
E_C("CREATE TABLE `go_quanzi_tiezi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `qzid` int(10) unsigned DEFAULT NULL COMMENT '论坛ID匹配',
  `hueiyuan` varchar(255) DEFAULT NULL COMMENT '会员信息',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `neirong` text COMMENT '内容',
  `hueifu` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '回复',
  `dianji` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点击量',
  `zhiding` char(1) DEFAULT 'N' COMMENT '置顶',
  `jinghua` char(1) DEFAULT 'N' COMMENT '精华',
  `zuihou` varchar(255) DEFAULT NULL COMMENT '最后回复',
  `time` int(10) unsigned DEFAULT NULL COMMENT '时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `go_quanzi_tiezi` values('1','1','1','我们什么时候搞促销活动呀？！我已经迫不及待的想要参加活动了亲们！','腾讯新闻,事实派。新闻中心,包含有时政新闻、国内新闻、国际新闻、社会新闻、时事评论、新闻图片、新闻专题、新闻论坛、军事、历史、的专业时事报道门户网站','3','179','Y','N','1','1440320916');");
E_D("replace into `go_quanzi_tiezi` values('2','2','2','欢迎大家加入这个美女群，我们将竭诚为您服务的哦~！','&lt;p&gt;谢谢大家支持~&lt;br/&gt;&lt;/p&gt;','0','69','N','N','2','1440325009');");
E_D("replace into `go_quanzi_tiezi` values('3','2','2','我是新人请大家多多关照~','&lt;p&gt;今天的天气真的是不错呢~&lt;br/&gt;&lt;/p&gt;','0','66','N','N','2','1440325123');");
E_D("replace into `go_quanzi_tiezi` values('4','2','2','第三次测试呢~希望不纯在有问题扥~','<p>大家好，谢谢大家关闸~<br/></p>','0','67','N','N','2','1440325220');");
E_D("replace into `go_quanzi_tiezi` values('5','3','2','测试模块任务发表，谢谢大家提意见~','测试模块任务发表，谢谢大家提意见~','4','217','Y','N','2','1440325479');");
E_D("replace into `go_quanzi_tiezi` values('6','1','2','大家最近都挺忙的！~有没有闲下来的人呢？！求 工作~','大家最近都挺忙的！~有没有闲下来的人呢？！求 工作~','9','72','Y','N','2','1440325647');");
E_D("replace into `go_quanzi_tiezi` values('7','2','3','我是一个新人，请大家多多关照哦~！','<p>我是新加入夺宝的人员，希望大家多多支持和关注我的哦~<br/></p>','1','71','N','N','3','1440337407');");
E_D("replace into `go_quanzi_tiezi` values('8','1','3','今天的飞机又TM污点了，心难受啊~','&lt;p&gt;南航天天延误航班，我真的是收不了了啊！我自己难受啊~&lt;br/&gt;&lt;/p&gt;','0','164','Y','N','3','1440337511');");
E_D("replace into `go_quanzi_tiezi` values('9','1','3','你虽然你们来的早，但是没啥用的啊，你们迟早还得在回来呢~！','<p>你虽然你们来的早，但是没啥用的啊，你们迟早还得在回来呢~！</p><p>我的电脑是自己买的，不是夺宝的~<br/></p>','0','43','N','N','3','1440337709');");
E_D("replace into `go_quanzi_tiezi` values('10','2','6','大组织有大组织的好，当然也有大组织的失败，怎么办？','<p>大组织有大组织的好，当然也有大组织的失败，怎么办？</p>','1','63','N','N','6','1440338491');");
E_D("replace into `go_quanzi_tiezi` values('11','3','9','周末有没有一起出去玩的亲们呢！？','周末有没有一起出去玩的亲们呢？？？','0','149','Y','N','9','1440339917');");
E_D("replace into `go_quanzi_tiezi` values('12','1','9','老人站海滨浴场出口处 专撞女子胸部','<p>【老人站海滨浴场出口处 专撞女子胸部】21日,网友“淮海游子d6qp7”上传了一段视频:一头发花白的老人站在一个海滨浴场的出口处,看似无意的抬起胳膊,不断撞向穿着泳衣走出来的女孩的胸部,而女孩们并未发觉不对</p>','0','45','N','N','9','1440340152');");
E_D("replace into `go_quanzi_tiezi` values('13','2','10','原任中共中央副主席、中央顾问委员会委员汪东兴同志，因病医治无效，于2015年8月21日上午5时28分在北京逝世','&lt;p&gt;汪东兴，1916年1月出生于江西省弋阳县，原中共中央副主席、中顾委委员。1932年加入中国共产党，随后参加了红军，历经长征与抗日战争，从1947\n年开始一直担任毛泽东的警卫，并长期掌管8341部队。1968年起担任中共中央办公厅主任兼中央警卫局党委第一书记，并兼总参谋部警卫局局长，对领导人\n的起居、出行等负责，因此又被称为中南海大内总管，是毛泽东晚年最信任的人之一。是四人帮抓捕行动怀仁堂事变的决策人之一。1955年被授予少将军衔&lt;/p&gt;','3','186','Y','N','10','1440340379');");
E_D("replace into `go_quanzi_tiezi` values('14','6','10','上海现在又下雨了，听天下啊！','<p>上海现在又下雨了，听天下啊！</p>','1','64','N','N','10','1440340763');");
E_D("replace into `go_quanzi_tiezi` values('15','3','20','贵圈真心乱，不是我们外行人可以理解的呢~','<p>什么玩意啊！竟然不能粘贴呢~！<br/></p>','0','213','N','N','20','1440384741');");
E_D("replace into `go_quanzi_tiezi` values('16','1','14','习近平致信祝贺第二十二届国际历史科学大会开幕','央视网消息 第二十二届国际历史科学大会23日在山东济南开幕。国家主席习近平发来贺信，向会议的召开表示热烈的祝贺，向国际历史学会主席玛丽亚塔·希耶塔拉女士等与会的历史学家表示诚挚的欢迎 习近平在贺信中说，历史研究是一切社会科学的基础，承担着“究天人之际，通古今之变”的使命。重视历史、研究历史、借鉴历史，可以给人类带来很多了解昨天、把握今天、开创明天的智慧。 习近平指出人自古重视历史研究，历来强调以史为鉴，我们的前人留下了浩繁的历史典籍。每个国家、每个民族都有自己的发展历程，应该尊重彼此的选择，加深彼此的了解，以利于共同创造人类更加美好的未来。希望这次大会能够推动各国的历史研究，帮助人们从历史的启迪中更好探寻前进方向','14','410','Y','N','14','1440385506');");
E_D("replace into `go_quanzi_tiezi` values('17','5','17','天津港爆炸事故首批101名遇难者名单公布，中国5000多年的文明史，是自强不息的奋斗史','<p>国务院副总理刘延东在开幕式上宣读了习近平的贺信并致辞。她指出，中国5000多年的文明史，是自强不息的奋斗史、追求和平的发展史、互学互鉴的交流史，\n塑造了融入中华民族血脉的文化基因，形成了当代中国的价值理念、制度选择和发展道路。她希望各国学者交流对话、传承创新，加强国际学术合作，为促进多样文\n明和谐共生作出更大贡献。国际历史学会主席玛利亚塔·希耶塔拉在致辞中表示，本届国际历史科学大会将在促进不同文化的跨国交流中发挥重要作用</p>','3','189','N','N','17','1440386193');");
E_D("replace into `go_quanzi_tiezi` values('18','4','274','的骄傲辅导费','<p>撒打发斯蒂芬阿斯顿发阿斯顿发阿萨德</p>','0','104','N','N','274','1449822121');");

require("../../inc/footer.php");
?>