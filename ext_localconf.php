<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Plants',
            'List',
            [\SIMONKOEHLER\Plants\Controller\PlantController::class => 'list'],
            // non-cacheable actions
            [\SIMONKOEHLER\Plants\Controller\PlantController::class => '']
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Plants',
            'Detail',
            [\SIMONKOEHLER\Plants\Controller\PlantController::class => 'show'],
            // non-cacheable actions
            [\SIMONKOEHLER\Plants\Controller\PlantController::class => '']
        );

    }
);
