<script type="text/javascript" src="{root_url}/lib/js/jquery/jquery.lazyload.js"></script>
{literal}
<style type="text/css">
#baner-color,.banerGetFancy,#baner{
  display:none !important;
}
</style>
{/literal}
<script type="text/javascript" src="{root_url}/lib/js/referencia_detail.js"></script>
{assign var="pageHeight" value=0}
{section name=ind loop=$src_image_url_array}
{if $smarty.section.ind.index != 0}
  {assign var="pageHeight" value=$pageHeight + $src_image_size_array[ind][1]}
{/if}
{/section}
<div class="container">
  <div class="referenceImgAndDesc">
  <img class="referenceImg"  src="{$src_image_2_url}" width="{$src_image_size_array[1][0]}" height="{$src_image_size_array[1][1]}" title="{$title}" alt="{$title}" class="img-responsive"/>
    <div class="referenceDesc">
      <h1>{$title}</h1>
      {section name=at loop=$attrlist}
      {if $attrlist[at].name == "Popis"}
          {eval var=$attrlist[at].key}
      {/if}
      {/section}
    </div>
      <div class="refs-nav">
<a href="{root_url}/{MleCMS name="snippet_jazykSkratka"}/{MleCMS name="snippet_referencie"}.html" class="all-btn"><span></span></a>
 {assign var="setNodeNameTemp" value=false}
{assign var="nextNodeName" value="empty"}
{assign var="prevNodeNameTemp" value="empty"}
{assign var="firstItem" value="empty"}
{assign var="lastItem" value="empty"}
{assign var="setFirstItem" value=true}
{foreach from=$nodelist item=itemlist}
    {if $itemlist->alias != "domov" 
        AND $itemlist->alias != "o-nas"
        AND $itemlist->alias != "referencie"
        AND $itemlist->alias != "kontakt"
        AND $itemlist->alias != "home"
        AND $itemlist->alias != "about-us"
        AND $itemlist->alias != "references"
        AND $itemlist->alias != "contact"}
          {if $setFirstItem}
            {assign var="firstItem" value=$itemlist->alias}
            {assign var="setFirstItem" value=false}  
          {/if}
          {if $setNodeNameTemp}
            {assign var="nextNodeName" value=$itemlist->alias}
            {assign var="setNodeNameTemp" value=false}  
          {/if} 
          {if $itemlist->alias == $alias}
            {assign var="setNodeNameTemp" value=true}
            {assign var="prevNodeName" value=$prevNodeNameTemp}  
          {/if}
          {assign var="prevNodeNameTemp" value=$itemlist->alias}
          {assign var="lastItem" value=$itemlist->alias}
    {/if}
{/foreach}
{if $nextNodeName == "empty"}
  {assign var="nextNodeName" value=$firstItem}    
{/if}
{if $prevNodeName == "empty"}
  {assign var="prevNodeName" value=$lastItem}    
{/if}
{if $firstItem != "empty" OR $lastItem != "empty"}
  {cms_selflink page="{$nextNodeName}" dir="next" class="next-btn" label="" 

text="<span></span>"}
  {cms_selflink page="{$prevNodeName}" dir="previous" class="prev-btn" label="" 

text="<span></span>"}  
{/if}

</div>

  </div>
  
  {section name=ind loop=$src_image_url_array}
  	{if $smarty.section.ind.index != 0 AND $smarty.section.ind.index != 1}
    	<img class="referenceScreen img-responsive" width="{$src_image_size_array[ind][0]}" height="{$src_image_size_array[ind][1]}" data-original="{$src_image_url_array[ind]}" src="{$src_image_url_array[ind]}" title="{$title} - {MleCMS name="snippet_webStranka"}" alt="{$title} - {MleCMS name="snippet_webStranka"}" />
  	{/if}
    
  {/section}
 <div class="fb-like" data-href="{root_url}/{MleCMS name="snippet_jazykSkratka"}/{MleCMS name="snippet_referencie"}/{$alias}.html" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false" data-font="verdana"></div> 
  
</div>

<div class="scrollToTop"><span></span>
</div>
