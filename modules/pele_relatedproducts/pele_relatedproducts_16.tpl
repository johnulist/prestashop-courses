
{if count($peleRelatedProducts) > 0}
<section class="page-product-box blockpeleproductsrelated">
	<h3 class="peleproductsrelated_h3 page-product-heading">{l s='Related Products' mod='pele_relatedproducts'}</h3>
	<div id="peleproductsrelated_list" class="clearfix">
		<ul id="bxslider_pele" class="bxslider clearfix">
		 {foreach from=$peleRelatedProducts item='peleRelatedProduct' name=categoryProduct}
			<li class="product-box item">
				<a href="{$peleRelatedProduct.link}" class="lnk_img product-image" title="{$peleRelatedProduct.name|htmlspecialchars}"><img src="{$link->getImageLink($peleRelatedProduct.image.link_rewrite, $peleRelatedProduct.image.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{$peleRelatedProduct.name|htmlspecialchars}" /></a>
                
				<h5 class="product-name">
					<a href="{$peleRelatedProduct.link}" title="{$peleRelatedProduct.name|htmlspecialchars}">{$peleRelatedProduct.name|truncate:14:'...'|escape:'html':'UTF-8'}</a>
				</h5>	
				{*convertPrice price=$peleRelatedProduct.displayed_price*}			
				<br />
			</li>
		{/foreach}
		</ul>
	</div>
</section>
{/if}


<script type="text/javascript">
$(document).ready(function() {
	if (!!$.prototype.bxSlider)
		$('#bxslider_pele').bxSlider({
			minSlides: 2,
			maxSlides: 6,
			slideWidth: 178,
			slideMargin: 20,
			pager: false,
			nextText: '',
			prevText: '',
			moveSlides:1,
			infiniteLoop:false,
			hideControlOnEnd: true
		});
});
</script>