<?php

namespace Training\Custom\Controller\Adminhtml\Category;

use Training\Custom\Controller\Adminhtml\Category\Category;
use Magento\Backend\App\Action;
use Training\Custom\Model\CategoryFactory;
use Magento\Framework\Registry;
use Magento\Backend\App\Action\Context;

class Save extends Category
{

    public function __construct(
        CategoryFactory $categoryFactory,
        Registry $registry,
        Context $context
    ) {
        parent::__construct($categoryFactory, $registry, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('category_id');
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($data = $this->getRequest()->getParams()) {
            if (array_key_exists('featured_image',$data)) {
                $data['featured_image'] = serialize($data['featured_image']);
            }
            
            //remove category id if is empty
            if (!$data['category_id']) {
                unset($data['category_id']);
            }

            $model = $this->initModel();
            if (!$model->getId() && $id) {
                $this->messageManager->addErrorMessage(__('This category no longer exists.'));
                return $resultRedirect->setPath('*/*/');
            }

            //add data
            $model->addData($data);

            try {
                $model->save();
                $this->messageManager->addSuccessMessage(__('Category was successfully saved'));
                $this->context->getSession()->setFormData(false);

                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['id' => $model->getId()]);
                }

                return $this->context->getResultRedirectFactory()->create()->setPath('*/*/');
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
                return $resultRedirect->setPath('*/*/edit', ['id' => $this->getRequest()->getParam('category_id')]);
            }
        } else {
            $resultRedirect->setPath('*/*/');
            $this->messageManager->addErrorMessage('No data to save.');
            return $resultRedirect;
        }
    }
}
