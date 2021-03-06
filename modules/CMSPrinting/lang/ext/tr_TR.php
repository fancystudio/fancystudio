<?php
$lang['friendlyname'] = 'Printing';
$lang['description'] = 'This module is an easily customizable way of providing printer friendly pages for CMSms.
Alternatively a very basic PDF-file with the main content can be created on-the-fly.';
$lang['postinstall'] = 'The module was successfully installed';
$lang['confirmuninstall'] = 'Are you sure the module should be uninstalled?';
$lang['postuninstall'] = 'The module was successfully uninstalled';
$lang['linktemplate'] = 'Link Şablonu';
$lang['printtemplate'] = 'Yazdırma Şablonu';
$lang['templatesaved'] = 'The template was saved';
$lang['templatereset'] = 'The template was reset to its default value';
$lang['confirmresettemplate'] = 'Are you sure the template should be reset to its default value?';
$lang['reset'] = 'Reset to default';
$lang['save'] = 'Kaydet';
$lang['upgraded'] = 'has been upgraded to version %s';
$lang['savetemplate'] = 'Şablon kaydet';
$lang['savesettings'] = 'Ayarları kaydet';
$lang['template'] = 'Template';
$lang['notemplatecontent'] = 'No new template content given...';
$lang['defaultlinktext'] = 'Sayfayı yazdır';
$lang['backbuttontext'] = 'Geri';
$lang['overridestylereset'] = 'The override stylesheet has been reset';
$lang['overridestylesaved'] = 'The override stylesheet has been saved';
$lang['overridestyle'] = 'Override print stylesheet';
$lang['confirmresetstyle'] = 'Are you sure the stylesheet should be reset?';
$lang['stylesheet'] = 'Stylesheet';
$lang['help_text'] = 'Override the default text for the print/PDF link';
$lang['help_popup'] = 'Set to &#039;true&#039; and page for printing will by opened in new window.';
$lang['help_script'] = 'Set to &#039;true&#039; and in print page javascript will be used for automatically show the print-dialog';
$lang['help_showbutton'] = 'Set to &#039;true&#039; to show a graphical button';
$lang['help_class'] = 'Class for the link, defaults to &#039;noprint&#039;';
$lang['help_src_img'] = 'Show this image file instead of the default';
$lang['help_class_img'] = 'Class of <img> tag if showbutton is set';
$lang['help_more'] = 'Place additional options inside the <a> link';
$lang['help_onlyurl'] = 'Outputs just the url, not a complete link';
$lang['help_includetemplate'] = 'If set to &#039;true&#039; this options makes the print/pdf process the whole template, not just the main content. This probably requires some work on print-specific styles with the mediatype &#039;print&#039; enabled.';
$lang['help'] = '<b>What does this module do?</b>
<br/>
This allow you to insert a link in pages/templates which directs the 
visitor to a version of the page better suited for printing. It can also link
to an basic on-the-fly-generated pdf version of the page.
<br/>
Please note that unless the parameter <i>includetemplate=true</i> is used, only the main output of the page is outputted. And note
that the pdf-file outputted may not have much resemblance with you page, but should provide the content.
<br/><br/>
<b>How do I use this module?</b>
<br/>
Basically you install the module, access it&#039;s administration interface and review/change the templates for the
link and for the printable page
<br/>
In you page content or template you then insert something like:
<pre>
{cms_module module=&#039;printing&#039; <i>params</i>}
</pre>
or simply
<pre>
{print <i>params</i>}
</pre>
using the print-plugin
<br/>
';
$lang['utma'] = '156861353.266422364.1342828974.1342828974.1342829067.2';
$lang['utmb'] = '156861353.12.10.1342829067';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1342829067.2.2.utmcsr=feedburner|utmccn=Feed: cmsmadesimple/blog (CMS Made Simple)|utmcmd=feed';
?>