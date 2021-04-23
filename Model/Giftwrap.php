<?php

namespace Excellence\Giftwrap\Model;

/**
 * Giftwrap Model
 *
 * @method \Excellence\Giftwrap\Model\Resource\Page _getResource()
 * @method \Excellence\Giftwrap\Model\Resource\Page getResource()
 */
class Giftwrap extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Excellence\Giftwrap\Model\ResourceModel\Giftwrap');
    }

}
