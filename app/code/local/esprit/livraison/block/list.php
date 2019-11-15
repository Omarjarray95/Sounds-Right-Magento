<?php

class Esprit_Livraison_Block_List extends Mage_Core_Block_Template 
{
    public function getCommandeCollection()
    {
        return Mage::getModel('esprit_livraison/commande')->getCollection();
    }

    public function getEditUrl($id)
    {
        return Mage::getUrl('livraison/index/edit', array('id' => $id));
    }

    public function getDeleteUrl($id)
    {
        return Mage::getUrl('livraison/index/delete', array('id' => $id));
    }
}

?>