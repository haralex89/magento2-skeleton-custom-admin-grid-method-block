<?php

namespace MagentoLatam\CustomMenuAdminhtml\Model\ResourceModel\Category;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use MagentoLatam\CustomMenuAdminhtml\Model\Category;
use MagentoLatam\CustomMenuAdminhtml\Model\ResourceModel\Category as CategoryResource;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Category::class, CategoryResource::class);
    }

    protected function _initSelect()
    {
        parent::_initSelect();

        // Adding a join to another_table
        $this->getSelect()->join(
            ['ccev' => $this->getTable('catalog_category_entity_varchar')],
            'main_table.entity_id = ccev.entity_id'
        )->join(
            ['ea' => $this->getTable('eav_attribute')],
            'ccev.attribute_id = ea.attribute_id AND ea.attribute_code="name"'
        );

        return $this;
    }
}
