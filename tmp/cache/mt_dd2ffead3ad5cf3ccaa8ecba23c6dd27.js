
		//Creates a new plugin class and a custom listbox
		tinymce.create('tinymce.plugins.CMSLinkerPlugin', {
		createControl: function(n, cm) {
			switch (n) {
				case 'cmslinker':
					var c = cm.createMenuButton('cmslinker', {
						title : 'N&aacute;stroj na odkazy pre CMS',
						image : 'http://127.0.0.1/fancystudio/modules/MicroTiny/images/cmsmslink.gif',
						icons : false
					});

					c.onRenderMenu.add(function(c, m) {
							var mm = m.addMenu({title : '1 slovak'});
		
						mm.add({title : '1 slovak', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='slovak';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='sk'}\">"+sel+"</a>");
						}});
							mm.addSeparator();
		
						mm.add({title : '1.1 Domov', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Domov';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='domov'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '1.2 O nas', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='O nas';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='o-nas'}\">"+sel+"</a>");
						}});
							var mmm = mm.addMenu({title : '1.3 Referencie'});
		
						mmm.add({title : '1.3 Referencie', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Referencie';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='referencie'}\">"+sel+"</a>");
						}});
							mmm.addSeparator();
		
						mmm.add({title : '1.3.1 vgroup', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='vgroup';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='vgroup'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '1.3.2 es site', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='es site';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='es-site'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '1.3.3 e-beauty', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='e-beauty';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='e-beauty'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '1.3.4 ecohaus', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='ecohaus';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='ecohaus'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '1.3.5 fitkrabicky', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='fitkrabicky';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='fitkrabicky'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '1.3.6 pigis', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='pigis';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='pigis'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '1.3.7 steak house', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='steak house';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='steak-house'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '1.3.8 conparius', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='conparius';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='conparius'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '1.3.9 domoglass', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='domoglass';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='domoglass'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '1.3.10 online-drogeria', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='online-drogeria';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='online-drogeria'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '1.3.11 CD cover', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='CD cover';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='cd-cover'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '1.3.12 placejustforyou', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='placejustforyou';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='placejustforyou'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '1.4 Kontakt', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Kontakt';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='kontakt'}\">"+sel+"</a>");
						}});
							var mm = m.addMenu({title : '2 english'});
		
						mm.add({title : '2 english', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='english';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='en'}\">"+sel+"</a>");
						}});
							mm.addSeparator();
		
						mm.add({title : '2.1 Home', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Home';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='home'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '2.2 Services', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Services';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='about-us'}\">"+sel+"</a>");
						}});
							var mmm = mm.addMenu({title : '2.3 References'});
		
						mmm.add({title : '2.3 References', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='References';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='references'}\">"+sel+"</a>");
						}});
							mmm.addSeparator();
		
						mmm.add({title : '2.3.1 vgroup', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='vgroup';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='vgroup_en'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '2.3.2 es site', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='es site';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='es-site_en'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '2.3.3 e-beauty', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='e-beauty';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='e-beauty_en'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '2.3.4 ecohaus', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='ecohaus';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='ecohaus_en'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '2.3.5 fitkrabicky', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='fitkrabicky';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='fitkrabicky_en'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '2.3.6 pigis', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='pigis';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='pigis_en'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '2.3.7 steak house', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='steak house';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='steak-house_en'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '2.3.8 conparius', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='conparius';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='conparius_en'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '2.3.9 domoglass', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='domoglass';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='domoglass_en'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '2.3.10 online-drogeria', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='online-drogeria';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='online-drogeria_en'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '2.3.11 CD cover', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='CD cover';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='cd-cover_en'}\">"+sel+"</a>");
						}});
		
						mmm.add({title : '2.3.12 placejustforyou', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='placejustforyou';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='placejustforyou_en'}\">"+sel+"</a>");
						}});
		
						mm.add({title : '2.4 Contact', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='Contact';
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, "<a href=\"{cms_selflink href='contact'}\">"+sel+"</a>");
						}});
		
					});

					// Return the new menu button instance
					return c;
			}

			return null;
		}
		});

		// Register plugin with a short name
		tinymce.PluginManager.add('cmslinker', tinymce.plugins.CMSLinkerPlugin);

		 tinyMCE.init({ 
  
  mode : "exact",
  elements : "mt_content_en",
  body_class : "CMSMSBody",
      content_css : "",
    
  entity_encoding : "raw",
  button_tile_map : true, 

		
  theme : "advanced",
  skin : "o2k7",
  skin_variant : "black",
  theme_advanced_toolbar_location : "top",
  theme_advanced_toolbar_align : "left",
  visual : true,
	      
  accessibility_warnings : false,

  forced_root_block : '',      			
  fix_list_elements : true,
  verify_html : true,
  verify_css_classes : false,
  
  plugins : "paste,inlinepopups,cmslinker",
  
  paste_auto_cleanup_on_paste : true,
  paste_remove_spans : true,
  paste_remove_styles : true,
  theme_advanced_buttons1 : "undo,|,bold,italic,underline,|,cut,copy,paste,pastetext,removeformat,|,justifyleft,justifycenter,justifyright,justifyfull,|,bullist,numlist,|,cmslinker,link,unlink,|,formatselect",
  theme_advanced_buttons2 : "",
  theme_advanced_buttons3 : "",
  

  theme_advanced_blockformats : "p,div,h1,h2,h3,h4,h5,h6,blockquote,code",
  document_base_url : "http://127.0.0.1/fancystudio/",

  relative_urls : true,
  remove_script_host : true,
  language: "sk",
  dialog_type: "modal",
  apply_source_formatting : true  
	 

  ,file_browser_callback : 'CMSMSFilePicker'
  
});
  

function toggleMicroTiny(id) {
  if (!tinyMCE.getInstanceById(id))
    tinyMCE.execCommand('mceAddControl', false, id);
  else
    tinyMCE.execCommand('mceRemoveControl', false, id);
}
	
    
function CMSMSFilePicker (field_name, url, type, win) {
     
  var cmsURL = "http://127.0.0.1/fancystudio/admin/moduleinterface.php?mact=MicroTiny,,filepicker,0&_sx_=f3fc4475&type="+type+"&showtemplate=false";
  
  tinyMCE.activeEditor.windowManager.open({
  
    file : cmsURL,
    title : 'V&yacute;ber s&uacute;boru',
    width : '800',
    height : '500',
    resizable : "yes",
    scrollbars : "yes",
    inline : "yes",  
    close_previous : "no"
  
  }, {
    window : win,
    input : field_name
  });
  return false;
}

