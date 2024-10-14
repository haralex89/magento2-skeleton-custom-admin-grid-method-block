<?php

namespace MagentoLatam\CustomMenuAdminhtml\Controller\Adminhtml\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface
{

    protected $resultPageFactory;
    private $_authorization;

    public function __construct(
        Context     $context,
        PageFactory $resultPageFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();

        $resultPage->setActiveMenu("MagentoLatam_CustomMenuAdminhtml::index");
        $resultPage->getConfig()->getTitle()->prepend(__('Custom Admin Html'));

        return $resultPage;
    }

    public function _isAllowed()
    {
        return $this->_authorization->isAllowed("MagentoLatam_CustomMenuAdminhtml::index");
    }

}
