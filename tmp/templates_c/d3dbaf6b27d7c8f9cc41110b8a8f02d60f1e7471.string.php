<?php /* Smarty version Smarty-3.1.12, created on 2014-06-15 13:38:46
         compiled from "d3dbaf6b27d7c8f9cc41110b8a8f02d60f1e7471" */ ?>
<?php /*%%SmartyHeaderCode:876577807539d85c62fc858-35965200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3dbaf6b27d7c8f9cc41110b8a8f02d60f1e7471' => 
    array (
      0 => 'd3dbaf6b27d7c8f9cc41110b8a8f02d60f1e7471',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '876577807539d85c62fc858-35965200',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_539d85c6310950_18830954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539d85c6310950_18830954')) {function content_539d85c6310950_18830954($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 setcookie("womanIsChange","",time()-3600); unset($_COOKIE["womanIsChange"]); <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo cms_user_tag_womanChange(array(),$_smarty_tpl);?>

<script type="text/javascript" src="lib/js/jquery/jquery.bxSlider/jquery.bxSlider.min.js"></script>
<script type="text/javascript" src="lib/js/index.js"></script>
<div id="referencesAndContactForm" class="container">
<div class="slider">
<div><?php echo cms_user_tag_kontakt(array(),$_smarty_tpl);?>
</div>
<div style="padding-top: 40px; display: block;"><?php echo cms_user_tag_top_ref(array(),$_smarty_tpl);?>
</div>
</div>
</div><?php }} ?>