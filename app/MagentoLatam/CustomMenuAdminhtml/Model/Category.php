<?php

namespace MagentoLatam\CustomMenuAdminhtml\Model;

use Magento\Framework\Model\AbstractModel;
use MagentoLatam\CustomMenuAdminhtml\Model\ResourceModel\Category as CategoryResource;

class Category extends AbstractModel
{
    protected function _construct()
    {
        /**
         * Se requiere una clase tipo ResourceModel
         */
        $this->_init(CategoryResource::class);
        parent::_construct();
    }
}
