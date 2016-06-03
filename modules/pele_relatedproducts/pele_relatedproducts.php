<?php

/**
 * Related Products Module
 *
 This module will automatically place related products on a product page based on the tags of each product. 
 So if each product shares the same tag 'Open Source', they will both appear on each others related products tab.
 
 You can specify the order within the tag "bag" and you can also modify the order of the tags (rewritting the entire string but you can do it... :-) )
 
 It's possible also limit the number of items and randomize them.
 *
 * @ver         0.2
 * @author      Enrique Gomez pelechano.es based on the work of Aaron Connelly - CYTechnologies
 * 
 */

if (!defined('_PS_VERSION_'))
	exit;

class Pele_RelatedProducts extends Module
{
	
	const INSTALL_SQL_FILE = 'install.sql';
	const NEW_INFORMATION_FIELD="
		<!--Pele_RelatedProducts NEW FIELDS -->
		<tr>
			<td class=\"col-left\"><label>{l s='Weight related products:'}</label></td>
			<td style=\"padding-bottom:5px;\">
				<input size=\"55\" maxlength=\"150\" type=\"text\" name=\"pele_related_tag_weight\" value=\"{\$product->pele_related_tag_weight|htmlentitiesUTF8}\"  /> 
				<p class=\"preference_description clear\">{l s='Weights (number) sepparated by commas, each one corresponds to the Tag by position'}</p>
			</td>
		</tr> 			
		<tr>
			<td class=\"col-left\"></td>
			<td style=\"padding-bottom:5px;\">
				<input type=\"checkbox\" name=\"pele_related_random_order\" id=\"pele_related_random_order\" value=\"1\" {if \$product->pele_related_random_order}checked=\"checked\"{/if}/>
				<label for=\"pele_related_random_order\" class=\"t\">{l s='Show random related products'}</label>
			</td>
		</tr> 		
		<tr>
			<td class=\"col-left\"><label></label></td>
			<td style=\"padding-bottom:5px;\">
				<input size=\"2\" maxlength=\"2\" type=\"text\" name=\"pele_related_limit_number_products\" value=\"{\$product->pele_related_limit_number_products|htmlentitiesUTF8}\"  /> 
				<label  class=\"t\">{l s='Limit number of related products'}</label>
			</td>
		</tr> 
		<!--Pele_RelatedProducts NEW FIELDS END -->";
	
	const NEW_INFORMATION_FIELD_16="
	<!--Pele_RelatedProducts NEW FIELDS -->
	<div class=\"form-group\">
		<label class=\"control-label col-lg-3\" for=\"pele_related_tag_weight\">
			<span class=\"label-tooltip\" data-toggle=\"tooltip\"
			title=\"{l s='Weights (number) sepparated by commas, each one corresponds to the Tag by position'}\">
				{\$bullet_common_field} {l s='Weight related products:'}
			</span>
		</label>
		<div class=\"col-lg-5\">
			<input type=\"text\" id=\"pele_related_tag_weight\" name=\"pele_related_tag_weight\" value=\"{\$product->pele_related_tag_weight|htmlentitiesUTF8}\" />
		</div>
	</div>
	<div class=\"form-group\">
				<label class=\"control-label col-lg-3\">
				</label>
				<div class=\"col-lg-5\">
					<p class=\"checkbox\">
						<input type=\"checkbox\" name=\"pele_related_random_order\" id=\"pele_related_random_order\" value=\"1\" {if \$product->pele_related_random_order}checked=\"checked\"{/if}  />
						<label for=\"pele_related_random_order\">{l s='Show random related products'}</label>
					</p>
					
				</div>
	</div>
	<div class=\"form-group\">
		<label class=\"control-label col-lg-3\">
		</label>
		<div class=\"col-lg-1\">
			<input type=\"text\" id=\"pele_related_limit_number_products\" name=\"pele_related_limit_number_products\" value=\"{\$product->pele_related_limit_number_products|htmlentitiesUTF8}\" />
		</div>
		<label class=\"control-label col-lg-4\" for=\"pele_related_limit_number_products\">
			<span class=\"label-tooltip\" data-toggle=\"tooltip\" style=\"float: left\">
				{\$bullet_common_field} {l s='Limit number of related products'}
			</span>
		</label>
	</div>
	<!--Pele_RelatedProducts NEW FIELDS END -->";
	
 	function __construct()
 	{
 	 	$this->name = 'pele_relatedproducts';
 	 	$this->version = '0.2';
 	 	$this->tab = 'front_office_features';
		$this->author = 'pelechano.es';
		parent::__construct();
		
		$this->displayName = $this->l('Pele - Related Products');
		$this->description = $this->l('Display related products based on the selected products tags.');
 	}

	
	
