<?php /* Smarty version Smarty-3.1.12, created on 2013-07-22 21:37:08
         compiled from "module_file_tpl:AceEditor;help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3026651ed89e49b7629-21388217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df9a78df3b6cc90924b8dd875b17e0d57641a507' => 
    array (
      0 => 'module_file_tpl:AceEditor;help.tpl',
      1 => 1374437979,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '3026651ed89e49b7629-21388217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'help_general_title' => 0,
    'help_keyboardshortcuts_title' => 0,
    'help_frontend_title' => 0,
    'help_about_title' => 0,
    'module_path' => 0,
    'help_general_text' => 0,
    'help_keyboardshortcuts_content' => 0,
    'help_frontend_content' => 0,
    'help_about_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ed89e4a7cde2_07066888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ed89e4a7cde2_07066888')) {function content_51ed89e4a7cde2_07066888($_smarty_tpl) {?><div style="float:right;"><form action="https://www.paypal.com/cgi-bin/webscr" method="post"><input type="hidden" name="cmd" value="_s-xclick" /><input type="hidden" name="hosted_button_id" value="FLH2AN89UPPAG" /><input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal — The safer, easier way to pay online." style="background:none;border:none;" /><img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1" /></form></div><div id="page_tabs"><div id="general"><?php echo $_smarty_tpl->tpl_vars['help_general_title']->value;?>
</div><div id="shortcuts"><?php echo $_smarty_tpl->tpl_vars['help_keyboardshortcuts_title']->value;?>
</div><div id="frontend"><?php echo $_smarty_tpl->tpl_vars['help_frontend_title']->value;?>
</div><div id="about"><?php echo $_smarty_tpl->tpl_vars['help_about_title']->value;?>
</div></div><div class="clearb"></div><div id="page_content"><div id="general_c"><img style="float:right;margin:0 10px 10px 10px; border: 5px solid #f0f0f0;" src="<?php echo $_smarty_tpl->tpl_vars['module_path']->value;?>
/images/editor.jpg" alt="Editor" width="316" height="259" /><?php echo $_smarty_tpl->tpl_vars['help_general_text']->value;?>
<br style ="clear:both;" /></div><div id="shortcuts_c"><div class="pageoverflow"><?php echo $_smarty_tpl->tpl_vars['help_keyboardshortcuts_content']->value;?>
</div></div><div id="frontend_c"><div class="pageoverflow"><?php echo $_smarty_tpl->tpl_vars['help_frontend_content']->value;?>
<pre><code>
&lt;pre id="some-id"&gt
&lt;html&gt;
&lt;head&gt;
	&lt;style type="text/css"&gt;
	.text-layer {
		font-family: Monaco, "Courier New", monospace;
		font-size: 12px;
		cursor: text;
	}
	&lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
	&lt;h1 style="color:red"&gt;YES!&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;
&lt;/pre&gt;
		</code></pre></div></div><div id="about_c"><div class="pageoverflow"><?php echo $_smarty_tpl->tpl_vars['help_about_text']->value;?>
</div></div></div>
<?php }} ?>