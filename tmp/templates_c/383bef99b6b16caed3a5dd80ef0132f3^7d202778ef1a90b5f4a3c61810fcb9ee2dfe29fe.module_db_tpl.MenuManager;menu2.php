<?php /* Smarty version Smarty-3.1.12, created on 2013-09-30 21:41:09
         compiled from "module_db_tpl:MenuManager;menu2" */ ?>
<?php /*%%SmartyHeaderCode:1306236155249d3d58190c4-12869903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d202778ef1a90b5f4a3c61810fcb9ee2dfe29fe' => 
    array (
      0 => 'module_db_tpl:MenuManager;menu2',
      1 => 1374319666,
      2 => 'module_db_tpl',
    ),
  ),
  'nocache_hash' => '1306236155249d3d58190c4-12869903',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menuparams' => 0,
    'count' => 0,
    'nodelist' => 0,
    'node' => 0,
    'classes' => 0,
    'liClass' => 0,
    'menuText' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5249d3d5975cf1_12790511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5249d3d5975cf1_12790511')) {function content_5249d3d5975cf1_12790511($_smarty_tpl) {?><?php if (!is_callable('smarty_function_repeat')) include '/Applications/MAMP/htdocs/fancystudio/plugins/function.repeat.php';
?> 

<?php if (isset($_smarty_tpl->tpl_vars['number_of_levels'])) {$_smarty_tpl->tpl_vars['number_of_levels'] = clone $_smarty_tpl->tpl_vars['number_of_levels'];
$_smarty_tpl->tpl_vars['number_of_levels']->value = 10000; $_smarty_tpl->tpl_vars['number_of_levels']->nocache = null; $_smarty_tpl->tpl_vars['number_of_levels']->scope = 0;
} else $_smarty_tpl->tpl_vars['number_of_levels'] = new Smarty_variable(10000, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['menuparams']->value['number_of_levels'])){?>
  <?php if (isset($_smarty_tpl->tpl_vars['number_of_levels'])) {$_smarty_tpl->tpl_vars['number_of_levels'] = clone $_smarty_tpl->tpl_vars['number_of_levels'];
$_smarty_tpl->tpl_vars['number_of_levels']->value = $_smarty_tpl->tpl_vars['menuparams']->value['number_of_levels']; $_smarty_tpl->tpl_vars['number_of_levels']->nocache = null; $_smarty_tpl->tpl_vars['number_of_levels']->scope = 0;
} else $_smarty_tpl->tpl_vars['number_of_levels'] = new Smarty_variable($_smarty_tpl->tpl_vars['menuparams']->value['number_of_levels'], null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['count']->value>0){?>
<ul class="lavaLampBottomStyle lamp">
<?php  $_smarty_tpl->tpl_vars['node'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['node']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nodelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['node']->key => $_smarty_tpl->tpl_vars['node']->value){
$_smarty_tpl->tpl_vars['node']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['node']->value->depth==1||$_smarty_tpl->tpl_vars['node']->value->depth==0){?>
<?php if ($_smarty_tpl->tpl_vars['node']->value->menutext=="Home"){?>
<?php if (isset($_smarty_tpl->tpl_vars['liClass'])) {$_smarty_tpl->tpl_vars['liClass'] = clone $_smarty_tpl->tpl_vars['liClass'];
$_smarty_tpl->tpl_vars['liClass']->value = 'home'; $_smarty_tpl->tpl_vars['liClass']->nocache = null; $_smarty_tpl->tpl_vars['liClass']->scope = 0;
} else $_smarty_tpl->tpl_vars['liClass'] = new Smarty_variable('home', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['menuText'])) {$_smarty_tpl->tpl_vars['menuText'] = clone $_smarty_tpl->tpl_vars['menuText'];
$_smarty_tpl->tpl_vars['menuText']->value = 'HOME'; $_smarty_tpl->tpl_vars['menuText']->nocache = null; $_smarty_tpl->tpl_vars['menuText']->scope = 0;
} else $_smarty_tpl->tpl_vars['menuText'] = new Smarty_variable('HOME', null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['node']->value->menutext=="Domov"){?>
<?php if (isset($_smarty_tpl->tpl_vars['liClass'])) {$_smarty_tpl->tpl_vars['liClass'] = clone $_smarty_tpl->tpl_vars['liClass'];
$_smarty_tpl->tpl_vars['liClass']->value = 'domov'; $_smarty_tpl->tpl_vars['liClass']->nocache = null; $_smarty_tpl->tpl_vars['liClass']->scope = 0;
} else $_smarty_tpl->tpl_vars['liClass'] = new Smarty_variable('domov', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['menuText'])) {$_smarty_tpl->tpl_vars['menuText'] = clone $_smarty_tpl->tpl_vars['menuText'];
$_smarty_tpl->tpl_vars['menuText']->value = 'DOMOV'; $_smarty_tpl->tpl_vars['menuText']->nocache = null; $_smarty_tpl->tpl_vars['menuText']->scope = 0;
} else $_smarty_tpl->tpl_vars['menuText'] = new Smarty_variable('DOMOV', null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['node']->value->menutext=="O nas"){?>
<?php if (isset($_smarty_tpl->tpl_vars['liClass'])) {$_smarty_tpl->tpl_vars['liClass'] = clone $_smarty_tpl->tpl_vars['liClass'];
$_smarty_tpl->tpl_vars['liClass']->value = 'onas'; $_smarty_tpl->tpl_vars['liClass']->nocache = null; $_smarty_tpl->tpl_vars['liClass']->scope = 0;
} else $_smarty_tpl->tpl_vars['liClass'] = new Smarty_variable('onas', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['menuText'])) {$_smarty_tpl->tpl_vars['menuText'] = clone $_smarty_tpl->tpl_vars['menuText'];
$_smarty_tpl->tpl_vars['menuText']->value = 'SLUŽBY'; $_smarty_tpl->tpl_vars['menuText']->nocache = null; $_smarty_tpl->tpl_vars['menuText']->scope = 0;
} else $_smarty_tpl->tpl_vars['menuText'] = new Smarty_variable('SLUŽBY', null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['node']->value->menutext=="Services"){?>
<?php if (isset($_smarty_tpl->tpl_vars['liClass'])) {$_smarty_tpl->tpl_vars['liClass'] = clone $_smarty_tpl->tpl_vars['liClass'];
$_smarty_tpl->tpl_vars['liClass']->value = 'services'; $_smarty_tpl->tpl_vars['liClass']->nocache = null; $_smarty_tpl->tpl_vars['liClass']->scope = 0;
} else $_smarty_tpl->tpl_vars['liClass'] = new Smarty_variable('services', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['menuText'])) {$_smarty_tpl->tpl_vars['menuText'] = clone $_smarty_tpl->tpl_vars['menuText'];
$_smarty_tpl->tpl_vars['menuText']->value = 'SERVICES'; $_smarty_tpl->tpl_vars['menuText']->nocache = null; $_smarty_tpl->tpl_vars['menuText']->scope = 0;
} else $_smarty_tpl->tpl_vars['menuText'] = new Smarty_variable('SERVICES', null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['node']->value->menutext=="Kontakt"){?>
<?php if (isset($_smarty_tpl->tpl_vars['liClass'])) {$_smarty_tpl->tpl_vars['liClass'] = clone $_smarty_tpl->tpl_vars['liClass'];
$_smarty_tpl->tpl_vars['liClass']->value = 'kontakt'; $_smarty_tpl->tpl_vars['liClass']->nocache = null; $_smarty_tpl->tpl_vars['liClass']->scope = 0;
} else $_smarty_tpl->tpl_vars['liClass'] = new Smarty_variable('kontakt', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['menuText'])) {$_smarty_tpl->tpl_vars['menuText'] = clone $_smarty_tpl->tpl_vars['menuText'];
$_smarty_tpl->tpl_vars['menuText']->value = 'KONTAKT'; $_smarty_tpl->tpl_vars['menuText']->nocache = null; $_smarty_tpl->tpl_vars['menuText']->scope = 0;
} else $_smarty_tpl->tpl_vars['menuText'] = new Smarty_variable('KONTAKT', null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['node']->value->menutext=="Contact"){?>
<?php if (isset($_smarty_tpl->tpl_vars['liClass'])) {$_smarty_tpl->tpl_vars['liClass'] = clone $_smarty_tpl->tpl_vars['liClass'];
$_smarty_tpl->tpl_vars['liClass']->value = 'contact'; $_smarty_tpl->tpl_vars['liClass']->nocache = null; $_smarty_tpl->tpl_vars['liClass']->scope = 0;
} else $_smarty_tpl->tpl_vars['liClass'] = new Smarty_variable('contact', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['menuText'])) {$_smarty_tpl->tpl_vars['menuText'] = clone $_smarty_tpl->tpl_vars['menuText'];
$_smarty_tpl->tpl_vars['menuText']->value = 'CONTACT'; $_smarty_tpl->tpl_vars['menuText']->nocache = null; $_smarty_tpl->tpl_vars['menuText']->scope = 0;
} else $_smarty_tpl->tpl_vars['menuText'] = new Smarty_variable('CONTACT', null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['node']->value->menutext=="Referencie"){?>
<?php if (isset($_smarty_tpl->tpl_vars['liClass'])) {$_smarty_tpl->tpl_vars['liClass'] = clone $_smarty_tpl->tpl_vars['liClass'];
$_smarty_tpl->tpl_vars['liClass']->value = 'portfolio'; $_smarty_tpl->tpl_vars['liClass']->nocache = null; $_smarty_tpl->tpl_vars['liClass']->scope = 0;
} else $_smarty_tpl->tpl_vars['liClass'] = new Smarty_variable('portfolio', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['menuText'])) {$_smarty_tpl->tpl_vars['menuText'] = clone $_smarty_tpl->tpl_vars['menuText'];
$_smarty_tpl->tpl_vars['menuText']->value = 'REFERENCIE'; $_smarty_tpl->tpl_vars['menuText']->nocache = null; $_smarty_tpl->tpl_vars['menuText']->scope = 0;
} else $_smarty_tpl->tpl_vars['menuText'] = new Smarty_variable('REFERENCIE', null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['node']->value->menutext=="References"){?>
<?php if (isset($_smarty_tpl->tpl_vars['liClass'])) {$_smarty_tpl->tpl_vars['liClass'] = clone $_smarty_tpl->tpl_vars['liClass'];
$_smarty_tpl->tpl_vars['liClass']->value = 'references'; $_smarty_tpl->tpl_vars['liClass']->nocache = null; $_smarty_tpl->tpl_vars['liClass']->scope = 0;
} else $_smarty_tpl->tpl_vars['liClass'] = new Smarty_variable('references', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['menuText'])) {$_smarty_tpl->tpl_vars['menuText'] = clone $_smarty_tpl->tpl_vars['menuText'];
$_smarty_tpl->tpl_vars['menuText']->value = 'REFERENCES'; $_smarty_tpl->tpl_vars['menuText']->nocache = null; $_smarty_tpl->tpl_vars['menuText']->scope = 0;
} else $_smarty_tpl->tpl_vars['menuText'] = new Smarty_variable('REFERENCES', null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['node']->value->parent==true||$_smarty_tpl->tpl_vars['node']->value->current==true){?>
  <?php if (isset($_smarty_tpl->tpl_vars['classes'])) {$_smarty_tpl->tpl_vars['classes'] = clone $_smarty_tpl->tpl_vars['classes'];
$_smarty_tpl->tpl_vars['classes']->value = 'current'; $_smarty_tpl->tpl_vars['classes']->nocache = null; $_smarty_tpl->tpl_vars['classes']->scope = 0;
} else $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable('current', null, 0);?>
  <li class="<?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
"><a class="<?php echo $_smarty_tpl->tpl_vars['liClass']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"><span><?php echo $_smarty_tpl->tpl_vars['menuText']->value;?>
</span></a></li>

<?php }else{ ?>
<li><a class="<?php echo $_smarty_tpl->tpl_vars['liClass']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"><span><?php echo $_smarty_tpl->tpl_vars['menuText']->value;?>
</span></a></li>

<?php }?>
<?php }?>
<?php } ?>
<?php echo smarty_function_repeat(array('string'=>"</ul>",'times'=>$_smarty_tpl->tpl_vars['node']->value->depth-1),$_smarty_tpl);?>

</ul>
<?php }?>
<?php }} ?>