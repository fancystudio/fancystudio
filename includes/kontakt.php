<?
$gCms = cmsms();
$smarty = $gCms->GetSmarty();
$lang_parent = $smarty->get_template_vars('lang_parent');
?>
<div class="lang_help hide"><?=$lang_parent?></div>
<div class="form_name_help hide"><?= (($lang_parent == "sk") ? 'Vaše meno' : 'Your name') ?></div> 
<div class="form_company_help hide"><?= (($lang_parent == "sk") ? 'Firma (nepovinné)' : 'Company (optional)') ?></div> 
<div class="form_email_help hide"><?= (($lang_parent == "sk") ? 'Váš email' : 'Your email') ?></div> 
<div class="form_phone_help hide"><?= (($lang_parent == "sk") ? 'Váš telefón (nepovinné)' : 'Your phone number (optional)') ?></div>
<div class="form_text_help hide"><?= (($lang_parent == "sk") ? 'Vaša správa...' : 'Your message...') ?></div>
<div class="form_message_send_help hide"><?= (($lang_parent == "sk") ? 'Váša správa bola odoslaná' : 'Your message was send') ?></div>
<div class="form_send_incorect_help hide"><?= (($lang_parent == "sk") ? 'Váša správa sa nepodarila odoslať' : 'Your message was not send') ?></div>
<div class="form_your_message_help hide"><?= (($lang_parent == "sk") ? 'Vaša správa' : 'Your message') ?></div>
<div class="form_your_phone_help hide"><?= (($lang_parent == "sk") ? 'Váš telefón' : 'Your phone') ?></div>
<div class="form_mandatory_help hide"><?= (($lang_parent == "sk") ? 'Nasledujúci údaj, resp. údaje boli vyplnené nesprávne' : 'Some of the mandatory field(s) were filled incorrectly') ?></div>
<div class="form_unfilled_help hide"><?= (($lang_parent == "sk") ? 'Niektorý z povinných údajov ostal nevyplnený, alebo bol vyplnený nesprávne' : 'Some of the mandatory field(s) was unfilled, or they were filled in incorrectly') ?></div>
<div class="form_fancy_solution_help hide"><?= (($lang_parent == "sk") ? 'chcem fancy riešenie!' : 'i want fancy solution!') ?></div>
<div class="form_back_services_help hide"><?= (($lang_parent == "sk") ? 'späť na služby' : 'back to services') ?></div>
<div class="form_references_help hide"><?= (($lang_parent == "sk") ? 'referencie' : 'references') ?></div>
<div class="form_top_references_help hide"><?= (($lang_parent == "sk") ? 'zobraziť top referencie' : 'show top references') ?></div>
<div class="form_back_reference_help hide"><?= (($lang_parent == "sk") ? 'späť na referencie' : 'back to references') ?></div>

<div id="contact">    
<div class="topReferencies2">
<h3><span><?= (($lang_parent == "sk") ? 'kontakt' : 'contact') ?></span></h3>
<div style="clear: both; height:5px"></div>
<div class="kontakt-text">
<ul>
<li><?= (($lang_parent == "sk") ? 'máte záujem o cenovú kalkuláciu?' : 'would you like a calculation of a prize?') ?></li>
<li><?= (($lang_parent == "sk") ? 'chcete sa niečo opýtať?' : 'would you like to ask something?') ?></li>
<li><?= (($lang_parent == "sk") ? 'alebo len pozdraviť baby z baneru?' : 'or only say hi to girls from the banner?') ?></li>
</ul>
<img src="images/just-do-it.png" alt="just-do-it" width="232" height="66" /></div>
<!-- kontakt-text -->

<div class="kontakt-formular">
<div style="display:none" class="email_send"></div>
<form action="" method="post">
<input class="form_name" type="text" name="name" value="<?= (($lang_parent == "sk") ? 'Vaše meno' : 'Your name') ?>" /> 
<input class="form_company" type="text" name="company" value="<?= (($lang_parent == "sk") ? 'Firma (nepovinné)' : 'Company (optional)') ?>" /> 
<input class="form_email" type="text" name="email" value="<?= (($lang_parent == "sk") ? 'Váš email' : 'Your email') ?>" /> 
<input class="form_phone" type="text" name="phone" value="<?= (($lang_parent == "sk") ? 'Váš telefón (nepovinné)' : 'Your phone number (optional)') ?>" />
<textarea rows="20" cols="80" class="form_text" name="text"><?= (($lang_parent == "sk") ? 'Vaša správa...' : 'Your message...') ?></textarea> 
<input class="form_button" type="button" onclick="formSubmit()" value="<?= (($lang_parent == "sk") ? 'odoslať' : 'send') ?>" />
</form>
</div>
</div>
<div style="clear: both;">  <!-- kontakt-formular --></div>
</div>