<?php
namespace Training\Custom\Controller\Adminhtml\Category;
 
use Magento\Framework\Controller\ResultFactory;
use Magento\Backend\App\Action\Context;
use Magento\Ui\Component\MassAction\Filter;
use Training\Custom\Model\ResourceModel\Category\CollectionFactory;
 
class Massdelete extends \Magento\Backend\App\Action {
     
    protected $filter;
 
    protected $collectionFactory;
 
    public function __construct(Context $context, Filter $filter, CollectionFactory $collectionFactory) {
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context);
    }
 
    public function execute() {
         
        $collection = $this->filter->getCollection($this->collectionFactory->create());
        $collectionSize = $collection->getSize();
 
        foreach ($collection as $template) {
            $template->delete();
        }
 
        $this->messageManager->addSuccess(__('A total of %1 record(s) have been deleted.', $collectionSize));
         
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        return $resultRedirect->setPath('*/*/');
    }
}