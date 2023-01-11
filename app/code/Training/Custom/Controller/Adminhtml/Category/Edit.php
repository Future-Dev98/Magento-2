<?php
namespace Training\Custom\Controller\Adminhtml\Category;

use Magento\Framework\Controller\ResultFactory;
use Training\Custom\Controller\Adminhtml\Category\Index;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Backend\App\Action\Context;

class Edit extends \Magento\Backend\App\Action implements HttpGetActionInterface
{
    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry;

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $cagetoryFactory;

    /**
     * @param Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     * @param \Magento\Framework\Registry $registry
     */
    public function __construct(
        Context $context,
        \Training\Custom\Model\CategoryFactory $cagetoryFactory,
        \Magento\Framework\Registry $registry
    ) {
        $this->cagetoryFactory = $cagetoryFactory;
        $this->_coreRegistry = $registry;
        parent::__construct($context);
    }
    
    /**
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        // 1. Get ID and create model
        $id = $this->getRequest()->getParam('category_id');
        $model = $this->_objectManager->create(\Training\Custom\Model\Category::class);

        // 2. Initial checking
        if ($id) {
            $model->load($id);
            if (!$model->getId()) {
                $this->messageManager->addErrorMessage(__('This page no longer exists.'));
                /** \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
                $resultRedirect = $this->cagetoryFactory->create();
                return $resultRedirect->setPath('*/*/');
            }
        }

        $this->_coreRegistry->register('training_category', $model);

        // 5. Build edit form
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        // $resultPage->addBreadcrumb(
        //     $id ? __('Edit Category') : __('New Category'),
        //     $id ? __('Edit Category') : __('New Category')
        // );
        $resultPage->getConfig()->getTitle()->prepend(__('Category'));
        $resultPage->getConfig()->getTitle()
            ->prepend($model->getId() ? $model->getTitle() : __('New Category'));

        return $resultPage;
    }
}

