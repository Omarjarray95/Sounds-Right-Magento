<?php
    class Esprit_Livraison_Model_Resource_Commande extends Mage_Core_Model_Resource_Db_Abstract 
    {
        protected function _construct()
        {
            $this->_init('esprit_livraison/commande', 'id')
        }
    }
?>