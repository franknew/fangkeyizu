<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:66:"/www/web/fangkeyizu/public_html/mobile/themes/default/category.dwt";i:1;s:76:"/www/web/fangkeyizu/public_html/mobile/themes/default/library/goods_list.lbi";i:2;s:77:"/www/web/fangkeyizu/public_html/mobile/themes/default/library/page_footer.lbi";}s:7:"expires";i:1439570773;s:8:"maketime";i:1439567173;}<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8" />
<title>整租_福田区_所有房源_房客易租</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="themes/default/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="themes/default/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/default/ectouch.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="page" style="right: 0px; left: 0px; display: block;">
  <header id="header" style="z-index:1">
    <div class="header_l"> <a class="ico_10" href="category.php?id=18"> 返回 </a> </div>
    <div id="search_box2" >
      <div class="search_box" >
        <form method="post" action="search.php" name="searchForm" id="searchForm_id">
          <input placeholder="请输入房源名称" name="keywords" type="text" id="keywordBox" />
          <button class="ico_07" type="submit" onclick="return check('keywordBox')"> </button>
        </form>
      </div>
    </div>
    <div class="header_r header_search"> <a class="switchBtn switchBtn-album" href="javascript:void(0);"  onclick="changeCl(this)" style="opacity: 1;"> 切换 </a> </div>
  </header>
  
<div class="search_rightChoseAll clearfix  ">
  
  <div class="searchRight_brand "> 
    
       
		<div class="screeBox clearfix"> <strong>区域：</strong>
		<ul class="show_box" >
         <li><a href="category.php?id=18">全部</a></li>
		          <li><span><a href="category.php?id=19" >福田区</a></span></li>
         		         <li><a href="category.php?id=20" >南山区</a></li>
         		         <li><a href="category.php?id=21" >龙华区</a></li>
         		         <li><a href="category.php?id=22" >罗湖区</a></li>
         				</ul>
	 
    </div>
    
        <div class="screeBox clearfix"> <strong>地铁线：</strong>
      <ul class="show_box" >
         
                <li><a href="category.php?id=19&amp;brand=1&amp;price_min=3000&amp;price_max=4200">全部</a> </li>
         
         
                <li><span>龙岗线</span></li>
         
              </ul>
      
    </div>
     
        <div class="screeBox clearfix" style="border-bottom:none"> <strong>价格：</strong>
      <ul class="show_box"  >
         
                <li><a href="category.php?id=19&amp;brand=1&amp;price_min=0&amp;price_max=0&amp;filter_attr=29">全部</a></li>
         
         
                <li><a href="category.php?id=19&amp;brand=1&amp;price_min=1800&amp;price_max=3000&amp;filter_attr=29">1800&nbsp;-&nbsp;3000</a></li>
         
         
                <li><span>3000&nbsp;-&nbsp;4200</span></li>
         
         
                <li><a href="category.php?id=19&amp;brand=1&amp;price_min=4200&amp;price_max=5400&amp;filter_attr=29">4200&nbsp;-&nbsp;5400</a></li>
         
         
                <li><a href="category.php?id=19&amp;brand=1&amp;price_min=5400&amp;price_max=6600&amp;filter_attr=29">5400&nbsp;-&nbsp;6600</a></li>
         
         
                <li><a href="category.php?id=19&amp;brand=1&amp;price_min=6600&amp;price_max=7800&amp;filter_attr=29">6600&nbsp;-&nbsp;7800</a></li>
         
              </ul>
      
    </div>
     
    
            <div class="screeBox clearfix"> <strong>方式：</strong>
      <ul class="show_box" >
         
                <li><a href="category.php?id=19&amp;price_min=3000&amp;price_max=4200&amp;filter_attr=29">全部</a></li>
         
         
                <li><span>整租</span></li>
         
         
                <li><a href="category.php?id=19&amp;brand=2&amp;price_min=3000&amp;price_max=4200&amp;filter_attr=29">合租</a></li>
         
              </ul>
      
    </div>
     
    
  </div>
</div>
 
 
<script>
function show_box(this_obj,h)
{
	var child_obj = this_obj.parentNode.parentNode.childNodes;
	for(i=0; i<child_obj.length; i++)
	{
		if(child_obj[i].className == "show_box")
		{
			if(child_obj[i].style.height != "auto")
			{
				child_obj[i].style.height="auto";
				this_obj.innerText="收起";
			}
			else
			{
				child_obj[i].style.height=h+'px';
				this_obj.innerText="展开";
			}
		}
	}
}
</script>  
  
  
  <div class="filter" style="position:static; top:0px; width:100%;">
  <form method="GET" class="sort" name="listform">
    <ul class="filter-inner">
      <li class=""> <a href="category.php?category=19&display=grid&brand=1&price_min=3000&price_max=4200&filter_attr=29&page=1&sort=goods_id&order=DESC#goods_list">综合</a> </li>
      
      <li class="filter-cur"> <a href="category.php?category=19&display=grid&brand=1&price_min=3000&price_max=4200&filter_attr=29&page=1&sort=shop_price&order=ASC#goods_list">租金 <span> <i class="f-ico-triangle-mt "></i> <i class="f-ico-triangle-mb f-ico-triangle-slctd"></i> </span> </a> </li>
      <li class="filter-navBtn"><a href="javascript:;" class="j_filterBtn disabled" onclick="mtShowMenu()">筛选</a></li>
    </ul>
    <input type="hidden" name="category" value="19" />
    <input type="hidden" name="display" value="grid" id="display" />
    <input type="hidden" name="brand" value="1" />
    <input type="hidden" name="price_min" value="3000" />
    <input type="hidden" name="price_max" value="4200" />
    <input type="hidden" name="filter_attr" value="29" />
    <input type="hidden" name="page" value="1" />
    <input type="hidden" name="sort" value="shop_price" />
    <input type="hidden" name="order" value="DESC" />
  </form>
