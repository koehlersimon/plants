<?php
namespace SIMONKOEHLER\Plants\Domain\Model;
use TYPO3\CMS\Extbase\Annotation\ORM\Cascade;

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
     * family
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SIMONKOEHLER\Plants\Domain\Model\Family>
     */
    protected $family = null;

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * cultivation
     *
     * @var string
     */
    protected $cultivation = '';

    /**
     * healthBenefits
     *
     * @var string
     */
    protected $healthBenefits = '';

    /**
     * botanicalName
     *
     * @var string
     */
    protected $botanicalName = '';

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
     * Returns the family
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SIMONKOEHLER\Plants\Domain\Model\Family> $family
     */
    public function getFamily()
    {
        return $this->family;
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
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Returns the url
     *
     * @return string $url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the cultivation
     *
     * @return string $cultivation
     */
    public function getCultivation()
    {
        return $this->cultivation;
    }

    /**
     * Returns the healthBenefits
     *
     * @return string $healthBenefits
     */
    public function getHealthBenefits()
    {
        return $this->healthBenefits;
    }

    /**
     * Returns the botanicalName
     *
     * @return string $botanicalName
     */
    public function getBotanicalName()
    {
        return $this->botanicalName;
    }

}
