<?php

class Esprit_Livraison_Block_Edit extends Mage_Core_Block_Template 
{
    public function getCommande()
    {
        $id = $this->getRequest()->getParam('id');
        $commande = Mage::getModel('esprit_livraison/commande')->load($id);
        return $commande;
    }

    public function getEditSaveUrl($id)
    {
        return Mage::getUrl('livraison/index/save', array('id' => $id));
    }
}

?>