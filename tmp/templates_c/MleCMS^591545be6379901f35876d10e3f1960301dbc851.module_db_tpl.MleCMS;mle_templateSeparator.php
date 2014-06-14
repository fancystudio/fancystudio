<?php /* Smarty version Smarty-3.1.12, created on 2014-06-14 00:10:51
         compiled from "module_db_tpl:MleCMS;mle_templateSeparator" */ ?>
<?php /*%%SmartyHeaderCode:1845818505539b76eb249232-31546313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '591545be6379901f35876d10e3f1960301dbc851' => 
    array (
      0 => 'module_db_tpl:MleCMS;mle_templateSeparator',
      1 => 1374322898,
      2 => 'module_db_tpl',
    ),
  ),
  'nocache_hash' => '1845818505539b76eb249232-31546313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langs_count' => 0,
    'langs' => 0,
    'l' => 0,
    'lang_href' => 0,
    'page_alias' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_539b76eb2a17d4_20528144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539b76eb2a17d4_20528144')) {function content_539b76eb2a17d4_20528144($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cms_selflink')) include '/Applications/MAMP/htdocs/fancystudio/plugins/function.cms_selflink.php';
?><?php if ($_smarty_tpl->tpl_vars['langs_count']->value){?>
    <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
    
<?php $_smarty_tpl->_capture_stack[0][] = array('default', "lang_href", null); ob_start(); ?><?php echo smarty_function_cms_selflink(array('href'=>$_smarty_tpl->tpl_vars['l']->value['alias']),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['lang_href']->value){?>
    <?php if ($_smarty_tpl->tpl_vars['page_alias']->value!=$_smarty_tpl->tpl_vars['l']->value['alias']){?>
        <a class="langSwitch" href="<?php echo $_smarty_tpl->tpl_vars['lang_href']->value;?>
">
            <?php if ($_smarty_tpl->tpl_vars['l']->value['name']=="slovak"){?>SK<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['l']->value['name']=="english"){?>EN<?php }?>
        </a>
    <?php }?>
<?php }?>
<?php } ?>
<?php }?><?php }} ?>