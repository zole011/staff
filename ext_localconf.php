<?php
defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'web', // Parent module
    'teamadmin', // Module key
    '', // Position (leave empty to use default)
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('staff') . 'Resources/Private/Icons/user_mod_team.svg', // Icon
    [
        'access' => 'user,group', // Permissions
        'icon' => 'EXT:staff/Resources/Public/Icons/user_mod_team.svg', // Icon
        'labels' => 'LLL:EXT:staff/Resources/Private/Language/locallang_mod_team.xlf', // Labels
    ]
);
