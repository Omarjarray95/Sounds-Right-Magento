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
        $commande->setData('nom', $postData['nom']);
        $commande->setData('date', $postData['date']);
        $commande->setData('produit', $postData['produit']);
        $commande->save();
        Mage::getSingleton('adminhtml/session')->addSuccess("Commande ajoutée avec Succès");

        $this->_redirect('livraison/index/list');
    }

    public function listAction()
    {
        $this->loadLayout()->renderLayout();
    }

    public function editAction()
    {
        $this->loadLayout()->renderLayout();
    }

    public function saveAction()
    {
        if (!$this->_validateFormKey())
        {
            $this->_redirect('livraison/index/list');
            return;
        }

        $id = $this->getRequest()->getParam('id');
        $postData = Mage::app()->getRequest()->getParams();
        $commande = Mage::getModel('esprit_livraison/commande')->load($id);
        $commande->setData('nom', $postData['nom']);
        $commande->setData('date', $postData['date']);
        $commande->setData('produit', $postData['produit']);
        $commande->save();
        Mage::getSingleton('adminhtml/session')->addSuccess("Commande modifiée avec Succès");

        $this->_redirect('livraison/index/list');
    }

    public function deleteAction()
    {
        $id = $this->getRequest()->getParam('id');
        $commande = Mage::getModel('esprit_livraison/commande')->load($id);

        if (!is_null($commande->getId()))
        {
            $commande->delete();
            Mage::getSingleton('adminhtml/session')->addSuccess("Commande supprimée avec Succès");
        }
        else 
        {
            Mage::getSingleton('adminhtml/session')->addError("Commande Introuvable");
        }

        $this->_redirect('livraison/index/list');
    }
}

?>