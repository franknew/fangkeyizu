<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta charset="utf-8" />
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/ectouch.css" rel="stylesheet" type="text/css" />
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery-1.4.4.min.js"></script>
</head>

<body>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="category.php?id=18"> 返回 </a> </div>
  <h1> 房源详情 </h1>
  <div class="header_r header_search"> <a class="ico_15" href="ectouch.php?act=share&content=<?php echo $this->_var['goods']['goods_name']; ?>&pic=<?php echo $this->_var['goods']['original_img']; ?>"> 分享 </a> </div>
</header>

 
<script src="<?php echo $this->_var['ectouch_themes']; ?>/js/TouchSlide.js"></script>
<section class="goods_slider">
  <div class="blank2"></div>
  <div id="slideBox" class="slideBox">
    <div class="scroller"> 
      <!--<div><a href="javascript:showPic()"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>"  alt="<?php echo $this->_var['goods']['goods_name']; ?>" /></a></div>-->
      <ul>
        <li><a href="javascript:showPic()"><img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['goods']['original_img']; ?>" alt="" width="100%"/></a></li>
        <?php if ($this->_var['pictures']): ?> 
        <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['no']['iteration']++;
?> 
        <?php if ($this->_foreach['no']['iteration'] > 1): ?>
        <li><a href="javascript:showPic()"><img alt="" src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['picture']['img_url']; ?>"/></a></li>
        <?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        <?php endif; ?>
      </ul>
    </div>
    <div class="icons">
      <ul>
        <i class="current"></i> 
        <?php if ($this->_var['pictures']): ?> 
        <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['no']['iteration']++;
?> 
        <i class="current"></i> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        <?php endif; ?>
      </ul>
    </div>
  </div>
  <div class="blank2"></div>
</section>
<script type="text/javascript">
TouchSlide({ 
	slideCell:"#slideBox",
	titCell:".icons ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
	mainCell:".scroller ul", 
	effect:"leftLoop", 
	autoPage:true,//自动分页
	autoPlay:false //自动播放
});

function showPic(){
	var data = document.getElementById("slideBox").className;
	var reCat = /ui-gallery/;
	//str1.indexOf(str2);
	if( reCat.test(data) ){
		document.getElementById("slideBox").className = 'slideBox';
	}else{
		document.getElementById("slideBox").className = 'slideBox ui-gallery';
		//document.getElementById("slideBox").style.position = 'fixed';
	}
}
</script> 
 

<section class="goodsInfo">
  
  <div class="title">
    <h1> <?php echo $this->_var['goods']['goods_style_name']; ?> </h1>
  </div>
  <ul>
    <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
    <li><?php echo $this->_var['lang']['promote_price']; ?><b class="price"><?php echo $this->_var['goods']['promote_price']; ?></b>　<?php if ($this->_var['cfg']['show_marketprice']): ?>
    <del><?php echo $this->_var['goods']['market_price']; ?></del> 
    <?php endif; ?></li> 
    
    <?php else: ?>
    <li>房租<b class="price"><?php echo $this->_var['goods']['shop_price_formated']; ?></b> /月 <b ><a  href="tel:4006674066" class="tel" >预约看房</a></b></li> 
    <?php endif; ?>  
	
  </ul>
  <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?> 
  <?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>
  <ul>
    <li> <span class="time">时间剩余：<time class="countdown" id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></time></span> </li>
  </ul>
  <?php endif; ?>
  <?php if ($this->_var['promotion']): ?>
  <ul>
    <li>
    <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    <?php echo $this->_var['lang']['activity']; ?>
    <?php if ($this->_var['item']['type'] == "snatch"): ?>
    <a href="snatch.php" title="<?php echo $this->_var['lang']['snatch']; ?>" class="rule c333">[<?php echo $this->_var['lang']['snatch']; ?>]</a>
    <?php elseif ($this->_var['item']['type'] == "group_buy"): ?>
    <a href="group_buy.php" title="<?php echo $this->_var['lang']['group_buy']; ?>" class="rule c333">[<?php echo $this->_var['lang']['group_buy']; ?>]</a>
    <?php elseif ($this->_var['item']['type'] == "auction"): ?>
    <a href="auction.php" title="<?php echo $this->_var['lang']['auction']; ?>" class="rule c333">[<?php echo $this->_var['lang']['auction']; ?>]</a>
    <?php elseif ($this->_var['item']['type'] == "favourable"): ?>
    <a href="activity.php" title="<?php echo $this->_var['lang']['favourable']; ?>" class="rule c333">[<?php echo $this->_var['lang']['favourable']; ?>]</a>
    <?php endif; ?>
    <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>" class="rule c333"><?php echo $this->_var['item']['act_name']; ?></a><br />
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </li>
  </ul>
  <?php endif; ?>
  

</section>


<section class="s-detail">
  <header>
    <ul style="position: static;" id="detail_nav">
      <li id="tabs1" onClick="tab(1)" class="current"> 房源详情 </li>
    </ul>
  </header>
  <div id="tab1" class="">
    <div class="desc wrap">
      <div class="blank2"></div>
      <?php echo $this->_var['goods']['goods_shipai']; ?>
    </div>
  </div>
  
      <div class="footcontact">
        <div class="foot-item">
            <a  href="tel:4006674066" class="foottel" ><img src="themes/default/images/f-tel.png" width="25" height="25">&nbsp;预约看房</a>
        </div>
        <div class="foot-item">
            <a href="category.php?id=18" class="btn-block"><img src="themes/default/images/f-tmore.png" width="25" height="25">&nbsp;看看其它</a>
        </div>
    </div>
</section>
<?php echo $this->fetch('library/page_footer.lbi'); ?> 
 <div class="blank2" style="height:20px;"></div>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
</body>
</html>