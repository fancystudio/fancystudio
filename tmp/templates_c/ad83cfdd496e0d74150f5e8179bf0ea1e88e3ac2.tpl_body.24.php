<?php /* Smarty version Smarty-3.1.12, created on 2013-07-22 21:38:16
         compiled from "tpl_body:24" */ ?>
<?php /*%%SmartyHeaderCode:1011051ed89ecdebb77-94962321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad83cfdd496e0d74150f5e8179bf0ea1e88e3ac2' => 
    array (
      0 => 'tpl_body:24',
      1 => 1374521893,
      2 => 'tpl_body',
    ),
  ),
  'nocache_hash' => '1011051ed89ecdebb77-94962321',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ed89ece44947_29765206',
  'variables' => 
  array (
    'lang_parent' => 0,
    'lang_locale' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ed89ece44947_29765206')) {function content_51ed89ece44947_29765206($_smarty_tpl) {?><?php if (!is_callable('smarty_function_root_url')) include 'C:\\wamp\\www\\fancystudio\\plugins\\function.root_url.php';
?>
<body>
<div id="header">
<a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
" class="logo">
  <img src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/images/logo.png" alt="fancystudio" width="161" height="29" />
</a>
<?php echo MleCMS::function_plugin(array('action'=>"langs"),$_smarty_tpl);?>

<?php echo MenuManager::function_plugin(array('template'=>'menu2','childrenof'=>$_smarty_tpl->tpl_vars['lang_parent']->value,'lang'=>$_smarty_tpl->tpl_vars['lang_locale']->value),$_smarty_tpl);?>

</div><!-- end header --> 
<div id="baner-color">
  <div class="banerGetFancy"> 
      <div class="skaredaZena"></div>
      <div class="peknaZena"></div>
           <?php echo MleCMS::function_plugin(array('name'=>"block_uvodnyText"),$_smarty_tpl);?>

     <div class="getFancyButtonBox">
      <a href="javascript:void(0)" class="getFancyButton contactIsSet">     <?php echo MleCMS::function_plugin(array('name'=>"snippet_chcemFancy"),$_smarty_tpl);?>
</a>
      </div>
	</div><!-- end baner--> 
	<div id="baner"> 
      
	</div><!-- end baner--> 
    
	</div><!-- end baner-color --> 
<?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
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