	public function install()
	{
		if (!file_exists(dirname(__FILE__).'/'.self::INSTALL_SQL_FILE))
			return false;
		else if (!$sql = file_get_contents(dirname(__FILE__).'/'.self::INSTALL_SQL_FILE))
			return false;
		$sql = str_replace(array('PREFIX_', 'ENGINE_TYPE'), array(_DB_PREFIX_, _MYSQL_ENGINE_), $sql);
		$sql = preg_split("/;\s*[\r\n]+/", trim($sql));
		
		$cols = Db::getInstance()->ExecuteS('describe '._DB_PREFIX_.'product');//Check if the fields are alredy installed in the database
		$installed = false;
		foreach ($cols AS $col)
		if ($col['Field'] == "pele_related_limit_number_products")//with one we might be sure..
			$installed = true;
		
		if (!$installed)
		{
			foreach ($sql as $query)
			if (!Db::getInstance()->execute(trim($query)))
				return false;
		}
		if (parent::install() == false )
			return false;
		
		if($this->psversion()==6){
			if(!$this->registerHook('productfooter') || !$this->registerHook('header')) return false;
		}else{
			if(!$this->registerHook('productTab') ||!$this->registerHook('productTabContent')) return false;
		}
		
		
		if(!chmod(_PS_ADMIN_DIR_."/themes/default/template/controllers/products/informations.tpl", 0777 )){
			die ("Error Changing file permissions in informations.tpl ".__FILE__." on line ".__LINE__.".");
		}
		$str = "";
		
		if($fh = fopen(_PS_ADMIN_DIR_."/themes/default/template/controllers/products/informations.tpl", 'r')){
			while(!feof($fh)){
				$str .= fgets ($fh);
			}
			$pos=strrpos($str,"<!--Pele_RelatedProducts NEW FIELDS -->"); //check if already has the new fields in the template
			if($pos){
				return true;
			}
			if($this->psversion()==6){
				$last=strrpos($str,"</div>");
				$pos = $this->strrpos_count($str, "</div>", 3)+6; //the third last div
				$str = substr_replace($str,self::NEW_INFORMATION_FIELD_16, $pos,0); //added the new field into the tpl
			}else{
				$pos=strrpos($str,"</tr>")+5;//last tr
				$str = substr_replace($str,self::NEW_INFORMATION_FIELD, $pos,0); //added the new field into the tpl
			}
			
			
			fclose($fh);
			@chmod(_PS_ADMIN_DIR_."/themes/default/template/controllers/products/informations.tpl", 0644 );
		}else {
			die ("Error opening file in ".__FILE__." on line ".__LINE__.".");
		}
		$x42 = fopen (_PS_ADMIN_DIR_."/themes/default/template/controllers/products/informations.tpl", "w");
		fwrite ($x42,$str);
		
		return true;
	}
	private  function strrpos_count($haystack, $needle, $count)
{
    if($count <= 0)
        return false;

    $len = strlen($haystack);
    $pos = $len;

    for($i = 0; $i < $count && $pos; $i++)
        $pos = strrpos($haystack, $needle, $pos - $len - 1);

    return $pos;
}
	public function uninstall()
	{
		if (!parent::uninstall() || !$this->deleteTables() ||
		!$this->unregisterHook('productTab') ||
		!$this->unregisterHook('productTabContent')||!$this->unregisterHook('productFooter')||!$this->unregisterHook('header'))
			return false;
		
		if(!chmod(_PS_ADMIN_DIR_."/themes/default/template/controllers/products/informations.tpl", 0777 )){
			die ("Error Changing file permissions in informations.tpl ".__FILE__." on line ".__LINE__.".");
		}
		$str = "";
		
		if($fh = fopen(_PS_ADMIN_DIR_."/themes/default/template/controllers/products/informations.tpl", 'r')){
			while(!feof($fh)){
				$str .= fgets ($fh);
			}
			
			$pos1=strrpos($str,"<!--Pele_RelatedProducts NEW FIELDS -->");
			if($this->psversion()==6){
				$lenght=strlen(self::NEW_INFORMATION_FIELD_16);
			}else{
				$lenght=strlen(self::NEW_INFORMATION_FIELD);
			}
			
			
			if($pos1){
				$str = substr_replace($str,"", $pos1,$lenght);
				fclose($fh);
				@chmod(_PS_ADMIN_DIR_."/themes/default/template/controllers/products/informations.tpl", 0644 );
				}else {
					die ("Error opening file in ".__FILE__." on line ".__LINE__.".");
				}
				$x42 = fopen (_PS_ADMIN_DIR_."/themes/default/template/controllers/products/informations.tpl", "w");
				fwrite ($x42,$str);
			}
			
		
		return true;
	}
	
	public function deleteTables()
	
