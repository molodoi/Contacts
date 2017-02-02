<?php
namespace Ticme\Contacts\Controller\Test;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Registry extends Action
{
    /**
     * @var  \Magento\Framework\Registry
     */
    protected $_registry;

    public function __construct(
        Context $context,
        \Magento\Framework\Registry $registry
    )
    {
        $this->_registry = $registry;
        parent::__construct($context);
    }

    // Check http://domain.com/contacts/test/registry 
    public function execute()
    {
        echo 'I create my registry value for MyVar:<br />';
        $this->_registry->register('myVar','Ticme');
        echo '- value : '.$this->_registry->registry('myVar').'<br /><br />';

        echo 'I edit my registry value for MyVar:<br />';
        $this->_registry->unregister('myVar');
        $this->_registry->register('myVar','Ticme 2');
        echo '- value : '.$this->_registry->registry('myVar').'<br /><br />';

        echo 'I delete my registry value for MyVar:<br />';
        $this->_registry->unregister('myVar');
        echo '- value : '.$this->_registry->registry('myVar').'<br /><br />';
    }
} 