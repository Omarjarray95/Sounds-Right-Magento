<?php

class Esprit_Livraison_IndexController extends Mage_Core_Controller_Front_Action 
{
    public function indexAction()
    {
        $this->loadLayout()->renderLayout();
    }

    public function postAction()
    {
        if (!$this->_validateFormKey())
        {
            $this->_redirect('livraison/index/index');
            return;
        }

        $postData = Mage::app()->getRequest()->getParams();
        $commande = Mage::getModel('esprit_livraison/commande');
        var_dump($commande);
        /*$commande->setData('nom', $postData['nom']);
        $commande->setData('date', $postData['date']);
        $commande->setData('produit', $postData['produit']);
        $commande->save();
        Mage::getSingleton('adminhtml/session')->addSuccess("Commande ajoutée avec Succès");*/
    }
}

?>