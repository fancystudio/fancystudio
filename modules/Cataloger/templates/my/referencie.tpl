{womanChange}
<script type="text/javascript" src="lib/js/jquery/imagesloaded-master/imagesloaded.pkgd.js"></script>
<script type="text/javascript" src="lib/js/jquery/isotope-master/dist/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="lib/js/jquery/jquery.bxSlider/jquery.bxSlider.min.js"></script>
<script type="text/javascript" src="lib/js/referencie.js"></script>
<div id="referencesAndContactForm">
	<div class="slider">
		<div> 
			{kontakt} 
		</div> 
		<div style="padding-top: 0px; display: block;">
			<div class="referenciesMain container">
				<h3>
					<span>{MleCMS name="snippet_referencie"}</span>
				</h3>
				<div class="menu-wrap">{MleCMS name="block_referencieMenu"}</div><!-- menu wrap -->
				<div class="referencies">
					<div class="row">
						{section name=numloop loop=$items}
							<div class='referencia col-lg-3 col-md-3 col-sm-4 col-xs-6 {if $items[numloop].attrs.web == "Yes"}web {/if}{if $items[numloop].attrs.eshop == "Yes"}eshop {/if}{if $items[numloop].attrs.brand == "Yes"}brand {/if}{if $items[numloop].attrs.print == "Yes"}print {/if}'>
								<a href="{$items[numloop].link}">
									<img src="{$items[numloop].image_src}" title="{$items[numloop].title}" alt="{$items[numloop].title}" class="img-responsive" width"260" height"171"/>
								</a>
							</div>
						{/section}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
