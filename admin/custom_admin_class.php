<?php

class custom_admin_class extends oxAdminView {
        
    protected $_sThisTemplate = 'custom_admin_template.tpl';
    
    public function render() {
        parent::render();
        $content = "<h1>you are currently using OXID eSales ".$this->getShopFullEdition()." ".$this->getShopVersion()."_".$this->getRevision()."</h1>";
        
        $this->_aViewData['content'] = $content;
        
        return $this->_sThisTemplate;

    }


}
