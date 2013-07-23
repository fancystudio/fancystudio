<?php /* Smarty version Smarty-3.1.12, created on 2013-07-22 21:38:24
         compiled from "modules\Cataloger\templates\my\referencie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211851ed8a30764828-79291812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e74f97166a71aca6660c0aef2e623c2189217c9' => 
    array (
      0 => 'modules\\Cataloger\\templates\\my\\referencie.tpl',
      1 => 1374437985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211851ed8a30764828-79291812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ed8a30837d28_27973359',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ed8a30837d28_27973359')) {function content_51ed8a30837d28_27973359($_smarty_tpl) {?><?php echo cms_user_tag_womanChange(array(),$_smarty_tpl);?>

<script type="text/javascript" src="lib/js/jquery/isotope-master/jquery.isotope.min.js"></script>
<script type="text/javascript" src="lib/js/jquery/jquery.bxSlider/jquery.bxSlider.min.js"></script>
<script type="text/javascript" src="lib/js/referencie.js"></script>
<div id="referencesAndContactForm">
<div class="slider"><div> <?php echo cms_user_tag_kontakt(array(),$_smarty_tpl);?>
 </div> <div style="padding-top: 0px; display: block;">
<div class="referenciesMain">
<h3><span><?php echo MleCMS::function_plugin(array('name'=>"snippet_referencie"),$_smarty_tpl);?>
</span></h3>
   	<?php echo MleCMS::function_plugin(array('name'=>"block_referencieMenu"),$_smarty_tpl);?>

  <div class="referencies">   
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['numloop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['name'] = 'numloop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['numloop']['total']);
?>       
      <div class="referencia <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['numloop']['index']]['attrs']['web']=="Yes"){?>web <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['numloop']['index']]['attrs']['eshop']=="Yes"){?>eshop <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['numloop']['index']]['attrs']['brand']=="Yes"){?>brand <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['numloop']['index']]['attrs']['print']=="Yes"){?>print <?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['numloop']['index']]['link'];?>
">
          <span class="work_zoom" style="opacity: 0;"><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['numloop']['index']]['title'];?>
</span>
          <img src="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['numloop']['index']]['image_src'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['numloop']['index']]['title'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->getVariable('smarty')->value['section']['numloop']['index']]['title'];?>
"/>
          <span class="mask"> </span>
        </a>
      </div>                                
    <?php endfor; endif; ?>
  </div>
</div>
</div></div>
</div>
<?php }} ?>