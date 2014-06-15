<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.12, created on 2014-06-14 13:02:10
         compiled from "tpl_body:24" */ ?>
<?php /*%%SmartyHeaderCode:84773246539c2bb29a1539-57453296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.12, created on 2014-06-14 18:12:50
         compiled from "tpl_body:24" */ ?>
<?php /*%%SmartyHeaderCode:536959748539c60d8e153e1-68681927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> FETCH_HEAD
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad83cfdd496e0d74150f5e8179bf0ea1e88e3ac2' => 
    array (
      0 => 'tpl_body:24',
      1 => 1402762368,
      2 => 'tpl_body',
    ),
  ),
<<<<<<< HEAD
  'nocache_hash' => '84773246539c2bb29a1539-57453296',
=======
  'nocache_hash' => '536959748539c60d8e153e1-68681927',
>>>>>>> FETCH_HEAD
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_539c60d8e47800_77670394',
  'variables' => 
  array (
    'lang_parent' => 0,
    'lang_locale' => 0,
  ),
  'has_nocache_code' => false,
<<<<<<< HEAD
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_539c2bb29c6011_14918061',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539c2bb29c6011_14918061')) {function content_539c2bb29c6011_14918061($_smarty_tpl) {?><?php if (!is_callable('smarty_function_root_url')) include '/Applications/MAMP/htdocs/fancystudio/plugins/function.root_url.php';
=======
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539c60d8e47800_77670394')) {function content_539c60d8e47800_77670394($_smarty_tpl) {?><?php if (!is_callable('smarty_function_root_url')) include '/Applications/MAMP/htdocs/fancystudio/plugins/function.root_url.php';
>>>>>>> FETCH_HEAD
?>
    <body>
    <header>
		<div id="header" class="container">
		<a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
" class="logo">
		<img src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/images/logo.png" alt="fancystudio" width="161" height="29" />
		</a>
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid pull-right">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div><!--navbar-header-->
					
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<?php echo MenuManager::function_plugin(array('template'=>'menu2','childrenof'=>$_smarty_tpl->tpl_vars['lang_parent']->value,'lang'=>$_smarty_tpl->tpl_vars['lang_locale']->value),$_smarty_tpl);?>

						<?php echo MleCMS::function_plugin(array('action'=>"langs"),$_smarty_tpl);?>

					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div><!-- end header --> 
        </header>
		
		<div class="baner-wrapper">
		<div id="baner-color">
			<div class="banerGetFancy container"> 
                <div class="animSkareda animPekna" style="display:none"></div>
				<div class="skaredaZena"></div>
				<div class="peknaZena"></div>
				<?php echo MleCMS::function_plugin(array('name'=>"block_uvodnyText"),$_smarty_tpl);?>

				<div class="getFancyButtonBox">
					<a href="javascript:void(0)" class="getFancyButton contactIsSet">     <?php echo MleCMS::function_plugin(array('name'=>"snippet_chcemFancy"),$_smarty_tpl);?>
</a>
				</div>
			</div><!-- end banerGetFancy-->  
		</div><!-- end baner-color --> 
		</div><!-- baner wrapper-->
		
		<?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
		
		
		<div id="footer" class="container">
			<div id="socialmedia">
				<a class="fb-icon" href="#"><img src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/images/fb-icon.jpg" alt="" /></a> 
				<a class="tw-icon" target="_blank" href="https://twitter.com/fancy_studio"><img src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/images/tw-icon.jpg" alt="" /></a> 
				<!--<a class="li-icon" href="#"><img src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/images/in-icon.jpg" alt="" /></a>-->
			</div>
			
			
			<div id="copyright">
				<a onclick="window.open(this.href, 'OffSite').focus(); return false;" href="http://www.fancy-studio.sk"> 
					<img class="footer_img" src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/images/fancy-logo.jpg" alt="fancy studio" width="89" height="16" />
				</a> 
				<span id="footertext">Copyright fancystudio.sk © 2012 All rights reserved.</span>
			</div>
		</div><!-- end footer-->
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