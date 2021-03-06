<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:plants/Resources/Private/Language/locallang_db.xlf:tx_plants_domain_model_plant',
        'label' => 'title',
        'label_alt' => 'slug',
        'default_sortby' => 'ORDER BY title ASC',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'title,description',
        'iconfile' => 'EXT:plants/ext_icon.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, crdate, title, botanical_name, description',
    ],
    'types' => [
        '1' => ['showitem' => 'l10n_parent, l10n_diffsource, crdate, --palette--;;titlegroup, slug, description, health_benefits, cultivation, media, --palette--;Nutrition content per 100g serving;nutrition, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel'],
    ],
    'palettes' => [
        'titlegroup' => ['showitem' => 'title, botanical_name, family'],
        'nutrition' => ['showitem' => 'protein_content, iron_content, fiber_content']
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_plants_domain_model_plant',
                'foreign_table_where' => 'AND tx_plants_domain_model_plant.pid=###CURRENT_PID### AND tx_plants_domain_model_plant.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'family' => [
            'exclude' => true,
            'label' => 'LLL:EXT:plants/Resources/Private/Language/locallang_db.xlf:tx_plants_domain_model_plant.family',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['Please choose', 0],
                ],
                'foreign_table' => 'tx_plants_domain_model_family'
            ],
        ],
        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:plants/Resources/Private/Language/locallang_db.xlf:tx_plants_domain_model_plant.title',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'eval' => 'trim',
            ],
        ],
        'botanical_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:plants/Resources/Private/Language/locallang_db.xlf:tx_plants_domain_model_plant.botanical_name',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'eval' => 'trim',
            ],
        ],
        'slug' => [
            'exclude' => true,
            'label' => 'LLL:EXT:plants/Resources/Private/Language/locallang_db.xlf:tx_plants_domain_model_plant.slug',
            'config' => [
                'type' => 'slug',
                'prependSlash' => true,
                'generatorOptions' => [
                    'fields' => ['title'],
                    'fieldSeparator' => '/',
                    'prefixParentPageSlug' => true,
                    'replacements' => [
                        '/' => '-',
                    ],
                ],
                'fallbackCharacter' => '-',
                'eval' => 'uniqueInSite',
				'default' => ''
            ],
        ],
        'description' => [
            'exclude' => true,
            'label' => 'LLL:EXT:plants/Resources/Private/Language/locallang_db.xlf:tx_plants_domain_model_plant.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 8,
                'enableRichtext' => true,
                'default' => ''
            ],
        ],
        'cultivation' => [
            'exclude' => true,
            'label' => 'LLL:EXT:plants/Resources/Private/Language/locallang_db.xlf:tx_plants_domain_model_plant.cultivation',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 8,
                'enableRichtext' => true,
                'default' => ''
            ],
        ],
        'health_benefits' => [
            'exclude' => true,
            'label' => 'LLL:EXT:plants/Resources/Private/Language/locallang_db.xlf:tx_plants_domain_model_plant.health_benefits',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 8,
                'enableRichtext' => true,
                'default' => ''
            ],
        ],
        'media' => [
            'exclude' => true,
            'label' => 'LLL:EXT:plants/Resources/Private/Language/locallang_db.xlf:tx_plants_domain_model_plant.media',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'media',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference'
                    ],
                    'foreign_types' => [
                        '0' => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ]
                    ],
                    'maxitems' => 50
                ]
            ),
        ],
        'protein_content' => [
            'exclude' => true,
            'label' => 'LLL:EXT:plants/Resources/Private/Language/locallang_db.xlf:tx_plants_domain_model_plant.protein_content',
            'config' => [
                'type' => 'input',
                'size' => 5,
                'eval' => 'double2'
            ]
        ],
        'iron_content' => [
            'exclude' => true,
            'label' => 'LLL:EXT:plants/Resources/Private/Language/locallang_db.xlf:tx_plants_domain_model_plant.iron_content',
            'config' => [
                'type' => 'input',
                'size' => 5,
                'eval' => 'double2'
            ]
        ],
        'fiber_content' => [
            'exclude' => true,
            'label' => 'LLL:EXT:plants/Resources/Private/Language/locallang_db.xlf:tx_plants_domain_model_plant.fiber_content',
            'config' => [
                'type' => 'input',
                'size' => 5,
                'eval' => 'double2'
            ]
        ],
    ],
];
