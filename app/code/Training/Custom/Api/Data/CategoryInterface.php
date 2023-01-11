<?php
namespace Training\Custom\Api\Data;

interface CategoryInterface
{
    const CATEGORY_ID = 'CATEGORY_id';
    const CATEGORY_NAME = 'category_name';
    const STATUS = 'status';
    const SHORT_CONTENT = 'short_content';
    const CONTENT = 'content';
    const URL_KEY = 'url_key';
    const META_TITLE = 'meta_title';
    const META_DESCRIPTION = 'meta_description';
    const META_KEYWORDS = 'meta_keywords';
    const FEATURED_IMAGE = 'featured_image';
    const FEATURED_ALT = 'featured_alt';

    const CREATED_AT = 'created_at';
    const IS_PINNED = 'is_pinned';

    const CATEGORIES = 'categories';
    const STORE_IDS = 'store_ids';
    const TYPE_REVISION = 'revision';

    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getStatus();

    /**
     * @param string $value
     * @return $this
     */
    public function setStatus($value);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $value
     * @return $this
     */
    public function setName($value);

    /**
     * @return string
     */
    public function getContent();

    /**
     * @param string $value
     * @return $this
     */
    public function setContent($value);

    /**
     * @return string
     */
    public function getUrlKey();

    /**
     * @param string $value
     * @return $this
     */
    public function setUrlKey($value);

    /**
     * @return string
     */
    public function getMetaTitle();

    /**
     * @param string $value
     * @return $this
     */
    public function setMetaTitle($value);

    /**
     * @return string
     */
    public function getMetaDescription();

    /**
     * @param string $value
     * @return $this
     */
    public function setMetaDescription($value);

    /**
     * @return string
     */
    public function getMetaKeywords();

    /**
     * @param string $value
     * @return $this
     */
    public function setMetaKeywords($value);

    /**
     * @return string
     */
    public function getFeaturedImage();

    /**
     * @param string $value
     * @return $this
     */
    public function setFeaturedImage($value);

    /**
     * @return string
     */
    public function getFeaturedAlt();

    /**
     * @param string $value
     * @return $this
     */
    public function setFeaturedAlt($value);

    /**
     * @return string
     */
    public function getCreatedAt();

    /**
     * @param string $value
     * @return $this
     */
    public function setCreatedAt($value);

    /**
     * @return mixed
     */
    public function getStoreIds();

    /**
     * @param mixed $value
     * @return $this
     */
    public function setStoreIds(array $value);

}