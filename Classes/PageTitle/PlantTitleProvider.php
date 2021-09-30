<?php
namespace SIMONKOEHLER\Plants\PageTitle;

use TYPO3\CMS\Core\PageTitle\AbstractPageTitleProvider;

class PlantTitleProvider extends AbstractPageTitleProvider
{
    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
}
