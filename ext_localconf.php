<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Plants',
            'List',
            [\SIMONKOEHLER\Plants\Controller\PlantController::class => 'list,show'],
            // non-cacheable actions
            [\SIMONKOEHLER\Plants\Controller\PlantController::class => 'show']
        );

    }
);
