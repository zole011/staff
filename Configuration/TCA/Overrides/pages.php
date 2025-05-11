<?php
defined('TYPO3') or die();

call_user_func(function () {
    // Registracija tabele u backendu
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', [
        'tx_staff_domain_model_member' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:staff/Resources/Private/Language/locallang_db.xlf:tx_staff_domain_model_member',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:staff/Resources/Private/Language/locallang_db.xlf:tx_staff_domain_model_member.items', 0]
                ],
            ],
        ],
    ]);

    // Povezivanje sa TCA za administraciju
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'pages',
        'tx_staff_domain_model_member'
    );
});