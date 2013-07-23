<?php
$lang['setup_flat_urls'] = 'Flat URLs are setup';
$lang['install_timezone'] = 'Some servers running php 5.3 have not set the timezone correctly.  Please select the appropriate timezone from the list before.  If this is not necessary on your server you may select &quot;None&quot;, you can always change this setting later in the config.php.';
$lang['timezone'] = 'Tidszone';
$lang['none'] = 'Ingen';
$lang['test_error_estrict'] = 'Testing error_reporting to ensure E_STRICT is disabled';
$lang['test_estrict_failed'] = 'E_STRICT er sl&aring;et til';
$lang['info_estrict_failed'] = 'Some libraries that CMSMS uses do not work well with E_STRICT.  Please disable this before continuing';
$lang['test_error_edeprecated'] = 'Testing error_reporting to ensure E_DEPRECATED is disabled';
$lang['test_edeprecated_failed'] = 'E_DEPRECATED er sl&aring;et til';
$lang['info_edeprecated_failed'] = 'If E_DEPRECATED is enabled in your error reporting users will see alot of warning messages that could effect the display and functionalty';
$lang['invalidemail'] = 'Den angivne email adresse er ikke gyldig';
$lang['empty_query'] = 'Tom foresp&oslash;rgsel? %s';
$lang['no_db_driver'] = 'Ingen kompatibel database driver fundet';
$lang['test_check_output_buffering'] = 'Kontrollerer output bufferin';
$lang['test_check_output_buffering_failed'] = 'Output buffering er sl&aring;et fra. Du vil muligvis ikke kunne benytte funktioner der kr&aelig;ver dette.';
$lang['phpinfo'] = 'Vis PHP information';
$lang['mod_security'] = 'Apache Mod sikkerhed';
$lang['test_check_tempnam'] = 'Kontrollerer for tempnam function';
$lang['test_check_db_drivers'] = 'DB drivere';
$lang['test_check_db_drivers_failed'] = 'Ingen DB drivere found';
$lang['test_check_register_globals'] = 'Kontrollerer for PHP register globals';
$lang['test_check_register_globals_failed'] = 'PHP register globals er aktiv. Af sikkerhedshensyn b&oslash;r dette v&aelig;re sl&aring;et fra';
$lang['test_check_disable_functions'] = 'Kontrollerer PHP funktioner der er sl&aring;et fra';
$lang['test_check_disable_functions_failed'] = 'Advarsel: dette er en list over funktioner der er sl&aring;et fra p&aring; din server';
$lang['install_admin_db_port'] = 'Database port';
$lang['install_admin_db_port_info'] = 'Hvis du ikke ved det, lad dette felt forblive blankt for at benytte standard-installingerne';
$lang['install_admin_db_socket'] = 'Database socket';
$lang['install_admin_db_socket_info'] = 'Ikke underst&oslash;ttet';
$lang['install_admin_frontendlang'] = 'Standard sprog for frontend. Dette angiver lokale installer for diverse dato funktioner etc.';
$lang['install_default_encoding'] = 'I stort set alle situationer skal default_encoding v&aelig;re utf-8.';
$lang['installer_done'] = '[f&aelig;rdig]';
$lang['installer_failed'] = '[fejlede]';
$lang['create_permission'] = 'Opretter tilladelse';
$lang['add_column_sql'] = 'Tilf&oslash;jer kolonne til %s tabellen ...';
$lang['update_table_sql'] = 'Opdaterer tabellen %s ...';
$lang['installing_module'] = 'Installerer modul %s ...';
$lang['updating_schema_version'] = 'Opdater til skema version %s ...';
$lang['upgrade_config'] = 'Opgraderer config.php';
$lang['upgrade_config_info'] = 'config opgradering';
$lang['upgrade_failed_again'] = 'En eller flere opgraderinger fejlede. L&oslash;s venligst problemet og klik p&aring; knappen herunder for at pr&oslash;ve igen.';
$lang['upgrade_cache_dirs'] = 'T&oslash;mmer cache mapper';
$lang['cannot_clean_cache_dirs'] = 'Kan ikke t&oslash;mme cache mapper!';
$lang['upgrade_schema'] = 'Opgrad&eacute;r skema';
$lang['need_upgrade_schema'] = 'CMS skal opgraderes.<br/>Du k&oslash;rer lige nu skema version %s og du skal opgraderes til version %s';
$lang['schema_ok'] = 'CMS-databasen er opdateret. Benytter skema version %s';
$lang['noneed_upgrade_schema'] = 'CMS-databasen er opdateret. Benytter skema version %s';
$lang['upgrade_modules'] = 'Opgrad&eacute;r moduler';
$lang['noneed_upgrade_modules'] = 'Kerne-moduler er opdateret';
$lang['upgrade_sql_module_from_to'] = 'Upgrading SQL of &quot;%s&quot; module from %s to %s ...';
$lang['upgrade_event_module_from_to'] = 'Upgrading Events of &quot;%s&quot; module from %s to %s ...';
$lang['sitedown_not_removed'] = 'Could not remove the tmp/cache/SITEDOWN file. Please remove manually or you will continue to show a &quot;Site Down for Maintainence&quot; message on your site';
$lang['upgrade_ok'] = 'Please review config.php, modify any new settings as necessary and then reset it&#039;s permissions back to a locked state. You should also check that all of your modules are up to date, by going to the Extensions -> Modules page and looking for any listed as &quot;Needs Upgrade&quot;';
$lang['upgrade_complete'] = 'Opgraderingen er udf&oslash;rt';
$lang['upgrade_end'] = 'CMS er opgraderet. Klik %s for at se dit cms-site eller du kan %s.';
$lang['here'] = 'her';
$lang['go_to_admin'] = 'G&aring; til administrationen';
$lang['errorfilenot'] = 'Fil ikke fundet!';
$lang['errorfilenotwritable'] = 'Fil ikke skrivbar!';
$lang['nofiles'] = 'Denne ressource eksisterer ikke!';
$lang['is_directory'] = 'Denne ressource er en mappe!';
$lang['is_readable_false'] = 'Denne ressource er ikke l&aelig;sbar!';
$lang['checksum_match'] = 'Checksum passer!';
$lang['checksum_not_match'] = 'Checksum passer ikke!';
$lang['not_checksum'] = 'Kunne ikke hente checksum.';
$lang['format_datetime'] = '%c';
$lang['upload_err_ini_size'] = 'Den upload&#039;ede fil er st&oslash;rre end den upload_max_filesize der er angivet i php.ini!';
$lang['upload_err_form_size'] = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.';
$lang['upload_err_partial'] = 'Den upload&#039;ede fil blev kun delvist upload&#039;et';
$lang['upload_err_no_file'] = 'Ingen fil blev upload&#039;et.';
$lang['upload_err_no_tmp_dir'] = 'Mangler en midlertidig mappe.';
$lang['upload_err_cant_write'] = 'Fejl ved skrivning til disk.';
$lang['upload_err_extension'] = 'File upload stopped by extension.';
$lang['upload_err_empty'] = 'Filen er tom';
$lang['upload_err_unknown'] = 'Ukendt upload problem';
$lang['function_file_uploads_off'] = 'file_uploads er sl&aring;et fra i din php konfiguration!';
$lang['upload_file_no_readable'] = 'Den upload&#039;ede fil kan ikke l&aelig;ses';
$lang['upload_file_multiple'] = 'Multiple file uploads are not allowed!';
$lang['test_check_magic_quotes_gpc'] = 'Magic quotes for Get/Post/Cookie operations';
$lang['test_check_magic_quotes_gpc_failed'] = 'When magic_quotes are on, all single-quote, double quote and backslash are escaped with a backslash automatically. This can cause many problems in CMS.';
$lang['test_check_magic_quotes_runtime'] = 'Magic quotes in runtime';
$lang['test_check_magic_quotes_runtime_failed'] = 'When magic_quotes are on, most functions that return data from any sort of external source including databases and text files will have quotes escaped with a backslash. This will cause problems with CMS made simple.';
$lang['install_admin_checksum'] = 'Tjek din installation';
$lang['upgrade_admin_checksum'] = 'Tjek din system opgradering';
$lang['checksum'] = 'Checksum test';
$lang['checksum_file'] = 'Checksum fil';
$lang['install_test_checksum'] = 'You can validate the integrity of your CMS files by comparing against original CMS checksum. It can assist in finding problems with uploads.';
$lang['checksum_passed'] = 'Alle tjeksummer passer!';
$lang['checksum_failed'] = 'Checksum match with errors. Look at the help for more information';
$lang['test_check_open_basedir'] = 'Tjek for PHP Open Basedir';
$lang['test_check_open_basedir_failed'] = 'Open basedir restrictions are in effect. You may have difficulty with some addon functionality with this restriction.';
$lang['unlimited'] = 'Ubegr&aelig;nset';
$lang['test_open_basedir_session_save_path'] = 'Open basedir is setting. If you have SESSION problems and ini_set works you can try to enable session cookies adding: ini_set(&#039;session.use_only_cookies&#039;, 1);  to top of include.php';
$lang['install_warn_db_createtables'] = 'Under normale omst&aelig;ndigheder skal dette felt altid v&aelig;re sl&aring;et til. Sl&aring; den kun fra hvis du virkelig ved hvad du g&oslash;r.';
$lang['install_admin_tablesnotcreated'] = 'Installation fuldf&oslash;rt. Installationen er fuldf&oslash;rt, og som du &oslash;nskede blev database-tabellerne ikke oprettet. Men config-filen er blevet genskabt og alle pr&aelig;-installations-tests er kontrolleret. Tak, og her er dit';
$lang['info_create_dir_and_file'] = 'HTTP processens ejer kan ikke oprette en fil i den mappe som den ejer. Dette betyder formentlig at safe mode er sl&aring;et til. Mange funktioner i CMS Made Simpl fungerer ikke uden at dette er muligt. Derfor kan der ikke forts&aelig;ttes.';
$lang['test_create_dir_and_file'] = 'Kontrollerer om httpd processen kan oprettet en fil i en mappe som den oprettede';
$lang['cms_site'] = 'CMS Side';
$lang['or_greater'] = 'Eller st&oslash;rre';
$lang['sitename'] = 'Website navn';
$lang['warning_safe_mode'] = '<strong><em>ADVARSEL:</em></strong> PHP&#039;s &quot;Safe mode&quot; er sl&aring;et til. Dette vil vanskeligg&oslash;re upload af filer gennem browserens web interface, heriblandt billeder, temaer og modul XML pakker. Vi anbefaler at du f&aring;r din systemadministrator til at sl&aring; &quot;safe mode&quot; fra.';
$lang['test'] = 'Test';
$lang['results'] = 'Resultater';
$lang['untested'] = 'Ikke testet';
$lang['owner'] = 'Ejer';
$lang['permissions'] = 'Tilladelser';
$lang['off'] = 'Fra';
$lang['on'] = 'Til';
$lang['permission_information'] = 'Information om tilladelse';
$lang['server_os'] = 'Server Operativ System';
$lang['server_api'] = 'Server API';
$lang['server_software'] = 'Server Software';
$lang['server_information'] = 'Server Information';
$lang['session_save_path'] = 'Session Save Path';
$lang['max_execution_time'] = 'Maksimal k&oslash;rselstid';
$lang['gd_version'] = 'GD version';
$lang['upload_max_filesize'] = 'Maksimal upload st&oslash;rrelse';
$lang['post_max_size'] = 'Maksibal post st&oslash;rrelse';
$lang['memory_limit'] = 'PHP hukommelses gr&aelig;nse';
$lang['server_db_type'] = 'Server Database';
$lang['server_db_version'] = 'Server Database Version';
$lang['phpversion'] = 'Nuv&aelig;rende PHP version';
$lang['safe_mode'] = 'PHP Safe Mode';
$lang['php_information'] = 'PHP Information';
$lang['cms_install_information'] = 'CMS Install Information';
$lang['cms_version'] = 'CMS Version';
$lang['systeminfo_copy_paste'] = 'Kopi&eacute;r venligst denne markerede tekst ind i dit forum-indl&aelig;g';
$lang['help_systeminformation'] = 'Informationen vist heruder er samlet fra flere forskellige steder og opsummeret her s&aring; du nemt kan finde de oplysninger der skal til at af diagnosticere et problem eller f&aring; hj&aelig;lp til din CMS Made Simple installation';
$lang['systeminfo'] = 'System Information';
$lang['systeminfodescription'] = 'Viser forskellig information der kan hj&aelig;lpe til at diagnosticere problemer';
$lang['error'] = 'Fejl';
$lang['new_version_available'] = '<em>Bem&aelig;rk:</em> En nyere version af CMS Made Simple er tilg&aelig;ngelig. G&oslash;r venligst din administrator opm&aelig;rksom p&aring; dette.';
$lang['info_urlcheckversion'] = 'Hvis denne url er sat til &amp;quot;none&amp;quot;, vil ingen kontrol blive foretaget<br/>Intet indhold vil resultere i at standard adressen benyttes';
$lang['urlcheckversion'] = 'Kontroll&eacute;r for nye CMS versioner med denne URL';
$lang['read'] = 'L&aelig;s';
$lang['write'] = 'Skriv';
$lang['execute'] = 'K&oslash;r';
$lang['group'] = 'Gruppe';
$lang['other'] = 'Andre';
$lang['global_umask'] = 'File Oprettelses Maske (umask)';
$lang['errorcantcreatefile'] = 'Kunne ikke oprette filen (problem med fil-tilladelser?)';
$lang['add'] = 'Tilf&oslash;j';
$lang['about'] = 'Om';
$lang['action'] = 'Handling';
$lang['actionstatus'] = 'Handling/status';
$lang['active'] = 'Aktiv';
$lang['cantremove'] = 'Kan ikke fjernes';
$lang['changepermissions'] = 'S&aelig;t tilladelser';
$lang['changepermissionsconfirm'] = 'BEM&AElig;RK\n\nDette vil fors&oslash;ge at g&oslash;re alle de filer der udg&oslash;res af moduler skrivbare for webserveren.\nEr du sikker p&aring; du vil forts&aelig;tte?';
$lang['success'] = 'Succes';
$lang['advanced'] = 'Avanceret';
$lang['back'] = 'Tilbage til menu';
$lang['cancel'] = 'Fortryd';
$lang['cantchmodfiles'] = 'Kunne ikke &aelig;ndre adgangstilladelser p&aring; nogle filer.';
$lang['cantremovefiles'] = 'Problemer ved sletning af filer (rettigheder?)';
$lang['create'] = 'Opret';
$lang['database'] = 'Database';
$lang['databaseprefix'] = 'Database pr&aelig;fiks';
$lang['databasetype'] = 'Database Type';
$lang['date'] = 'Dato';
$lang['default'] = 'Standard';
$lang['delete'] = 'Slet';
$lang['deleteconfirm'] = 'Er du sikker p&aring; du vil slette - %s?';
$lang['description'] = 'Beskrivelse';
$lang['directoryexists'] = 'Denne mappe eksisterer allerede';
$lang['down'] = 'Ned';
$lang['edit'] = 'Redig&eacute;r';
$lang['email'] = 'Email Adresse';
$lang['errordeletingfile'] = 'Kunne ikke slette filen. Tilladelsesproblem?';
$lang['errordirectorynotwritable'] = 'Har ikke rettigheder til at skrive i mappen. Dette kan v&aelig;re for&aring;rsage af fil-rettigheder og ejerskab. Safe mode kan ogs&aring; v&aelig;re sl&aring;et til.';
$lang['cachenotwritable'] = 'Cache mappe er ikke skrivbar. Nulstilling af cache&#039;n vil ikke virke. S&oslash;rg for fulde skriveretteigheder til mappen tmp/cache (chmod 777). Du er m&aring;ske ogs&aring; n&oslash;dt til at sl&aring; safe mode fra.';
$lang['modulesnotwritable'] = 'Modul mappen er ikke skrivbar. Hvis du &oslash;nsker at kunne installere moduler ved at upload en XML file skal du s&oslash;rge for fulde skriveretteigheder for mappen modules (chmod 777).  Du er m&aring;ske ogs&aring; n&oslash;dt til at sl&aring; safe mode fra.';
$lang['false'] = 'Falsk';
$lang['settrue'] = 'S&aelig;t til sand';
$lang['filename'] = 'Filnavn';
$lang['filesize'] = 'Filst&oslash;rrelse';
$lang['help'] = 'Hj&aelig;lp';
$lang['language'] = 'Sprog';
$lang['lastname'] = 'Efternavn';
$lang['name'] = 'Navn';
$lang['password'] = 'Kodeord';
$lang['passwordagain'] = 'Kodeord (igen)';
$lang['remove'] = 'Fjern';
$lang['saveconfig'] = 'Gem konfiguration';
$lang['true'] = 'Sand';
$lang['setfalse'] = 'S&aelig;t til falsk';
$lang['type'] = 'Type';
$lang['typenotvalid'] = 'Typen er ikke gyldig';
$lang['unknown'] = 'Ukendt';
$lang['user'] = 'Brug';
$lang['userdefinedtags'] = 'Brugerdefinerede Tags';
$lang['usermanagement'] = 'Bruger-ops&aelig;tning';
$lang['username'] = 'Brugernavn';
$lang['usernameincorrect'] = 'Brugernavn eller password ikke korrekt';
$lang['version'] = 'Version';
$lang['install_title'] = 'CMS Made Simple Installation (trin %s)';
$lang['install_system'] = 'Installations system';
$lang['install_thanks'] = 'Tak fordi du installerede CMS Made Simple';
$lang['upgrade_title'] = 'CMS Made Simple Opgradering (trin %s)';
$lang['upgrade_system'] = 'Opgrad&eacute;r systemet';
$lang['upgrade_thanks'] = 'Tak fordi du opgradere CMS Made Simple til';
$lang['install_please_read'] = 'L&aelig;s venligst <a href="http://wiki.cmsmadesimple.org/index.php/User_Handbook/Installation/Troubleshooting">Installation Troubleshooting</a> siden i CMS Made Simple dokumentations-wiki&#039;en';
$lang['install_checking'] = 'Kontrollere rettigheder og PHP indstillinger';
$lang['install_test'] = 'Test';
$lang['install_result'] = 'Resultater';
$lang['install_required_settings'] = 'N&oslash;dvendige indstillinger';
$lang['install_recommended_settings'] = 'Anbefalede indstillinger';
$lang['install_you_have'] = 'Du har';
$lang['install_legend'] = 'Forklaring';
$lang['install_symbol'] = 'Symbol';
$lang['install_definition'] = 'Definition';
$lang['install_value_passed'] = 'En p&aring;kr&aelig;vet test lykkedes';
$lang['install_value_failed'] = 'En p&aring;kr&aelig;vet test mislykkedes';
$lang['install_error_fragment'] = 'Information til fejlfinding af installationen';
$lang['install_value_required'] = 'En indstilling er under den p&aring;kr&aelig;vede v&aelig;rdi';
$lang['install_value_recommended'] = 'En indstillinger er over den p&aring;kr&aelig;vede v&aelig;rdi, men under den anbefalede<br />eller... En egenskab, som <em>m&aring;ske</em> vil v&aelig;re p&aring;kr&aelig;vet af nogle valgfrie funktioner, er ikke til stede';
$lang['install_value_exceed'] = 'En indstilling er over eller lig med den anbefalede v&aelig;rdi<br />eller... En egenskab, som <em>m&aring;ske</em> vil v&aelig;re p&aring;kr&aelig;vet til nogle valgfrie funktioner, er til stede';
$lang['install_test_failed'] = 'En eller flere tests har fejlet. Du kan stadig installere systemet, men nogen funktioner vil m&aring;ske ikke virke korrekt.<br />Fors&oslash;g venligst at tilrette indstillinger og klik &quot;pr&oslash;v igen&quot;, eller klik p&aring; &quot;forts&aelig;t&quot; knappen.';
$lang['install_test_passed'] = 'Alle tests lykkedes (i det mindste p&aring; et minimum niveau). Klik venligst p&aring; &quot;forts&aelig;t&quot; knappen';
$lang['install_failed_again'] = 'En eller flere tests fejlede. Ret venligst indstillinger og klik p&aring; knappe herunder for at gentage kontrollen.';
$lang['install_try_again'] = 'Pr&oslash;v igen';
$lang['install_continue'] = 'Forts&aelig;t';
$lang['failure'] = 'Fejl';
$lang['caution'] = 'Advarsel';
$lang['install_admin_umask'] = 'Test Fil oprettelses maske';
$lang['install_test_umask'] = 'Klik venligst p&aring; &quot;test&quot;-knappen for at kontrollere';
$lang['test_umask_text'] = 'umask (forkortelse for &quot;user file creation mode mask&quot;) er en funktion i POSIX milj&oslash;er som har med standardtilstanden for nyoprettede filer og mapper for den aktuelle proces at gre. Den kontrollere hvilke af filernes tilladelser der ikke vil blive sat for nyligt oprettede filer.';
$lang['test_check_umask'] = 'Filtest oprettet i';
$lang['test_umask_not_given'] = 'Umask ikke angived';
$lang['test_check_umask_failed'] = 'Umask test fejlede';
$lang['test_username_not_given'] = 'Brugernavn ikke angivet!';
$lang['test_username_illegal'] = 'Brugernavn indeholder ugyldige tegn!';
$lang['test_not_both_passwd'] = 'Kodeordet skal angives 2 gange!';
$lang['test_passwd_not_match'] = 'De 2 kodeord er ikke ens!';
$lang['test_email_accountinfo'] = 'E-mail kontoinformation var valgt, men ingen e-mail adresse var angivet!';
$lang['test_database_prefix'] = 'Database pr&aelig;fikx indeholde ugyldige tegn';
$lang['test_no_dbms'] = 'Ingen dbms valgt!';
$lang['test_could_not_connect_db'] = 'Kunne ikke forbinde til databasen. Kontroll&eacute;r at brugernavn og kodeord er korrekte, og at brugeren har adgang til den angivne database.';
$lang['test_could_not_drop_table'] = 'Kunne ikke droppe en tabel. Kontroll&eacute;r at brugeren har tilladelse til at droppe tabeller i den angivne database.';
$lang['test_could_not_create_table'] = 'Kunne ikke oprette en tabel. Kontroll&eacute;r at brugeren har tilladelse til at oprette tabeller i den angivne database.';
$lang['test_check_php'] = 'Checking for PHP version 4.3+';
$lang['test_min_recommend'] = '(minimum %s, anbefalet %s eller h&oslash;jere)';
$lang['test_min_recommend_plus'] = '(min %s, anbefalet %s+)';
$lang['test_requires_php_version'] = 'CMS Made Simple kr&aelig;ver PHP version 4.3 eller h&oslash;jere (du har %s), men php %s eller h&oslash;jere anbefales for at sikre maksimal kompatibilitet med 3. parts tilf&oslash;jelser.';
$lang['test_check_md5_func'] = 'Kontrollerer for md5 funktion';
$lang['test_check_safe_mode'] = 'Kontrollerer for safe mode';
$lang['test_check_safe_mode_failed'] = 'PHP safe mode kan skabe problemer ved upload af filer og andre funktioner. Det kommer an p&aring; hvor strenge din servers safe mode indstillinger er sat til.';
$lang['test_check_tokenizer'] = 'Kontrollerer for tokenizer funktioner';
$lang['test_check_tokenizer_failed'] = 'Not having the tokenizer could cause pages to render as purely white. We recommend you have this installed, but your website may work fine without it.';
$lang['test_check_gd'] = 'Kontrollerer for GD funktioner';
$lang['test_check_gd_failed'] = 'GD biblioteket er obligatorisk for nogle moduler og funktionaliteter.';
$lang['test_check_write'] = 'Kontrollerer skriverettigheder for';
$lang['test_may_not_exist'] = 'Denne fil eksisterer muligvid ikke endnu. Hvis den ikke g&oslash;r, skal do oprette en tom fil med dette navn. Kontroll&eacute;r venligst at filen er skrivbar for den proces webserveren k&oslash;rer under';
$lang['could_not_retrieve_a_value'] = 'Kunne ikke finde en v&aelig;rdi... forts&aelig;tter.';
$lang['displaying_the_value_originally'] = '<br />Viser v&aelig;rdien der tidligere er sat i config filen (dette er ikke n&oslash;dvendigvis korrekt).';
$lang['test_check_xml_func'] = 'Kontrollerer for grundl&aelig;ggende XML (expat) underst&oslash;ttelse';
$lang['test_check_xml_failed'] = 'XML underst&oslash;ttelse er ikke kompileret ind i din php installation. Du kan stadig benytte systemet, men vil ikke kunne benytte modul h&aring;ndteringen til at installere nyt moduler direkte fra fjernserveren.';
$lang['test_allow_url_fopen_failed'] = 'When allow url fopen is disabled you will not be able to accessing URL object like file using the ftp or http protocol.';
$lang['test_remote_url'] = 'Test for remote URL';
$lang['test_remote_url_failed'] = 'You will probably not be able to open a file on a remote web server.';
$lang['connection_error'] = 'Outgoing http connections do not appear to work! There is a firewall or some ACL for external connections?. This will result in module manager, and potentially other functionality failing.';
$lang['remote_connection_timeout'] = 'Connection Timed Out!';
$lang['search_string_find'] = 'Connection ok!';
$lang['connection_failed'] = 'Connection failed!';
$lang['remote_response_ok'] = 'Remote response: ok!';
$lang['remote_response_404'] = 'Remote response: not found!';
$lang['remote_response_error'] = 'Remote response: error!';
$lang['test_check_file_upload'] = 'Checking file uploads';
$lang['test_check_file_failed'] = 'When file uploads are disabled you will not be able to use any of the file uploading facilities included in CMS Made Simple. If possible, this restriction should be lifted by your system admin to properly use all file management features of the system. Proceed with caution.';
$lang['test_check_memory'] = 'Checking PHP memory limit';
$lang['test_check_memory_failed'] = 'You may not have enough memory to run CMSMS correctly, or with all of your desired addons. If possible, you should try to get your system admin to raise this value. Proceed with caution.';
$lang['test_check_time_limit'] = 'Checking PHP time limit in second';
$lang['test_check_time_limit_failed'] = 'Number of seconds a script is allowed to run. If this is reached, the script returns a fatal error.';
$lang['test_check_post_max'] = 'Checking max post size';
$lang['test_check_post_max_failed'] = 'You will probably not be able to submit (larger) data. Please be aware of this restriction.';
$lang['test_check_upload_max'] = 'Checking max upload file size';
$lang['test_check_upload_max_failed'] = 'You will probably not be able to upload (larger) files using the included file management functions. Please be aware of this restriction.';
$lang['test_check_writable'] = 'Checking if %s is writable';
$lang['test_check_upload_failed'] = 'The uploads folder is not writable. You can still install the system, but you will not be able to upload files via the Admin Panel.';
$lang['test_check_images_failed'] = 'The images folder is not writable. You can still install the system, but you will not be able to upload and use images via the Admin Panel.';
$lang['test_check_modules_failed'] = 'The modules folder is not writable. You can still install the system, but you will not be able to upload modules via the Admin Panel.';
$lang['test_check_file_get_contents'] = 'Checking for file_get_contents';
$lang['test_check_file_get_contents_failed'] = 'The file_get_contents function was added in PHP 4.3 and although a workaround has been added that should allow most functionality that uses this function to work properly in PHP 4.2, it may be advisable to upgrade to PHP 4.3 or greater.';
$lang['test_check_session_save_path'] = 'Checking if session.save_path is writable';
$lang['test_empty_session_save_path'] = 'Your session.save_path is empty. PHP will use the temporary directory of your OS. If you have SESSION problems and ini_set works you can try to enable session cookies adding: ini_set(&#039;session.use_only_cookies&#039;, 1);  to top of include.php';
$lang['test_check_session_save_path_failed'] = 'Your session.save_path is &quot;%s&quot;. Not having this as writable may make logins to the Admin Panel not work. You may want to look into making this path writable if you have trouble logging into the Admin Panel. This test may fail if safe_mode is enabled (see below).';
$lang['test_check_ini_set'] = 'Checking if ini_set works';
$lang['test_check_ini_set_failed'] = 'Although the ability to override php ini settings is not mandatory, some addon (optional) functionality uses ini_set to extend timeouts, and allow uploading of larger files, etc. You may have difficulty with some addon functionality without this capability. This test may fail if safe_mode is enabled (see below).';
$lang['install_admin_header'] = 'Admin Account Information';
$lang['install_admin_info'] = 'Select the username, password and email address for your admin account. Please make sure you record this password somewhere, as there will be no other way to login to your CMS Made Simple admin system without it.';
$lang['install_admin_email'] = 'E-mail Address';
$lang['install_admin_email_info'] = 'E-Mail Account Information';
$lang['install_admin_email_note'] = '<strong>Note:</strong> This function uses the php&#039;s mail function. If you don&#039;t receive this email, it may be an indication that your server is not properly configured and that you should contact your host administrator.';
$lang['install_admin_sitename'] = 'This is the name of your site. It will be used in various places of the default templates and can be used anywhere with the	{sitename} tag.';
$lang['install_admin_db'] = 'Database Information';
$lang['install_admin_db_info'] = '<p>Make sure you have created your database and granted full privileges to a user to use that database.</p>
<p>For MySQL, use the following:</p>
<p>Log in to mysql from a console and run the following commands:</p>
<ol>
<li>create database cms; (use whatever name you want here but make sure to remember it, you&#039;ll need to enter it on this page)</li>
<li>grant all privileges on cms.* to cms_user@localhost identified by &#039;cms_pass&#039;;</li>
</ol>';
$lang['install_admin_follow'] = 'Udfyld venligst f&oslash;lgende felter';
$lang['install_admin_db_type'] = 'Database Type';
$lang['install_admin_no_db'] = 'No valid database drivers appear to be compiled into your PHP install. Please confirm that you have mysql, mysqli, and/or postgres7 support installed, and try again.';
$lang['install_admin_db_host'] = 'Database host adresse';
$lang['install_admin_db_name'] = 'Database navn';
$lang['install_admin_db_create'] = 'Opret tabeller (advarsel: sletter eksisterende data)';
$lang['install_admin_db_prefix'] = 'Tabel pr&aelig;fiks';
$lang['install_admin_db_sample'] = 'Install&eacute;r eksempel indhold og skabeloner';
$lang['retry'] = 'Fors&oslash;g igen';
$lang['install_admin_db_create_seq'] = 'Creating %s table sequence...';
$lang['install_admin_importing'] = 'Importing sample data...';
$lang['invalid_query'] = 'Invalid query: %s';
$lang['install_creating_table'] = '<p>Creating %s table... [%s]</p>';
$lang['install_creating_index'] = '<p>Creating index in %s table... [%s]</p>';
$lang['done'] = 'f&aelig;rdig';
$lang['failed'] = 'fejlede';
$lang['install_admin_error_schema'] = 'Error in retrieve SQL schema';
$lang['install_admin_set_account'] = 'Setting admin account information...';
$lang['install_admin_set_sitename'] = 'Gemmer sidens navn...';
$lang['install_admin_setup'] = 'Now let&#039;s continue to setup your configuration file, we already have most of the stuff we need. Chances are you can leave all these values alone, so when you are ready, click Continue.';
$lang['install_admin_docroot'] = 'CMS dokument-rodmappe (som set fra webserveren.)';
$lang['install_admin_docroot_path'] = 'Sti til dokument-rodmappe';
$lang['install_admin_querystring'] = 'Query string (leave this alone unless you have trouble, then edit config.php by hand)';
$lang['invalid_querys'] = '<b>WARNING<b/>: Invalid queries on your DB!';
$lang['install_admin_sitedown'] = 'Error: Could not remove the tmp/cache/SITEDOWN file. Please remove manually.';
$lang['install_admin_update_hierarchy'] = 'Opdaterer hierakiske positioner..';
$lang['install_admin_set_core_event'] = 'Ops&aelig;tter kerne h&aelig;ndelser...';
$lang['install_admin_install_modules'] = 'Installerer moduler...';
$lang['install_admin_index_search'] = 'Indekserer s&oslash;gning...';
$lang['install_admin_clear_cache'] = 'Nulstiller sidens cache...';
$lang['install_admin_emailing'] = 'Sender admin konto information via email...';
$lang['install_admin_congratulations'] = 'Tillykke, du har nu sat systemet om - her er dit';
$lang['could_not_connect_db'] = 'Kunne ikke forbinde til databasen. Kontroll&eacute;r at brugernavn og kodeord er korrekte, og at denne bruger har adgang til den angivne database';
$lang['cannot_write_config'] = 'Fejl: Kan ikke skrive til %s.';
$lang['email_accountinfo_subject'] = 'CMS Made Simple Administrations Konto Information';
$lang['email_accountinfo_message'] = 'Tak fordi du installerede CMS Made Simple

Dette er dine nye konto oplysninger:
brugernavn: %s
kodeord: %s

Log ind i site administrationen her: %s';
$lang['utma'] = '156861353.868490754.1298370706.1299501521.1299526853.9';
$lang['utmz'] = '156861353.1299501521.8.3.utmcsr=twitter.com|utmccn=(referral)|utmcmd=referral|utmcct=/Bovelett';
$lang['qca'] = 'P0-392249128-1298370706225';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353.1.10.1299526853';
?>