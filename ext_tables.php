<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Plants',
            'List',
            'Plants List'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Plants',
            'Detail',
            'Plants Detail'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
            'plants',
            'tx_plants_domain_model_plant'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('plants', 'Configuration/TypoScript', 'PLANTS Setup');

    }
);
