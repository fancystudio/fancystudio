<?php /* Smarty version Smarty-3.1.12, created on 2013-07-23 20:15:07
         compiled from "3c24244a5f00ee582990c54c6fbb6529153c9b6c" */ ?>
<?php /*%%SmartyHeaderCode:85174217151eec82b0ec898-34601561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c24244a5f00ee582990c54c6fbb6529153c9b6c' => 
    array (
      0 => '3c24244a5f00ee582990c54c6fbb6529153c9b6c',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '85174217151eec82b0ec898-34601561',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51eec82b105507_04000303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51eec82b105507_04000303')) {function content_51eec82b105507_04000303($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 setcookie("womanIsChange","",time()-3600); unset($_COOKIE["womanIsChange"]); <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo cms_user_tag_womanChange(array(),$_smarty_tpl);?>

<script type="text/javascript" src="lib/js/jquery/jquery.bxSlider/jquery.bxSlider.min.js"></script>
<script type="text/javascript" src="lib/js/index.js"></script>
<div id="referencesAndContactForm">
<div class="slider">
<div><?php echo cms_user_tag_kontakt(array(),$_smarty_tpl);?>
</div>
<div style="padding-top: 40px; display: block;"><?php echo cms_user_tag_top_ref(array(),$_smarty_tpl);?>
</div>
</div>
</div><?php }} ?>