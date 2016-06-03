<div id="idTab_RelatedProducts">
{if count($peleRelatedProducts) > 0}
	<div class="block_related_products clearfix">
			{foreach from=$peleRelatedProducts item=peleRelatedProduct}
				<div class="block" style="float: left;width: 120px;height: 120px;margin-right: 20px;">
				{if $peleRelatedProduct.image.id_image ne ""}
					<a href="{$peleRelatedProduct.link}" title="{$peleRelatedProduct.name|htmlspecialchars}"><img src="{$link->getImageLink($peleRelatedProduct.image.link_rewrite, $peleRelatedProduct.image.id_image, 'medium_default')}" height="80" width="80"></a>
				{else}
					<a href="{$peleRelatedProduct.link}" title="{$peleRelatedProduct.name|htmlspecialchars}"><img src="{$img_prod_dir}{$lang_iso}-default-medium.jpg" alt="" height="80" width="80" title="{$peleRelatedProduct.name|escape:'htmlall':'UTF-8'}" /></a>
				{/if}
				<br />	
				<a href="{$peleRelatedProduct.link}" title="{$peleRelatedProduct.name|htmlspecialchars}">{$peleRelatedProduct.name|htmlspecialchars} </a>
				{*convertPrice price=$peleRelatedProduct.displayed_price*}
				</div>
			{/foreach}
	</div>
{else}
	<center><b>{l s='There are no related products at this time.' mod='pele_relatedproducts'}</b></center>
{/if}
</div>
