<?php
namespace SIMONKOEHLER\Plants\Controller;
use SIMONKOEHLER\Plants\Domain\Repository\FamilyRepository;

class FamilyController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

    /**
    * @var familyRepository
    */
    protected $familyRepository;

    /**
     * Construct
     *
     * @return void
     */
    public function __construct(FamilyRepository $familyRepository) {
        $this->familyRepository = $familyRepository;
    }

    public function listAction(){

    }

    public function showAction(\SIMONKOEHLER\Plants\Domain\Model\Family $family){

    }

}
