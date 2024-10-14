<?php

namespace MagentoLatam\CustomMenuAdminhtml\Block\Adminhtml;

class Category extends \Magento\Backend\Block\Widget\Grid\Container
{

    protected function _construct()
    {
        $this->_controller = 'adminhtml_index_index';
        $this->_blockGroup = 'MagentoLatam_CustomMenuAdminhtml';
        $this->_headerText = __('Posts');
        parent::_construct();
    }

}
