<!-- nom, lien produit enfant, image produit enfant, le prix du chaque enfant et enfin la catégorie du pack -->

<p>
  
 (foreach from=$look item=enfant name-loop) 

 (€enfant->name) <br>


 (/foreach)

</p>


$p = new Product(€id_product, true, €id_lang);