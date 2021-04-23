<?php

/**
 * Giftwrap Resource Collection
 */
namespace Excellence\Giftwrap\Model\ResourceModel\Giftwrap;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Excellence\Giftwrap\Model\Giftwrap', 'Excellence\Giftwrap\Model\ResourceModel\Giftwrap');
    }
}
