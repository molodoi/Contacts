<?php

namespace Ticme\Contacts\Model;

use Magento\Cron\Exception;
use Magento\Framework\Model\AbstractModel;

/**
 * Contact Model
 *
 * @author      Ticme
 */
class Contact extends AbstractModel
{
    /**
     * @var \Magento\Framework\Stdlib\DateTime
     */
    protected $_dateTime;

    /**
     * @return void
     */
    //on fait un init d'une classe qu'on appellera le ResourceModel, c'est le repository
    protected function _construct()
    {
        $this->_init(\Ticme\Contacts\Model\ResourceModel\Contact::class);
    }
    
}