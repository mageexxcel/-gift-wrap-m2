<?php

namespace Excellence\Giftwrap\Model\ResourceModel;


class Giftwrapquote extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('excellence_giftwrapquote', 'giftwrap_id');
    }
}
