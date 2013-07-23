<?php /* Smarty version Smarty-3.1.12, created on 2013-07-22 21:37:33
         compiled from "C:\wamp\www\fancystudio\admin\themes\OneEleven\templates\messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2040051ed89fd993be3-65049207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e7758fda9261a74673058af50bf171cc76fe259' => 
    array (
      0 => 'C:\\wamp\\www\\fancystudio\\admin\\themes\\OneEleven\\templates\\messages.tpl',
      1 => 1374437902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2040051ed89fd993be3-65049207',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'messages' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ed89fda0f3a6_77172381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ed89fda0f3a6_77172381')) {function content_51ed89fda0f3a6_77172381($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&$_smarty_tpl->tpl_vars['errors']->value[0]!=''){?><aside class="message pageerrorcontainer" role="alert"><?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['error']->value){?><p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><?php }?><?php } ?></aside><?php }?><?php if (isset($_smarty_tpl->tpl_vars['messages']->value)&&$_smarty_tpl->tpl_vars['messages']->value[0]!=''){?><aside class="message pagemcontainer" role="status"><?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['message']->value){?><p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p><?php }?><?php } ?></aside><?php }?>
<?php }} ?>