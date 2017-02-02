<?php
namespace Ticme\Contacts\Controller\Test;
use Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;

class MyHelper extends Action
{
    protected $_myHelper;

    /**
     * @param \Ticme\Contacts\Helper\MyHelper $helperData
     */
    public function __construct(
        Context $context,
        \Ticme\Contacts\Helper\MyHelper $helper
    ) {
        $this->_myHelper = $helper;
        parent::__construct($context);
    }

    public function execute()
    {
        $nbr = 2;
        echo $nbr.' fois 2 = '.$this->_myHelper->foisdeux($nbr);
    }
}