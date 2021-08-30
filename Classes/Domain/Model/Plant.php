<?php
namespace SIMONKOEHLER\Plants\Domain\Model;

class Plant extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * media
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @Cascade remove
     */
    protected $media = null;

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * url
     *
     * @var string
     */
    protected $url = '';

    /**
     * target
     *
     * @var string
     */
    protected $target = '';

    /**
     * Returns the media
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $media
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * categories
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $categories;


    /**
     * Get categories
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category>
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set categories
     *
     * @param  \TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories
     * @return void
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    /**
     * Returns the isvoid
     *
     * @return int $isvoid
     */
    public function getIsvoid()
    {
        return $this->isvoid;
    }

    /**
     * Returns the isunique
     *
     * @return int $isunique
     */
    public function getIsunique()
    {
        return $this->isunique;
    }

    /**
     * Returns the owner
     *
     * @return int $owner
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets the owner
     *
     * @param int $owner
     * @return void
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    /**
     * Returns the target
     *
     * @return int $target
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Returns the htmlversion
     *
     * @return int $htmlversion
     */
    public function getHtmlversion()
    {
        return $this->htmlversion;
    }

    /**
     * Returns the title
     *
     * @return int $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Returns the url
     *
     * @return int $url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Returns the description
     *
     * @return int $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the codeType
     *
     * @return int $codeType
     */
    public function getCodeType()
    {
        return $this->codeType;
    }
}
