<?php

class Tag extends TagCore
{
	
	
	/**
	 * Add several tags in database and link it to a product
	 * egp mod added order into insertion
	 * @param integer $id_lang Language id
	 * @param integer $id_product Product id to link tags with
	 * @param string|array $tag_list List of tags, as array or as a string with comas
	 * @return boolean Operation success
	 */
	public static function addTags($id_lang, $id_product, $tag_list, $separator = ',')
	{
		if (!Validate::isUnsignedId($id_lang))
			return false;
	
		if (!is_array($tag_list))
			$tag_list = array_filter(array_unique(array_map('trim', preg_split('#\\'.$separator.'#', $tag_list, null, PREG_SPLIT_NO_EMPTY))));
	
		$list = array();
		foreach ($tag_list as $tag)
		{
			if (!Validate::isGenericName($tag))
				return false;
			$tag_obj = new Tag(null, trim($tag), (int)$id_lang);
	
			/* Tag does not exist in database */
			if (!Validate::isLoadedObject($tag_obj))
			{
				$tag_obj->name = trim($tag);
				$tag_obj->id_lang = (int)$id_lang;
				$tag_obj->add();
			}
			if (!in_array($tag_obj->id, $list))
				$list[] = $tag_obj->id;
		}
		$data = '';
		$order=0;
		foreach ($list as $tag)
			$data .= '('.(int)$tag.','.(int)$id_product.','.$order++.'),';
		$data = rtrim($data, ',');
	
		return Db::getInstance()->execute('
		INSERT INTO `'._DB_PREFIX_.'product_tag` (`id_tag`, `id_product`,`pele_related_order`)
		VALUES '.$data);
	}
	
	/*egp mod added order by order */
	public static function getProductTags($id_product)
	{
		if (!$tmp = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
		SELECT t.`id_lang`, t.`name`
		FROM '._DB_PREFIX_.'tag t
		LEFT JOIN '._DB_PREFIX_.'product_tag pt ON (pt.id_tag = t.id_tag)
		WHERE pt.`id_product`='.(int)$id_product.' ORDER BY pt.pele_related_order ASC '))
			return false;
		$result = array();
		foreach ($tmp as $tag)
			$result[$tag['id_lang']][] = $tag['name'];
		return $result;
	}

}

