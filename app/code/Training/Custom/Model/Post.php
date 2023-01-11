<?php
namespace Training\Custom\Model;

use Training\Custom\Api\Data\PostInterface;
use Magento\Framework\DataObject\IdentityInterface;

class Post extends \Magento\Framework\Model\AbstractModel implements IdentityInterface, PostInterface
{
	const CACHE_TAG = 'training_custom_post';
	protected $_cacheTag = 'training_custom_post';
	protected $_eventPrefix = 'training_custom_post';
	
	protected function _construct()
	{
		$this->_init('Training\Custom\Model\ResourceModel\Post');
	}

	/**
	 * Get Identities
	 */
	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	/**
	 * Get Default Values
	 */
	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}

	/**
     * {@inheritdoc}
     */
	 public function getStatus()
	 {
		 return $this->getData(self::STATUS);
	 }

	 /**
     * {@inheritdoc}
     */
	 public function setStatus($value)
	 {
		 return $this->setData(self::STATUS, $value);
	 }

	 /**
     * {@inheritdoc}
     */
	 public function getName()
	 {
		 return $this->getData(self::NAME);
	 }
 
 
	 /**
	  * {@inheritdoc}
	  */
	 public function setName($value)
	 {
		 return $this->setData(self::POST_NAME, $value);
	 }

	 /**
     * {@inheritdoc}
     */
    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }


    /**
     * {@inheritdoc}
     */
    public function setContent($value)
    {
        return $this->setData(self::CONTENT, $value);
    }

	/**
     * {@inheritdoc}
     */
	 public function getUrlKey()
	 {
		 return $this->getData(self::URL_KEY);
	 }
 
	 /**
	  * {@inheritdoc}
	  */
	 public function setUrlKey($value)
	 {
		 return $this->setData(self::URL_KEY, $value);
	 }
 
	 /**
	  * {@inheritdoc}
	  */
	 public function getMetaTitle()
	 {
		 return $this->getData(self::META_TITLE);
	 }
 
	 /**
	  * {@inheritdoc}
	  */
	 public function setMetaTitle($value)
	 {
		 return $this->setData(self::META_TITLE, $value);
	 }
 
	 /**
	  * {@inheritdoc}
	  */
	 public function getMetaDescription()
	 {
		 return $this->getData(self::META_DESCRIPTION);
	 }
 
	 /**
	  * {@inheritdoc}
	  */
	 public function setMetaDescription($value)
	 {
		 return $this->setData(self::META_DESCRIPTION, $value);
	 }
 
	 /**
	  * {@inheritdoc}
	  */
	 public function getMetaKeywords()
	 {
		 return $this->getData(self::META_KEYWORDS);
	 }
 
	 /**
	  * {@inheritdoc}
	  */
	 public function setMetaKeywords($value)
	 {
		 return $this->setData(self::META_KEYWORDS, $value);
	 }
 
	 /**
	  * {@inheritdoc}
	  */
	 public function getFeaturedImage()
	 {
		 return $this->getData(self::FEATURED_IMAGE);
	 }
 
	 /**
	  * {@inheritdoc}
	  */
	 public function setFeaturedImage($value)
	 {
		 return $this->setData(self::FEATURED_IMAGE, $value);
	 }

	 /**
     * {@inheritdoc}
     */
	 public function getFeaturedAlt()
	 {
		 return $this->getData(self::FEATURED_ALT);
	 }
 
	 /**
	  * {@inheritdoc}
	  */
	 public function setFeaturedAlt($value)
 
	 {
 
		 return $this->setData(self::FEATURED_ALT, $value);
 
	 }
 
 
 
	 /**
	  * {@inheritdoc}
	  */
	 public function getCreatedAt()
	 {
		 return $this->getData(self::CREATED_AT);
	 }
 
	 /**
	  * {@inheritdoc}
	  */
	 public function setCreatedAt($value)
	 {
		return $this->setData(self::CREATED_AT, $value);
	 }

	/**
     * @return mixed
     */
    public function getCategories()
	{
		return $this->getData(self::CATEGORIES);
	}

    /**
     * @param mixed $value
     * @return $this
     */
    public function setCategories(array $value)
	{
		return $this->setData(self::CATEGORIES, $value);
	}

    /**
     * @return mixed
     */
    public function getStoreIds()
	{
		return $this->getData(self::STORE_IDS);
	}

    /**
     * @param mixed $value
     * @return $this
     */
    public function setStoreIds(array $value)
	{
		return $this->setData(self::STORE_IDS, $value);
	}
}
