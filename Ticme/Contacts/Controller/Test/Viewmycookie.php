<?php
namespace Ticme\Contacts\Controller\Test;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Viewmycookie extends Action
{
    /**
    * @var \Magento\Framework\Stdlib\CookieManagerInterface
    */
    protected $_cookieManager;

    /**
     * @var \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory
     */
    protected $_cookieMetadataFactory;


    public function __construct(
        Context $context,
        \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager
    )
    {
        $this->_cookieManager = $cookieManager;
        parent::__construct($context);
    }

    // Check http://domain.com/contacts/test/viewmycookie
    public function execute()
    {
        $cookieValue = $this->_cookieManager->getCookie('ticme_contact_age', 0);
        $this->_cookieManager->deleteCookie('ticme_contact_age');
        die ('The cookie value defined is : '.$cookieValue);
    }
}