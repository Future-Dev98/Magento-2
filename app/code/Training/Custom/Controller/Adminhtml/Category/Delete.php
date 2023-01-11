<?php
namespace Training\Custom\Controller\Adminhtml\Category;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Training\Custom\Model\Category;
 
class Delete extends Action {
     
    public function execute() {

        $_publicActions = ['delete'];
        $id = $this->getRequest()->getParam('category_id');
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            $title = "";
            try {
               $model = $this->_objectManager->create('Training\Custom\Model\Category');
               $model->load($id);
               $model->delete();
               $this->messageManager->addSuccess(__('The category has been deleted.'));
               return $resultRedirect->setPath('*/*/index');
           } catch (\Exception $e) {
               $this->messageManager->addError($e->getMessage());
               return $resultRedirect->setPath('*/*/edit', ['category_id' => $id]);
           }
       }
   }
}