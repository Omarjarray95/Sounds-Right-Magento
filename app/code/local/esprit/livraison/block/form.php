<?php

class Esprit_Livraison_Block_Form extends Mage_Core_Block_Template 
{
    public function getSubmitUrl()
    {
        return Mage::getUrl('livraison/index/post');
    }
}

?>