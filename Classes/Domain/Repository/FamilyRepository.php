<?php
namespace SIMONKOEHLER\Plants\Domain\Repository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;


class FamilyRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	protected $defaultOrderings = array(
		'title' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
	);

}
