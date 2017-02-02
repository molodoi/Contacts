<?php
namespace Ticme\Contacts\Block\Product;

class View extends \Magento\Catalog\Block\Product\View
{
    /**
     * Retrieve current product model
     *
     * @return \Magento\Catalog\Model\Product
     */
    public function getProduct()
    {

    	parent::getProduct();
       //die('test rewrite block product view');
    }
}