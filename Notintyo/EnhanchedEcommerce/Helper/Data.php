<?php

namespace Notintyo\EnhanchedEcommerce\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    
    const XML_ENHANCHED_ENABLED    = 'notintyo/general/enhanched_ecommerce_enabled';

    
    public function isEnhanchedEcommerceEnabled($store = null)
    {
        return $this->scopeConfig->getValue(self::XML_ENHANCHED_ENABLED, \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store);   
    }
    
}
