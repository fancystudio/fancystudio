<?
$gCms = cmsms();
$contentops = $gCms->GetContentOperations();
$smarty = $gCms->GetSmarty();
$lang_parent = $smarty->get_template_vars('lang_parent');
$db = $gCms->GetDb();
$query = 'SELECT c.content_alias,c.content_name FROM cms_content c 
          LEFT JOIN cms_content_props cp on cp.content_id = c.content_id 
          WHERE c.parent_id = '.(($lang_parent == "sk") ? '58' : '83').' and cp.prop_name = "top referencia" and cp.content = "Yes"
          LIMIT 0,8';  
$dbresult = $db->Execute($query);
?>
<div class="row">
<div class="topReferencies cold-md-12"> 

<h3><span><?= (($lang_parent == "sk") ? 'posledné projekty' : 'the latest projects') ?></span></h3>
<div style="width:auto; display:block; height: 5px"></div></div>

<?
while ($dbresult !== false && $row = $dbresult->FetchRow()){
  ?>
    <div class="reference col-lg-3 col-md-3 col-sm-4 col-xs-6">
      <a href="<?= (($lang_parent == "sk") ? 'referencie' : 'references') ?>/<?= $row['content_alias'] ?>.html"> 
        <span class="work_zoom" style="opacity: 0;"><!--<?= $row['content_name'] ?>-->
        <span class="glyphicon glyphicon-search"></span>
        </span>
        
        <img title="<?= $row['content_name'] ?>" src="uploads/images/catalog_src/<?= $row['content_alias'] ?>_src_1.jpg" alt="<?= $row['content_name'] ?>" />
        <span class="mask"> </span>
      </a>
       
    </div>
 
  <?
}
?>
<div style="clear:both; display:block; width: auto; height: 40px "></div>
 
<?

      