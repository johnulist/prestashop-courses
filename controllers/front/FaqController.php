<?php

class FaqControllerCore extends FrontController
{
    public function initContent()
    {
        parent::initContent();
        $this->setTemplate(_PS_THEME_DIR_.'faq.tpl');
    }
}