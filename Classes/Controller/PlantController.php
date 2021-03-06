<?php
namespace SIMONKOEHLER\Plants\Controller;
use SIMONKOEHLER\Plants\Domain\Repository\PlantRepository;
use SIMONKOEHLER\Plants\Domain\Repository\FamilyRepository;
use SIMONKOEHLER\Plants\PageTitle\PlantTitleProvider;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class PlantController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

    /**
    * @var PlantRepository
    */
    protected $plantRepository;

    /**
    * @var FamilyRepository
    */
    protected $familyRepository;

    /**
     * Construct
     *
     * @return void
     */
    public function __construct(PlantRepository $plantRepository, FamilyRepository $familyRepository) {
        $this->plantRepository = $plantRepository;
        $this->familyRepository = $familyRepository;
    }

    public function listAction(){
        if($this->request->hasArgument('filter')){
            $this->view->assign('plants',$this->plantRepository->findAllFiltered($this->request->getArgument('filter')));
        }
        else{
            $this->view->assign('plants',$this->plantRepository->findAll());
        }

        $plantFamilies = $this->familyRepository->findAll();
        $this->view->assign('plantFamilies',$plantFamilies);
        $this->view->assign('settings',$this->settings);
    }

    public function showAction(\SIMONKOEHLER\Plants\Domain\Model\Plant $plant){

        $titleProvider = GeneralUtility::makeInstance(PlantTitleProvider::class);
        $titleProvider->setTitle($plant->getTitle());

        $metaTagManager = GeneralUtility::makeInstance(\TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry::class);

        $titleManager = $metaTagManager->getManagerForProperty('og:title');
        $titleManager->addProperty('og:title', $plant->getTitle());

        $this->view->assign('plant',$plant);
    }

}
