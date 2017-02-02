<?php

namespace Ticme\Contacts\Model\ResourceModel\Contact;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Contact Resource Model Collection Une collection, c'est ce qui va vous permettre de chercher plusieurs objets dans la base de donnée. En * gros si vous créez une collection d'objet, puis vous y ajoutez des filtres qui vous permettrons de ne charger que certains objets de 
 * votre table. 
 *
 * @author      Pierre FAY
 */
class Collection extends AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Ticme\Contacts\Model\Contact', 'Ticme\Contacts\Model\ResourceModel\Contact');
    }
}