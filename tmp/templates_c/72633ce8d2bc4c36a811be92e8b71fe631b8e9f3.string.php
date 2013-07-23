<?php /* Smarty version Smarty-3.1.12, created on 2013-07-22 21:38:26
         compiled from "72633ce8d2bc4c36a811be92e8b71fe631b8e9f3" */ ?>
<?php /*%%SmartyHeaderCode:2932951ed8a32d852d4-75633983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72633ce8d2bc4c36a811be92e8b71fe631b8e9f3' => 
    array (
      0 => '72633ce8d2bc4c36a811be92e8b71fe631b8e9f3',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2932951ed8a32d852d4-75633983',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51ed8a32d99c47_74003931',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ed8a32d99c47_74003931')) {function content_51ed8a32d99c47_74003931($_smarty_tpl) {?><div></div>
  <style type="text/css">
    .peknaZena{
      visibility:hidden;
    }
    .skaredaZena{
      height: 386px;
    }
  </style>
      <script type="text/javascript">
      $(".getFancyButton").one("click",function(){
        $(".peknaZena").css("visibility","visible");
        $(".skaredaZena").css("height","517px");
        hideSkaredaZena();
        $.post("ajax.php")
          .done(function() {   
          })
          .fail(function() { console.log("error"); }); 
      }); 
    </script>
    
<script type="text/javascript" src="lib/js/jquery/isotope-master/jquery.isotope.min.js"></script>
<script type="text/javascript" src="lib/js/jquery/jquery.bxSlider/jquery.bxSlider.min.js"></script>
<script type="text/javascript" src="lib/js/referencie.js"></script>
<div id="referencesAndContactForm">
<div class="slider"><div> <div class="lang_help hide">en</div>
<div class="form_name_help hide">Your name</div> 
<div class="form_company_help hide">Company (optional)</div> 
<div class="form_email_help hide">Your email</div> 
<div class="form_phone_help hide">Your phone number (optional)</div>
<div class="form_text_help hide">Your message...</div>
<div class="form_message_send_help hide">Your message was send</div>
<div class="form_send_incorect_help hide">Your message was not send</div>
<div class="form_your_message_help hide">Your message</div>
<div class="form_your_phone_help hide">Your phone</div>
<div class="form_mandatory_help hide">Some of the mandatory field(s) were filled incorrectly</div>
<div class="form_unfilled_help hide">Some of the mandatory field(s) was unfilled, or they were filled in incorrectly</div>
<div class="form_fancy_solution_help hide">i want fancy solution!</div>
<div class="form_back_services_help hide">back to services</div>
<div class="form_references_help hide">references</div>
<div class="form_top_references_help hide">show top references</div>
<div class="form_back_reference_help hide">back to references</div>

<div id="contact">    
<div class="topReferencies2">
<h3><span>contact</span></h3>
<div style="clear: both; height:5px"></div>
<div class="kontakt-text">
<ul>
<li>would you like a calculation of a prize?</li>
<li>would you like to ask something?</li>
<li>or only say hi to girls from the banner?</li>
</ul>
<img src="images/just-do-it.png" alt="just-do-it" width="232" height="66" /></div>
<!-- kontakt-text -->

<div class="kontakt-formular">
<div style="display:none" class="email_send"></div>
<form action="" method="post">
<input class="form_name" type="text" name="name" value="Your name" /> 
<input class="form_company" type="text" name="company" value="Company (optional)" /> 
<input class="form_email" type="text" name="email" value="Your email" /> 
<input class="form_phone" type="text" name="phone" value="Your phone number (optional)" />
<textarea rows="20" cols="80" class="form_text" name="text">Your message...</textarea> 
<input class="form_button" type="button" onclick="formSubmit()" value="send" />
</form>
</div>
</div>
<div style="clear: both;">  <!-- kontakt-formular --></div>
</div> </div> <div style="padding-top: 0px; display: block;">
<div class="referenciesMain">
<h3><span>
references</span></h3>
   	
<ul class="referenciesMenu_en">
    <li class="click" name="*">all</li>
    <li>&nbsp;&nbsp;&nbsp;</li>
    <li class="click" name=".web">web pages</li>
    <li>&nbsp;&nbsp;&nbsp;</li>
    <li class="click" name=".eshop">eshops</li>
    <li>&nbsp;&nbsp;&nbsp;</li>
    <li class="click" name=".brand">branding</li>
    <li>&nbsp;&nbsp;&nbsp;</li>
    <li class="click" name=".print">print design</li>
</ul>
  <div class="referencies">   
           
      <div class="referencia web             brand       ">
        <a href="http://127.0.0.1/fancystudio/index.php?page=vgroup_en">
          <span class="work_zoom" style="opacity: 0;">v group</span>
          <img src="http://127.0.0.1/fancystudio/uploads/images/catalog_src/vgroup_en_src_1.jpg" title="v group" alt="v group"/>
          <span class="mask"> </span>
        </a>
      </div>                                
           
      <div class="referencia web             brand       ">
        <a href="http://127.0.0.1/fancystudio/index.php?page=es-site_en">
          <span class="work_zoom" style="opacity: 0;">es site</span>
          <img src="http://127.0.0.1/fancystudio/uploads/images/catalog_src/es-site_en_src_1.jpg" title="es site" alt="es site"/>
          <span class="mask"> </span>
        </a>
      </div>                                
           
      <div class="referencia       eshop       brand       ">
        <a href="http://127.0.0.1/fancystudio/index.php?page=e-beauty_en">
          <span class="work_zoom" style="opacity: 0;">e-beauty</span>
          <img src="http://127.0.0.1/fancystudio/uploads/images/catalog_src/e-beauty_en_src_1.jpg" title="e-beauty" alt="e-beauty"/>
          <span class="mask"> </span>
        </a>
      </div>                                
           
      <div class="referencia web             brand       ">
        <a href="http://127.0.0.1/fancystudio/index.php?page=ecohaus_en">
          <span class="work_zoom" style="opacity: 0;">ecohaus</span>
          <img src="http://127.0.0.1/fancystudio/uploads/images/catalog_src/ecohaus_en_src_1.jpg" title="ecohaus" alt="ecohaus"/>
          <span class="mask"> </span>
        </a>
      </div>                                
           
      <div class="referencia web             brand       ">
        <a href="http://127.0.0.1/fancystudio/index.php?page=fitkrabicky_en">
          <span class="work_zoom" style="opacity: 0;">fitkrabicky</span>
          <img src="http://127.0.0.1/fancystudio/uploads/images/catalog_src/fitkrabicky_en_src_1.jpg" title="fitkrabicky" alt="fitkrabicky"/>
          <span class="mask"> </span>
        </a>
      </div>                                
           
      <div class="referencia web                   print ">
        <a href="http://127.0.0.1/fancystudio/index.php?page=pigis_en">
          <span class="work_zoom" style="opacity: 0;">pigis</span>
          <img src="http://127.0.0.1/fancystudio/uploads/images/catalog_src/pigis_en_src_1.jpg" title="pigis" alt="pigis"/>
          <span class="mask"> </span>
        </a>
      </div>                                
           
      <div class="referencia web                   print ">
        <a href="http://127.0.0.1/fancystudio/index.php?page=steak-house_en">
          <span class="work_zoom" style="opacity: 0;">steak house</span>
          <img src="http://127.0.0.1/fancystudio/uploads/images/catalog_src/steak-house_en_src_1.jpg" title="steak house" alt="steak house"/>
          <span class="mask"> </span>
        </a>
      </div>                                
           
      <div class="referencia web             brand       ">
        <a href="http://127.0.0.1/fancystudio/index.php?page=conparius_en">
          <span class="work_zoom" style="opacity: 0;">conparius</span>
          <img src="http://127.0.0.1/fancystudio/uploads/images/catalog_src/conparius_en_src_1.jpg" title="conparius" alt="conparius"/>
          <span class="mask"> </span>
        </a>
      </div>                                
           
      <div class="referencia web             brand       ">
        <a href="http://127.0.0.1/fancystudio/index.php?page=domoglass_en">
          <span class="work_zoom" style="opacity: 0;">domoglass</span>
          <img src="http://127.0.0.1/fancystudio/uploads/images/catalog_src/domoglass_en_src_1.jpg" title="domoglass" alt="domoglass"/>
          <span class="mask"> </span>
        </a>
      </div>                                
           
      <div class="referencia       eshop       brand       ">
        <a href="http://127.0.0.1/fancystudio/index.php?page=online-drogeria_en">
          <span class="work_zoom" style="opacity: 0;">online-drogeria</span>
          <img src="http://127.0.0.1/fancystudio/uploads/images/catalog_src/online-drogeria_en_src_1.jpg" title="online-drogeria" alt="online-drogeria"/>
          <span class="mask"> </span>
        </a>
      </div>                                
           
      <div class="referencia                   print ">
        <a href="http://127.0.0.1/fancystudio/index.php?page=cd-cover_en">
          <span class="work_zoom" style="opacity: 0;">CD cover</span>
          <img src="http://127.0.0.1/fancystudio/uploads/images/catalog_src/cd-cover_en_src_1.jpg" title="CD cover" alt="CD cover"/>
          <span class="mask"> </span>
        </a>
      </div>                                
           
      <div class="referencia web       eshop             ">
        <a href="http://127.0.0.1/fancystudio/index.php?page=placejustforyou_en">
          <span class="work_zoom" style="opacity: 0;">placejustforyou</span>
          <img src="http://127.0.0.1/fancystudio/uploads/images/catalog_src/placejustforyou_en_src_1.jpg" title="placejustforyou" alt="placejustforyou"/>
          <span class="mask"> </span>
        </a>
      </div>                                
      </div>
</div>
</div></div>
</div>
<?php }} ?>