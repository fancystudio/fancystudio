{womanChange}
<script type="text/javascript" src="lib/js/jquery/isotope-master/jquery.isotope.min.js"></script>
<script type="text/javascript" src="lib/js/jquery/jquery.bxSlider/jquery.bxSlider.min.js"></script>
<script type="text/javascript" src="lib/js/referencie.js"></script>
<div id="referencesAndContactForm">
<div class="slider"><div> {kontakt} </div> <div style="padding-top: 0px; display: block;">
<div class="referenciesMain container">
<h3><span>{MleCMS name="snippet_referencie"}</span></h3>
   	{MleCMS name="block_referencieMenu"}
  <div class="referencies">   
    {section name=numloop loop=$items}       
      <div class="referencia{if $items[numloop].attrs.web == "Yes"}web {/if}
      {if $items[numloop].attrs.eshop == "Yes"}eshop {/if}
      {if $items[numloop].attrs.brand == "Yes"}brand {/if}
      {if $items[numloop].attrs.print == "Yes"}print {/if}">
        <a href="{$items[numloop].link}">
          <span class="work_zoom" style="opacity: 0;">{$items[numloop].title}</span>
          <img src="{$items[numloop].image_src}" title="{$items[numloop].title}" alt="{$items[numloop].title}"/>
          <span class="mask"> </span>
        </a>
      </div>                                
    {/section}
  </div>
</div>
</div></div>
</div>
