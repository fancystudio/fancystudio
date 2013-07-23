<?php /* Smarty version Smarty-3.1.12, created on 2013-07-22 21:37:10
         compiled from "module_file_tpl:Revisions;header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1303551ed89e60dece8-03452164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50e3b0e86661246c8a877e583bba3c52d7ea27e7' => 
    array (
      0 => 'module_file_tpl:Revisions;header.tpl',
      1 => 1374438038,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '1303551ed89e60dece8-03452164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jquery_css' => 0,
    'moduledir' => 0,
    'admindir' => 0,
    'userkey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ed89e6116b65_08811149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ed89e6116b65_08811149')) {function content_51ed89e6116b65_08811149($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['jquery_css']->value)){?><?php echo $_smarty_tpl->tpl_vars['jquery_css']->value;?>
<?php }?>
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['moduledir']->value;?>
/css/backend.css" />
<script type="text/javascript">
<!--
var CMS_ADMIN_DIR = '<?php echo $_smarty_tpl->tpl_vars['admindir']->value;?>
';
var CMS_USER_KEY = '<?php echo $_smarty_tpl->tpl_vars['userkey']->value;?>
';
-->
</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['moduledir']->value;?>
/js/backend.js"></script><?php }} ?>