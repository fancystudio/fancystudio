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
<div class="form_fancy_solution_help hide"><?= (($lang_parent == "sk") ? 'Chcem fancy riešenie!' : 'I want fancy solution!') ?></div>
<div class="form_back_services_help hide"><?= (($lang_parent == "sk") ? 'späť na služby' : 'back to services') ?></div>
<div class="form_references_help hide"><?= (($lang_parent == "sk") ? 'referencie' : 'references') ?></div>
<div class="form_top_references_help hide"><?= (($lang_parent == "sk") ? 'Zobraziť top referencie' : 'show top references') ?></div>
<div class="form_back_reference_help hide"><?= (($lang_parent == "sk") ? 'späť na referencie' : 'Back to references') ?></div>

<div id="contact" class="container">    
<div class="topReferencies2">
	<h3><span><?= (($lang_parent == "sk") ? 'kontakt' : 'contact') ?></span></h3>
	<div class="kontakt-text col-md-5">
	<p><?= (($lang_parent == "sk") ? 'fancystudio s.r.o.' : 'fancystudio s.r.o.') ?></p>
<p><?= (($lang_parent == "sk") ? 'Javornícka 2' : 'Javornícka 2') ?></p>
<p><?= (($lang_parent == "sk") ? '974 11  Banská Bystrica' : '974 11  Banská Bystrica') ?></p>
<p><?= (($lang_parent == "sk") ? 'IČO: 47395800' : 'IČO: 47395800') ?></p>
<p><?= (($lang_parent == "sk") ? 'DIČ: 202384896' : 'DIČ: 202384896') ?></p>
<p>&nbsp;</p>
<p><?= (($lang_parent == "sk") ? 'e-mail: info@fancystudio.sk' : 'e-mail: info@fancystudio.sk') ?></p>
<p><?= (($lang_parent == "sk") ? 'tel: 0907 806 323 / 0903 284 642' : 'tel: 0907 806 323 / 0903 284 642') ?></p>
<ul>
<li><?= (($lang_parent == "sk") ? 'máte záujem o cenovú kalkuláciu?' : 'would you like a calculation of a prize?') ?></li>
<li><?= (($lang_parent == "sk") ? 'chcete sa niečo opýtať?' : 'would you like to ask something?') ?></li>
<li><?= (($lang_parent == "sk") ? 'alebo len pozdraviť baby z baneru?' : 'or only say hi to girls from the banner?') ?></li>
</ul>

		

	<!--<img src="images/just-do-it.png" alt="just-do-it" width="232" height="66" />-->
	</div><!-- kontakt-text -->

<div class="kontakt-formular col-md-7">
<div style="display:none" class="email_send"></div>
	<form action="" method="post">
	<div class="row">
	<div class="col-md-6">
	<input class="form_name form-control" type="text" name="name" value="<?= (($lang_parent == "sk") ? 'Vaše meno' : 'Your name') ?>" /> 
	</div>
	
	<div class="col-md-6">
	<input class="form_company form-control" type="text" name="company" value="<?= (($lang_parent == "sk") ? 'Firma (nepovinné)' : 'Company (optional)') ?>" /> 
	</div>
	</div>
	
	<input class="form_email form-control" type="text" name="email" value="<?= (($lang_parent == "sk") ? 'Váš email' : 'Your email') ?>" /> 
	<input class="form_phone form-control" type="text" name="phone" value="<?= (($lang_parent == "sk") ? 'Váš telefón (nepovinné)' : 'Your phone number (optional)') ?>" />
	<textarea rows="5" class="form_text form-control" name="text"><?= (($lang_parent == "sk") ? 'Vaša správa...' : 'Your message...') ?></textarea> 
	<input class="form_button" type="button" onclick="formSubmit()" value="<?= (($lang_parent == "sk") ? 'odoslať' : 'send') ?>" />
	</form>
</div>
</div>
<div style="clear: both;">  <!-- kontakt-formular --></div>
</div>





