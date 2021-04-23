<?php

namespace Excellence\Giftwrap\Model;

class Giftwrapquote extends \Magento\Framework\Model\AbstractModel
{
	const CACHE_TAG = 'excellence_giftwrapquote';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Excellence\Giftwrap\Model\ResourceModel\Giftwrapquote');
    }
    
   
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
