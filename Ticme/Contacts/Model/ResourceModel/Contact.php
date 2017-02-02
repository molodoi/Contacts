<?php

namespace Ticme\Contacts\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Contact Resource Model ResourceModel, c'est le repository ranger les requettes SQL, elle est utilisée par le Model pour interragir en sql * avec la base de donnée.
 *
 * @author      Ticme
 */
class Contact extends AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {

    	// _init('tableName', 'primary key')
        $this->_init('ticme_contacts', 'ticme_contacts_id');
    }
}
