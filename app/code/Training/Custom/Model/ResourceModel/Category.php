<?php
namespace Training\Custom\Model\ResourceModel;


class Category extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	/**
	 *
	 * @param \Magento\Framework\Model\ResourceModel\Db\Context $context
	 */
	public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	)
	{
		parent::__construct($context);
	}
	
	protected function _construct()
	{
		$this->_init('training_custom_post_category', 'category_id');
	}
	
}