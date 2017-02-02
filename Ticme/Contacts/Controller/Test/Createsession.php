<?php
namespace Ticme\Contacts\Controller\Test;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Createsession extends Action
{
    /**
     * @var  \Magento\Catalog\Model\Session
     */
    protected $_catalogSession;

    public function __construct(
        Context $context,
        \Magento\Catalog\Model\Session $catalogSession
    )
    {
        $this->_catalogSession = $catalogSession;
        parent::__construct($context);
    }

    // Check http://domain.com/contacts/test/createsession
    public function execute()
    {
        echo 'I create my session value for Ticme:<br />';
        $this->_catalogSession->setMyvar('Ticme');
        echo '- value : '.$this->_catalogSession->getMyvar().'<br /><br />';

        echo 'I edit my session value for Ticme:<br />';
        $this->_catalogSession->setMyvar('Ticme 22');
        echo '- value : '.$this->_catalogSession->getMyvar().'<br /><br />';

        echo 'I delete my session value for Ticme:<br />';
        $this->_catalogSession->unsMyvar();
        echo '- value : '.$this->_catalogSession->getMyvar().'<br /><br />';
    }
}