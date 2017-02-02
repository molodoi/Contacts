<?php
namespace Ticme\Contacts\Controller\Test;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Mycookie extends Action
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
        \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager,
        \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory
    )
    {
        $this->_cookieManager = $cookieManager;
        $this->_cookieMetadataFactory = $cookieMetadataFactory;
        parent::__construct($context);
    }


    // Check http://domain.com/contacts/test/mycookie to create "ticme_contact_age" cookie
    public function execute()
    {
        $metadata = $this->_cookieMetadataFactory
            ->createPublicCookieMetadata()
            ->setDuration(3600); //1H


        $this->_cookieManager->setPublicCookie(
            'ticme_contact_age',
            29,
            $metadata
        );


        echo ('The cookies has been defined');
    }
}