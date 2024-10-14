<?php

namespace MagentoLatam\CustomMenuAdminhtml\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Category extends AbstractDb
{
    protected function _construct()
    {
        $this->_init("catalog_category_entity", "entity_id");
    }
}
