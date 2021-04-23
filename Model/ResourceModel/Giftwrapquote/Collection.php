<?php

namespace Excellence\Giftwrap\Model\ResourceModel\Giftwrapquote;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Excellence\Giftwrap\Model\Giftwrapquote', 'Excellence\Giftwrap\Model\ResourceModel\Giftwrapquote');
    }
}
