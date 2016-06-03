<?php

class Product extends ProductCore
{
	/** @var tag_weight for order in related products */
	public $pele_related_tag_weight;
	public $pele_related_random_order;
	public $pele_related_limit_number_products;
	
	
	
	public function __construct($id_product = null, $full = false, $id_lang = null, $id_shop = null, Context $context = null)
	{
		self::$definition['fields']['pele_related_tag_weight'] = array('type' => self::TYPE_STRING,'validate' => 'isTagWeight');
		self::$definition['fields']['pele_related_random_order'] = array('type' => self::TYPE_BOOL,  'validate' => 'isBool');
		self::$definition['fields']['pele_related_limit_number_products'] = array('type' => self::TYPE_STRING, 'default' => '','validate' => 'isUnsignedInt');
		parent::__construct($id_product,$full,$id_lang,$id_shop,$context);
	}
	
	public function update($null_values = false){
		$this->pele_related_random_order = (int)Tools::getValue('pele_related_random_order');//to checkboxes problem
		return parent::update($null_values);
	}
}

