<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:66:"/www/web/fangkeyizu/public_html/mobile/themes/default/category.dwt";i:1;s:76:"/www/web/fangkeyizu/public_html/mobile/themes/default/library/goods_list.lbi";i:2;s:77:"/www/web/fangkeyizu/public_html/mobile/themes/default/library/page_footer.lbi";}s:7:"expires";i:1438939962;s:8:"maketime";i:1438936362;}<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8" />
<title>罗湖区_所有房源_房客易租</title>
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
      <li class=""> <a href="category.php?category=22&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=goods_id&order=DESC#goods_list">综合</a> </li>
      
      <li class="filter-cur"> <a href="category.php?category=22&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=shop_price&order=DESC#goods_list">租金 <span> <i class="f-ico-triangle-mt  f-ico-triangle-slctd"></i> <i class="f-ico-triangle-mb "></i> </span> </a> </li>
      <li class="filter-navBtn"><a href="javascript:;" class="j_filterBtn disabled" onclick="mtShowMenu()">筛选</a></li>
    </ul>
    <input type="hidden" name="category" value="22" />
    <input type="hidden" name="display" value="grid" id="display" />
    <input type="hidden" name="brand" value="0" />
    <input type="hidden" name="price_min" value="0" />
    <input type="hidden" name="price_max" value="0" />
    <input type="hidden" name="filter_attr" value="0" />
    <input type="hidden" name="page" value="1" />
    <input type="hidden" name="sort" value="shop_price" />
    <input type="hidden" name="order" value="ASC" />
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
      <input type="hidden" name="category" value="22"/>
      <button class="attrExtra-submit" type="submit">确定</button>
      <button class="attrExtra-cancel" type="button"  onclick="mtShowMenu()">取消</button>
    </div>
    <div class="attrs attr-fix" style="overflow: auto;height: 100%"> 
       
       
      
      
       
      
       
    </div>
  </form>
</div>
<script type="text/javascript" src="themes/default/js/jquery.min.js"></script>
<script type="text/javascript" src="themes/default/js/jquery.more.js"></script>
<script type="text/javascript" src="themes/default/js/ectouch.js"></script>
<script type="text/javascript">
jQuery(function($){
	$('#J_ItemList').more({'address': 'category.php?act=asynclist&category=22&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=shop_price&order=ASC', 'spinner_code':'<div style="text-align:center; margin:10px;"><img src="themes/default/images/loader.gif" /></div>'})
	$(window).scroll(function () {
		if ($(window).scrollTop() == $(document).height() - $(window).height()) {
			$('.get_more').click();
		}
	});
});
</script>
</body>
</html>