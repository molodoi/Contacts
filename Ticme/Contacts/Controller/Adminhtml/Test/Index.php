<?php
namespace Ticme\Contacts\Controller\Adminhtml\Test;

use Magento\Backend\App\Action;

/**
 La classe étend \Magento\Framework\App\Action\Action qui contient par défaut l'objet _objectManager qui va vous permettre d'instancier votre Model. Vous instanciez donc votre Model Contact, vous définissez un nom avec setName et vous sauvegardez avec la méthode save(). 
 *
 * @author      Ticme
 */

class Index extends \Magento\Backend\App\Action
{
    public function execute()
    {
        /**
    	$contact = $this->_objectManager->create('Ticme\Contacts\Model\Contact');
        $contact->setName('Paul Dupond');
        $contact->save();

        $contact = $this->_objectManager->create('Ticme\Contacts\Model\Contact');
        $contact->setName('Jack Daniels');
        $contact->save();
              
        $contact = $this->_objectManager->create('Ticme\Contacts\Model\Contact');
        $contact->setName('Paul Ricard');
        $contact->save();
        
        $contactModel = $this->_objectManager->create('Ticme\Contacts\Model\Contact');
        $collection = $contactModel->getCollection()->addFieldToFilter('name', array('like'=> 'Paul Ricard'));
        foreach($collection as $contact) {
            var_dump($contact->getData());
        }
        **/  

        //die('test admin view');
    }
}