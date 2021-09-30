<?php
namespace SIMONKOEHLER\Plants\Domain\Repository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;

class FamilyRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	protected $defaultOrderings = array(
		'title' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
	);

	// Example for repository wide settings
	public function initializeObject() {
	  /** @var Typo3QuerySettings $querySettings */
	  $querySettings = new Typo3QuerySettings();

	  // don't add the pid constraint
	  $querySettings->setRespectStoragePage(false);

	  // add deleted rows to the result
	  $querySettings->setIncludeDeleted(FALSE);

	  // don't add sys_language_uid constraint
	  $this->setDefaultQuerySettings($querySettings);
	}

}
