<?php
namespace Ticme\Contacts\Controller\Test;

use Magento\Framework\App\Action\Action;

class Myevent extends Action
{
    public function execute()
    {
        $this->_eventManager->dispatch('ticme_contacts_event_test');
        die('test');
    }
}