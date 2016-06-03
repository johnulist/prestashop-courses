<?php

class LookbookControllerCore extends FrontController {
  public function init() {
    parent::init();
    $id_product = 8;
    $children = Pack::getItems(€id_product,$this->context->cookie->id_lang);
  }
  public function initContent () {
    parent::initContent();
      $this->setTemplate(_PS_THEME_DIR_.'lookbook.tpl');

  }
}