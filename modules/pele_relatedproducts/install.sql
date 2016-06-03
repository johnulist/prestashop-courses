ALTER TABLE PREFIX_product ADD pele_related_tag_weight VARCHAR(255) ;
ALTER TABLE PREFIX_product ADD pele_related_random_order TINYINT(1) UNSIGNED DEFAULT 0 ;
ALTER TABLE PREFIX_product ADD pele_related_limit_number_products VARCHAR(2) ;

ALTER TABLE PREFIX_product_tag ADD pele_related_order INT(2) UNSIGNED ;
