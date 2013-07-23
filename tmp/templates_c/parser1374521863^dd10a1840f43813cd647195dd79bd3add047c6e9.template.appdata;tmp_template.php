<?php /* Smarty version Smarty-3.1.12, created on 2013-07-22 21:37:43
         compiled from "template:appdata;tmp_template" */ ?>
<?php /*%%SmartyHeaderCode:547151ed8a07f23dc4-98062808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd10a1840f43813cd647195dd79bd3add047c6e9' => 
    array (
      0 => 'template:appdata;tmp_template',
      1 => 1374521863,
      2 => 'template',
    ),
  ),
  'nocache_hash' => '547151ed8a07f23dc4-98062808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_parent' => 0,
    'lang_locale' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ed8a0817abd0_36113013',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ed8a0817abd0_36113013')) {function content_51ed8a0817abd0_36113013($_smarty_tpl) {?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>

<!---->
<link rel="shortcut icon" type="image/x-icon" href="../../favicon.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/lib/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/lib/js/jquery/jquery-1.8.2.min.js"></script>                                                                      
<script type="text/javascript" src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/lib/js/jquery/jquery.lavalamp.min.js"></script>
<script type="text/javascript" src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/lib/js/jquery/jquery.easing.1.3.js"></script>                                                                     
<script type="text/javascript" src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/lib/js/jquery/jquery.easing.compatibility.js"></script>
<script type="text/javascript" src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/lib/js/jquery/jquery-cookie-master/jquery.cookie.js">
</script>

<!--[if lt IE 8]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
<![endif]-->

</head>
<body>
<div id="header">
<a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
" class="logo">
  <img src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/images/logo.png" alt="fancystudio" width="161" height="29" />
</a>

<?php echo MenuManager::function_plugin(array('template'=>'menu2','childrenof'=>$_smarty_tpl->tpl_vars['lang_parent']->value,'lang'=>$_smarty_tpl->tpl_vars['lang_locale']->value),$_smarty_tpl);?>

</div><!-- end header --> 
<div id="baner-color">
  <div class="banerGetFancy"> 
      <div class="skaredaZena"></div>
      <div class="peknaZena"></div>
           
     <div class="getFancyButtonBox">
      <a href="javascript:void(0)" class="getFancyButton contactIsSet">     </a>
      </div>
	</div><!-- end baner--> 
	<div id="baner"> 
      
	</div><!-- end baner--> 
    
	</div><!-- end baner-color --> 

<div id="footer">
<div id="socialmedia"><a class="fb-icon" href="#"><img src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/images/fb-icon.jpg" alt="" /></a> <a class="tw-icon" target="_blank" href="https://twitter.com/fancy_studio"><img src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/images/tw-icon.jpg" alt="" /></a> 
<!--<a class="li-icon" href="#"><img src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/images/in-icon.jpg" alt="" /></a>-->
</div>
<div id="copyright"><a onclick="window.open(this.href, 'OffSite').focus(); return false;" href="http://www.fancy-studio.sk"> <img class="footer_img" src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/images/fancy-logo.jpg" alt="fancy studio" width="89" height="16" /></a> <span id="footertext">Copyright fancystudio.sk © 2012 All rights reserved.</span></div>
</div>
<!-- end footer-->
<div id="fb-root"></div>

<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/cs_CZ/all.js#xfbml=1&status=0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30353154-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
<?php }} ?>