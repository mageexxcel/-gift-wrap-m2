<?php
/**
 * Adminhtml giftwrap list block
 *
 */
namespace Excellence\Giftwrap\Block\Adminhtml;

class Giftwrap extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'adminhtml_giftwrap';
        $this->_blockGroup = 'Excellence_Giftwrap';
        $this->_headerText = __('Gift Wrap');
        $this->_addButtonLabel = __('Add New Gift Wrap');
        parent::_construct();
        if ($this->_isAllowedAction('Excellence_Giftwrap::save')) {
            $this->buttonList->update('add', 'label', __('Add New Gift Wrap'));
        } else {
            $this->buttonList->remove('add');
        }
    }
    
    /**
     * Check permission for passed action
     *
     * @param string $resourceId
     * @return bool
     */
    protected function _isAllowedAction($resourceId)
    {
        return $this->_authorization->isAllowed($resourceId);
    }
}
