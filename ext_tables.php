<?php
defined('TYPO3') or die();

call_user_func(function () {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Gmbit.Staff',
        'web',
        'teamadmin',
        '',
        [
            \Gmbit\Staff\Controller\TeamController::class => 'list, show, new, create, edit, update, delete'
        ],
        [
            'access' => 'user,group',
            'icon' => 'EXT:staff/Resources/Public/Icons/user_mod_team.svg',
            'labels' => 'LLL:EXT:staff/Resources/Private/Language/locallang_mod_team.xlf',
        ]
    );
});
