<?php 
?>﻿<?php
error_reporting(0);header('Content-type:text/html;charset=utf-8');include './inc/config.php';$page=$_GET['page'];$page1=$_GET['page']+=1;$page2=$_GET['page']-1;$pageurl=$host.'/?page='.$page1;$pageurl1=$host.'/?page='.$page2;$info=file_get_contents('http://www.360kan.com/dianying/list?cat=all&year=all&area=all&act=all&rank=createtime&pageno='.$page1);define('360','www.360kan.com');$yuming='http://www.360kan.com';$vname='#<span class="s1">(.*?)</span>#';$fname='#<span class="s2">(.*?)</span>#';$nname='#<span class="hint">(.*?)</span>#';$vlist='#<a class="js-tongjic" href="(.*?)">#';$vstar='# <p class="star">(.*?)</p>#';$vimg="#<div class=\"cover g-playicon\">\r\n                                <img src=\"(.*?)\">\r\n#";$bflist='#<a data-daochu(.*?) href="(.*?)" class="js-site-btn btn btn-play"></a>#';$array=array();preg_match_all($vname,$info,$namearr);preg_match_all($vlist,$info,$listarr);preg_match_all($vstar,$info,$stararr);preg_match_all($vimg,$info,$imgarr);preg_match_all($fname,$info,$fnamearr);preg_match_all($nname,$info,$nnamearr);foreach($namearr[1] as $key=>$value){$gul=$yuming.$listarr[1][$key];$cd=$host.'/alist.php?id='.$gul;$guq=$listarr[1][$key];$_GET['id']=$gul;$zimg=$imgarr[1][$key];$zname=$namearr[1][$key];$fname=$fnamearr[1][$key];$nname=$nnamearr[1][$key];$zstar=$stararr[1][$key];$jiami=base64_encode($gul);$chuandi=$host.'/inc/b.php?id='.$jiami;}