</div>
<form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
    <div class="srp album flex-f-row" id="J_ItemList" style="opacity:1;"> 
    <div class="product flex_in single_item">
      <div class="pro-inner"></div>
    </div>
    <a href="javascript:;" class="get_more"></a>
  </div>
  </form>
  <div id="content" class="footer mr-t20">
  <p > &copy; 2005-2015 房客易租 版权所有，并保留所有权利。 </p>
  
</div>
<link href="themes/default/css/global_nav.css?v=20140408" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="themes/default/js/zepto.min.js?v=20140408"></script>
<script type="text/javascript">
Zepto(function($){
   var $nav = $('.global-nav'), $btnLogo = $('.global-nav__operate-wrap');
   //点击箭头，显示隐藏导航
   $btnLogo.on('click',function(){
     if($btnLogo.parent().hasClass('global-nav--current')){
       navHide();
     }else{
       navShow();
     }
   });
   var navShow = function(){
     $nav.addClass('global-nav--current');
   }
   var navHide = function(){
     $nav.removeClass('global-nav--current');
   }
   
   $(window).on("scroll", function() {
		if($nav.hasClass('global-nav--current')){
			navHide();
		}
	});
})
function get_search_box(){
	try{
		document.getElementById('get_search_box').click();
	}catch(err){
		document.getElementById('keywordfoot').focus();
 	}
}
</script></div>
<div id="nav" class="nav" style="right:-275px;">
  <form class="hold-height" action="category.php">
    <div class="attrExtra">
      <input type="hidden" name="category" value="19"/>
      <button class="attrExtra-submit" type="submit">确定</button>
      <button class="attrExtra-cancel" type="button"  onclick="mtShowMenu()">取消</button>
    </div>
    <div class="attrs attr-fix" style="overflow: auto;height: 100%"> 
       
       
      
      
      
            <div class="attr brandAttr">
        <div class="attrKey">价格</div>
        <div class="attrValues">
          <ul class="av-collapse filter_list">
             
                        <li> 
               
              <a href="javascript:void(0);" data="0|0">全部</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="1800|3000">1800&nbsp;-&nbsp;3000</a></li>
             
                        <li class="av-selected"> 
               
              <a href="javascript:void(0);" data="3000|4200">3000&nbsp;-&nbsp;4200</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="4200|5400">4200&nbsp;-&nbsp;5400</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="5400|6600">5400&nbsp;-&nbsp;6600</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="6600|7800">6600&nbsp;-&nbsp;7800</a></li>
                        <input type="hidden" name="price_min" value="3000" />
            <input type="hidden" name="price_max" value="4200" />
          </ul>
          <div class="av-options"><a class="j_More avo-more avo-more-down" href="javascript:;">查看更多<i></i></a> </div>
        </div>
      </div>
       
      
            <div class="attr brandAttr">
        <div class="attrKey">地铁线</div>
        <div class="attrValues">
          <ul class="av-collapse filter_list">
             
                        <li class="filter_attr"> 
               
              <a href="javascript:void(0);" data="0">全部</a></li>
             
                        <li class="av-selected filter_attr"> 
               
              <a href="javascript:void(0);" data="29">龙岗线</a></li>
                      </ul>
          <div class="av-options"><a class="j_More avo-more avo-more-down" href="javascript:void(0);">查看更多<i></i></a> </div>
        </div>
      </div>
            <input type="hidden" name="filter_attr" value="29"/>
       
      
      
            <div class="attr brandAttr">
        <div class="attrKey">方式</div>
        <div class="attrValues">
          <ul class="av-collapse filter_list">
             
                        <li> 
               
              <a href="javascript:void(0);" data="0">全部</a></li>
             
                        <li class="av-selected"> 
               
              <a href="javascript:void(0);" data="1">整租</a></li>
             
                        <li> 
               
              <a href="javascript:void(0);" data="2">合租</a></li>
                        <input type="hidden" name="brand" value="1" />
          </ul>
          <div class="av-options"><a class="j_More avo-more avo-more-down" href="javascript:;">查看更多<i></i></a> </div>
        </div>
      </div>
       
      
       
    </div>
  </form>
</div>
<script type="text/javascript" src="themes/default/js/jquery.min.js"></script>
<script type="text/javascript" src="themes/default/js/jquery.more.js"></script>
<script type="text/javascript" src="themes/default/js/ectouch.js"></script>
<script type="text/javascript">
jQuery(function($){
	$('#J_ItemList').more({'address': 'category.php?act=asynclist&category=19&brand=1&price_min=3000&price_max=4200&filter_attr=29&page=1&sort=shop_price&order=DESC', 'spinner_code':'<div style="text-align:center; margin:10px;"><img src="themes/default/images/loader.gif" /></div>'})
	$(window).scroll(function () {
		if ($(window).scrollTop() == $(document).height() - $(window).height()) {
			$('.get_more').click();
		}
	});
});
</script>
</body>
</html>