<?php /* Smarty version Smarty-3.1.12, created on 2013-09-30 21:47:33
         compiled from "module_file_tpl:AceEditor;ace.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6458518205249d55577c270-46914381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27fbfa048b8af65f6c2682057e30bc3356a619db' => 
    array (
      0 => 'module_file_tpl:AceEditor;ace.tpl',
      1 => 1374437980,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '6458518205249d55577c270-46914381',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'textareaid' => 0,
    'ace_id' => 0,
    'ace_mod' => 0,
    'textareaname' => 0,
    'syntax_content' => 0,
    'width' => 0,
    'editorid' => 0,
    'height' => 0,
    'enable_ie' => 0,
    'theme' => 0,
    'mode' => 0,
    'fontsize' => 0,
    'full_line' => 0,
    'highlight_active' => 0,
    'highlight_selected' => 0,
    'show_invisibles' => 0,
    'persistent_hscroll' => 0,
    'show_gutter' => 0,
    'soft_wrap' => 0,
    'soft_tab' => 0,
    'enable_behaviors' => 0,
    'print_margin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5249d55594cdd6_79387772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5249d55594cdd6_79387772')) {function content_5249d55594cdd6_79387772($_smarty_tpl) {?><div class="ace_wrapper">
<div class="<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
_toolbar">
	<div class="ace_toolbar">
		<input type="radio" id="<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
_on" name="radio_<?php echo $_smarty_tpl->tpl_vars['ace_id']->value;?>
" checked="checked" /><label for="<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
_on"><?php echo $_smarty_tpl->tpl_vars['ace_mod']->value->Lang('on');?>
</label>
		<input type="radio" id="<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
_off" name="radio_<?php echo $_smarty_tpl->tpl_vars['ace_id']->value;?>
" /><label for="<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
_off"><?php echo $_smarty_tpl->tpl_vars['ace_mod']->value->Lang('off');?>
</label>
		<label><?php echo $_smarty_tpl->tpl_vars['ace_mod']->value->Lang('current_line');?>
:</label><input type="text" id="<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
_linenum" class="input wide" name="ace_linenum" value="" readonly="readonly" />
		<label><?php echo $_smarty_tpl->tpl_vars['ace_mod']->value->Lang('total_lines');?>
:</label><input type="text" id="<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
_totallines" class="input" name="ace_goline" value="" readonly="readonly" />
		<label><?php echo $_smarty_tpl->tpl_vars['ace_mod']->value->Lang('go_line');?>
:</label><input type="text" id="<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
_goline" class="input" name="ace_goline" value="" />
		<label><?php echo $_smarty_tpl->tpl_vars['ace_mod']->value->Lang('keybindings');?>
:</label>
		<input type="radio" id="<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
_ace" name="radio2_<?php echo $_smarty_tpl->tpl_vars['ace_id']->value;?>
" checked="checked" value="null" /><label for="<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
_ace"><?php echo $_smarty_tpl->tpl_vars['ace_mod']->value->Lang('ace');?>
</label>
		<input type="radio" id="<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
_vim" name="radio2_<?php echo $_smarty_tpl->tpl_vars['ace_id']->value;?>
" value="vim" /><label for="<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
_vim"><?php echo $_smarty_tpl->tpl_vars['ace_mod']->value->Lang('vim');?>
</label>
		<input type="radio" id="<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
_emacs" name="radio2_<?php echo $_smarty_tpl->tpl_vars['ace_id']->value;?>
" value="emacs" /><label for="<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
_emacs"><?php echo $_smarty_tpl->tpl_vars['ace_mod']->value->Lang('emacs');?>
</label>
	</div>
</div>
<textarea id="<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['textareaname']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['syntax_content']->value;?>
</textarea>
</div>
<style type="text/css">.ace_wrapper textarea {min-width: <?php echo $_smarty_tpl->tpl_vars['width']->value;?>
em;width: 100%;}#<?php echo $_smarty_tpl->tpl_vars['editorid']->value;?>
 {position: relative;width: <?php echo $_smarty_tpl->tpl_vars['width']->value;?>
em;height: <?php echo $_smarty_tpl->tpl_vars['height']->value;?>
em;background: #fefefe;}#<?php echo $_smarty_tpl->tpl_vars['editorid']->value;?>
.fullscreen {position: fixed;z-index: 9999;margin:0;left:0;top:0;}</style>

<script type="text/javascript">
jQuery(function($) {
	if(!window.ace) return;
	if(navigator.userAgent.match(/(iPod|iPhone|iPad)/)) return; <?php if ($_smarty_tpl->tpl_vars['enable_ie']->value=='false'){?>
	
	if($.browser.msie) return; <?php }?>
	
	// SETTINGS 
	// create editor
	$('#<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
').before('<div id="<?php echo $_smarty_tpl->tpl_vars['editorid']->value;?>
" />');
	// init editor
	var editor   = ace.edit('<?php echo $_smarty_tpl->tpl_vars['editorid']->value;?>
');
	var textarea = $('#<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
').hide();
	var vim 	 = require('ace/keyboard/vim').handler;
	var emacs 	 = require('ace/keyboard/emacs').handler;
	
	// set theme
	editor.setTheme('ace/theme/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
');
	// set highlighter mode 
	<?php if ($_smarty_tpl->tpl_vars['mode']->value!='plain'){?>	
	editor.getSession().setMode('ace/mode/<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
'); <?php }?>
	// set fontsize
	$('#<?php echo $_smarty_tpl->tpl_vars['editorid']->value;?>
').css('font-size', '<?php echo $_smarty_tpl->tpl_vars['fontsize']->value;?>
');
	// full line selection
	editor.setSelectionStyle('<?php echo $_smarty_tpl->tpl_vars['full_line']->value;?>
');
	// highlight active line
	editor.setHighlightActiveLine(<?php echo $_smarty_tpl->tpl_vars['highlight_active']->value;?>
);
	// highlight selected word
	editor.setHighlightSelectedWord(<?php echo $_smarty_tpl->tpl_vars['highlight_selected']->value;?>
);
	// show invisibles
	editor.setShowInvisibles(<?php echo $_smarty_tpl->tpl_vars['show_invisibles']->value;?>
);
	// persistent hscroll
	editor.renderer.setHScrollBarAlwaysVisible(<?php echo $_smarty_tpl->tpl_vars['persistent_hscroll']->value;?>
);
	// show gutter
	editor.renderer.setShowGutter(<?php echo $_smarty_tpl->tpl_vars['show_gutter']->value;?>
);
	<?php if ($_smarty_tpl->tpl_vars['soft_wrap']->value!='off'){?>
	//  soft wrap
	editor.getSession().setUseWrapMode(true);
	editor.getSession().setWrapLimitRange(<?php echo $_smarty_tpl->tpl_vars['soft_wrap']->value;?>
); <?php }?>
	// set soft tab
	editor.getSession().setUseSoftTabs(<?php echo $_smarty_tpl->tpl_vars['soft_tab']->value;?>
);
	//set behviours
	editor.setBehavioursEnabled(<?php echo $_smarty_tpl->tpl_vars['enable_behaviors']->value;?>
);
	// set print margin
	editor.setShowPrintMargin(<?php echo $_smarty_tpl->tpl_vars['print_margin']->value;?>
);
	// allows @ symbol on mac
	editor.commands.removeCommand('fold');
	
	// FUNCTIONS
	// toggle highlighter on/off
	$('.ace_toolbar').buttonset();
	// resize ace with jui
	$('#<?php echo $_smarty_tpl->tpl_vars['editorid']->value;?>
').resizable({
		stop: function (event, ui) {
			editor.renderer.onResize(true);
			editor.renderer.updateFull();
			editor.focus();
		},
		ghost: true
	});	
	// bind ctrl+enter to full screen mode.
	editor.commands.addCommand({
		name: 'fullScreenEditing',
		bindKey: {
			win: 'Ctrl-Return',
			mac: 'Command-Return'
		},
		exec: function (env, args, request) {
			var editorDiv = $('#<?php echo $_smarty_tpl->tpl_vars['editorid']->value;?>
');
			if(editorDiv.hasClass('fullscreen')) {
				// shut down full screen
				editorDiv.removeClass('fullscreen');
				var tmp = editorDiv.data();
				editorDiv.width(tmp.origWidth);
				editorDiv.height(tmp.origHeight);
			} else {
				// turn on full screen
				editorDiv.addClass('fullscreen');
				editorDiv.data('origWidth', editorDiv.width());
				editorDiv.data('origHeight', editorDiv.height());
				editorDiv.width($(window).width() * 0.999);
				editorDiv.height($(window).height() * 0.99);
			}
			editor.renderer.onResize(true);
			editor.renderer.updateFull();
			editor.focus();
			//editor.refresh();
		}
	});
	// Save shortcut
	editor.commands.addCommand({
		name: 'mysave',
		bindKey: {
			win: 'Ctrl-S',
			mac: 'Command-S'
		},
		exec: function (env, args, request) {
			// update the text area field.
			var text = editor.getSession().getValue();
			textarea.val(text);
			// find the parent form. and a child button named 'apply', and click it.
			$('#<?php echo $_smarty_tpl->tpl_vars['editorid']->value;?>
').closest('form').find('[name$="apply"]').first().click();
		}
	});
	// set keybindings
	var keybindings = null;
	$('.<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
_toolbar input[type="radio"]').click(function () {
		if($('#<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
_ace').is(':checked')) {
			var keybindings = null;
		} else if ($('#<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
_vim').is(':checked')) {
			var keybindings = vim;
		} else if ($('#<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
_emacs').is(':checked')) {
			var keybindings = emacs;
		}
		editor.setKeyboardHandler(keybindings);
	});
	// toggle editor
	$('.<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
_toolbar input[type="radio"]').click(function () {
		if($('#<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
_off').is(':checked')) {
			$('#<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
').show();
			$('#<?php echo $_smarty_tpl->tpl_vars['editorid']->value;?>
').hide();
		} else {
			$('#<?php echo $_smarty_tpl->tpl_vars['editorid']->value;?>
').show();
			$('#<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
').hide();
		}
	});
	// current line
	editor.getSession().selection.on('changeCursor', function() {
		// Show current line and column
		position = editor.selection.getCursor();
		$('#<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
_linenum').val('<?php echo $_smarty_tpl->tpl_vars['ace_mod']->value->Lang('line');?>
:' + (position.row+1) + ' <?php echo $_smarty_tpl->tpl_vars['ace_mod']->value->Lang('column');?>
: ' + (position.column+1));
	});
	// total count of lines
	editor.getSession().on('change', function() { 
		total = editor.session.getLength();
		$('#<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
_totallines').val(total);
	});	
	// go to line
	$('form').find('.input').keypress(function(e){
		if ( e.which == 13 ) {
			editor.gotoLine($('#<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
_goline').val());
			return false; // prevent submitting
		}
	}); 
	// make it working within tabs
	var tabs = jQuery('#navt_tabs');
	if(tabs.length === 0) {
		tabs = jQuery('#page_tabs');
	}
	tabs.find('div').bind('click', function () {
		editor.resize();
		editor.focus();
	});	
	
	// SAVE VALUES 
	// get the value from textarea
	var intialData = $('#<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
').val();
	editor.getSession().setValue(intialData);
	// ... everytime it changes
	$('#<?php echo $_smarty_tpl->tpl_vars['textareaid']->value;?>
').change(function () {
		editor.getSession().setValue(textarea.val());
	});
	// Update the textarea on change
	editor.getSession().on('change', function () {
		// Get the value from the editor and place it into the textarea.
		var text = editor.getSession().getValue();
		textarea.val(text);
	});
});
</script><?php }} ?>