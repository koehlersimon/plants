<?php
namespace SIMONKOEHLER\Plants\Domain\Model;
use TYPO3\CMS\Extbase\Annotation\ORM\Cascade;

class Family extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
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
     * botanicalName
     *
     * @var string
     */
    protected $botanicalName = '';


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
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
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
     * Returns the botanicalName
     *
     * @return string $botanicalName
     */
    public function getBotanicalName()
    {
        return $this->botanicalName;
    }

}