	{
		
		$cols = Db::getInstance()->ExecuteS('describe '._DB_PREFIX_.'product');//Check if the fields are alredy installed in the database
		$installed = false;
		foreach ($cols AS $col)
		if ($col['Field'] == "pele_related_limit_number_products")//with one we might be sure..
			$installed = true;
		
		if ($installed)
		{
			if  (!Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'product_tag` DROP `pele_related_order`')) return false;
			if  (!Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'product` DROP `pele_related_tag_weight`')) return false;
			if  (!Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'product` DROP `pele_related_random_order`')) return false;
			if  (!Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'product` DROP `pele_related_limit_number_products`')) return false;
		}
		
		
		return true;
	}

	public function hookProductTab($params)
    {
    	if($this->psversion()==6){
    		return ;//PS 1.6 has the tabs vertically..
    	}else{
    		return ($this->display(__FILE__, 'pele_relatedproducts_tab.tpl'));
    	}
		
	}
	
		public function hookProductTabContent($params)
	{

		// final array
		$pele_related_products = array();

		// grab the product id
		$id_product = intval(Tools::getValue('id_product'));
		
		$prod= new Product($id_product);
		$number_of_products=strlen($prod->pele_related_limit_number_products)==0?-1:$prod->pele_related_limit_number_products;
		
	
		// grab tags from the product
		$product_tags = Tag::getProductTags($id_product);
		$the_lang_for_tag=$params['cookie']->id_lang;
		if(!isset($product_tags[$params['cookie']->id_lang])){//if the tag is not in the selected language let's use the default
			$the_lang_for_tag=(int)Configuration::get('PS_LANG_DEFAULT');
		}
		
		
		

		// loop through the tags and see what we can find.
		if(is_array($product_tags[$the_lang_for_tag])&& $number_of_products!=0 )
		{
			$context = Context::getContext();
			
			foreach($product_tags[$the_lang_for_tag] as $tag_key=>$tag_value)
			{
				// new tag
				$tag_generic = new Tag('', $tag_value, intval($the_lang_for_tag));
				
				// what other products match this tag... hand them over!
				$other_products = $this->pele_getProductsOrderByWeight($tag_generic->id,$params['cookie']->id_lang,$tag_key+1); // grab products associated with this tag oredered by weight desc
	
				foreach($other_products as $other_key=>$other_value)
				{	
					// make sure theres no duplicate products
					if($other_value['id_product'] != $id_product && !array_key_exists($other_value['id_product'], $pele_related_products)) 
					{
									
						// grab product link
						$other_value['link'] = $context->link->getProductLink($other_value['id_product']);
						
						$other_value['displayed_price'] = Product::getPriceStatic($other_value['id_product'],true);
						
						// grab product image - request by user.
						$other_value['image'] = Image::getCover($other_value['id_product']);
						if(is_array($other_value['image']))
						{
							$other_value['image']['id_image'] = $other_value['id_product'].'-'.$other_value['image']['id_image'];
							$other_value['image']['link_rewrite'] = $this->pele_LinkRewrite($other_value['id_product'], $params['cookie']->id_lang);
						}
						// add the product to the array
						$pele_related_products[$other_value['id_product']] = $other_value;
					}
				}
			}
		}
		
		if($prod->pele_related_random_order){
			shuffle($pele_related_products);
		}
		
		if($number_of_products>0){ //slice the array
			$pele_related_products = array_slice($pele_related_products, 0, $number_of_products);
		}

		$this->smarty->assign('peleRelatedProducts', $pele_related_products);
		if($this->psversion()==6){
			return $this->display(__FILE__, 'pele_relatedproducts_16.tpl');
		}else{
			return $this->display(__FILE__, 'pele_relatedproducts.tpl');
		}
		
	}
	public function hookProductFooter($params)
	{
	
		return $this->hookProductTabContent($params);
	
	}

	/**
	 * pele_LinkRewrite
	 * Retreive the rewrite for the given product
	 *
	 * @param  $id_product integer
	 * @param  $id_lang    integer
	 * @return $rewrite    string
	 */
	public function pele_LinkRewrite($id_product, $id_lang)
	{
		 $result = Db::getInstance()->ExecuteS('SELECT `link_rewrite` 
												FROM `'._DB_PREFIX_.'product_lang` 
												WHERE `id_product`='.intval($id_product).' AND `id_lang` = '.intval($id_lang));
		 return $result[0]['link_rewrite'];
	}
	
	

	public function pele_getProductsOrderByWeight( $id_tag, $id_lang, $index_tag)
	{
				
		return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
		SELECT pl.name, pl.id_product, REPLACE(SUBSTRING(SUBSTRING_INDEX(p.pele_related_tag_weight, ",", '.$index_tag.'),
	LENGTH(SUBSTRING_INDEX(p.pele_related_tag_weight, ",", '.$index_tag.' -1)) + 1),
	",", "") as weight
		FROM `'._DB_PREFIX_.'product` p
		LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON p.id_product = pl.id_product'.Shop::addSqlRestrictionOnLang('pl').'
		'.Shop::addSqlAssociation('product', 'p').'
		WHERE pl.id_lang = '.(int)$id_lang.'
		AND product_shop.active = 1
		'.('AND p.id_product IN (SELECT pt.id_product FROM `'._DB_PREFIX_.'product_tag` pt WHERE pt.id_tag = '.(int)$id_tag.')') .'
		ORDER BY weight DESC, pl.name ASC');
	}
	
	public function psversion() {
		$version=_PS_VERSION_;
		$exp=$explode=explode(".",$version);
		return $exp[1];
	}
	
	public function hookHeader($params)
	{
		if (!isset($this->context->controller->php_self) || $this->context->controller->php_self != 'product')
			return;
		$this->context->controller->addCSS($this->_path.'css/pele_relatedproducts16.css', 'all');
		$this->context->controller->addJqueryPlugin(array('scrollTo', 'serialScroll', 'bxslider'));
	}

}
