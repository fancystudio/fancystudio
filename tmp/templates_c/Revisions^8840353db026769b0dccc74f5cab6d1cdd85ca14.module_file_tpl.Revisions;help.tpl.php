<?php /* Smarty version Smarty-3.1.12, created on 2013-07-22 21:37:10
         compiled from "module_file_tpl:Revisions;help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3079251ed89e6133117-46534400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8840353db026769b0dccc74f5cab6d1cdd85ca14' => 
    array (
      0 => 'module_file_tpl:Revisions;help.tpl',
      1 => 1374438037,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '3079251ed89e6133117-46534400',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rooturl' => 0,
    'pageback_url' => 0,
    'pageback_text' => 0,
    'donate' => 0,
    'mod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ed89e61aa881_68506480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ed89e61aa881_68506480')) {function content_51ed89e61aa881_68506480($_smarty_tpl) {?><script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['rooturl']->value;?>
/modules/Revisions/js/lytebox.js"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['rooturl']->value;?>
/modules/Revisions/css/lytebox.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['rooturl']->value;?>
/modules/Revisions/css/backend.css" type="text/css" />
<script type="text/javascript">
PAGEBACK_URL = '<?php echo $_smarty_tpl->tpl_vars['pageback_url']->value;?>
';
PAGEBACK_TEXT = '<?php echo $_smarty_tpl->tpl_vars['pageback_text']->value;?>
';
</script>

<?php echo $_smarty_tpl->tpl_vars['donate']->value;?>

<div id="page_tabs">
	<div id="general">
		<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('general');?>

	</div>
	<div id="permissions">
		<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('permissions');?>

	</div>
	<div id="about">
		<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('about');?>

	</div>
</div>
<div class="clearb"></div>
<div id="page_content">  
	<div id="general_c">
		<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('help_general');?>

	</div>
	<div id="permissions_c">
		<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('help_permissions');?>

	</div>
	<div id="about_c">
		<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('help_about');?>

	</div>  
</div><?php }} ?>