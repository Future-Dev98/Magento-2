<?php
namespace Training\Custom\Model\ResourceModel\Category;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'category_id';
	protected $_eventPrefix = 'training_custom_post_category_collection';
	protected $_eventObject = 'category_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Training\Custom\Model\Category', 'Training\Custom\Model\ResourceModel\Category');
	}

}