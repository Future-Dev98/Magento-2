<?php
namespace Training\Custom\Block\Adminhtml\Category\Edit;
 
use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;
 
class Delete extends GenericButton implements ButtonProviderInterface
{    
    public function getButtonData()
    {
        return [
            'label' => __('Delete'),
            'on_click' => 'deleteConfirm(\'' . __('Are you sure you want to delete this log?') . '\', \'' . $this->getDeleteUrl() . '\')',
            'class' => 'delete',
            'sort_order' => 20
        ];
    }
 
    public function getDeleteUrl()
    {
        $id = $this->getId();        
        return $this->getUrl('*/*/deletebrand', ['id' => 76]);
    }
}