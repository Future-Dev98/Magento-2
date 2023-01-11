<?php
namespace Training\Custom\Controller\Adminhtml\Category;

use Training\Custom\Controller\Adminhtml\Category\Index;

class NewAction extends Index
{
    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        return $this->resultRedirectFactory->create()->setPath('*/*/edit');
    }
}
