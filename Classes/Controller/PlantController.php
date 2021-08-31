<?php
namespace SIMONKOEHLER\Plants\Controller;
use SIMONKOEHLER\Plants\Domain\Repository\PlantRepository;

class PlantController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

    /**
    * @var PlantRepository
    */
    protected $plantRepository;

    /**
     * Construct
     *
     * @return void
     */
    public function __construct(PlantRepository $plantRepository) {
        $this->plantRepository = $plantRepository;
    }

    public function listAction(){
        if($this->request->hasArgument('filter')){
            $this->view->assign('plants',$this->plantRepository->findAllFiltered($this->request->getArgument('filter')));
        }
        else{
            $this->view->assign('mode','all');
            $this->view->assign('plants',$this->plantRepository->findAll());
        }
        $this->view->assign('categories',$this->plantRepository->getCategories($this->settings['rootCategory']));
    }

    public function showAction(\SIMONKOEHLER\Plants\Domain\Model\Plant $plant){
        $metaTagManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry::class);

        $titleManager = $metaTagManager->getManagerForProperty('og:title');
        $titleManager->addProperty('og:title', $plant->getTitle());

        $this->view->assign('plant',$plant);
    }

}
