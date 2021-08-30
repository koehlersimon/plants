<?php
namespace SIMONKOEHLER\Plants\Domain\Repository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;


class PlantRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	protected $defaultOrderings = array(
		'slug' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
	);

	public function findAllFiltered($filter) {
        $query = $this->createQuery();
		foreach ($filter as $key => $value) {

			if($key === 'void' && $value === '1'){
				$constraints[] = $query->logicalAnd(
			        [
			            $constraint[] = $query->equals('isvoid', 1)
			        ]
			    );
			}
			if($key === 'unique' && $value === '1'){
				$constraints[] = $query->logicalAnd(
			        [
			            $constraint[] = $query->equals('isunique', 1)
			        ]
			    );
			}
		}
        $result = $query->matching($query->logicalAnd($query->logicalAnd($constraint)))->execute();
        if (count($result) > 0) {
            return $result;
        }
    }

    public function findByCategory($category) {
        $query = $this->createQuery();
        $constraint[] = $query->contains('categories', $category);
        $result = $query->matching($query->logicalAnd($query->logicalAnd($constraint)))->execute();
        if (count($result) > 0) {
            return $result;
        }
    }

	public function getCategoryData($category) {
		$queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('sys_category');
        $query = $queryBuilder->select('*')->from('sys_category');
        $query->where(
            $queryBuilder->expr()->eq('uid', $queryBuilder->createNamedParameter($category, \PDO::PARAM_INT))
        );
        $result = $query->execute()->fetchAll();
        return $result[0];
    }

    public function getCategories($rootCategory){
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('sys_category');
        $query = $queryBuilder->select('*')->from('sys_category');
        $query->where(
            $queryBuilder->expr()->eq('parent', $queryBuilder->createNamedParameter($rootCategory, \PDO::PARAM_INT))
        );
        $result = $query->execute()->fetchAll();
        return $result;
    }

}
