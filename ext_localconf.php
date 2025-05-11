<?php

defined('TYPO3') || die();

call_user_func(function () {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Staff',
        'Team',
        [
            \Gmbit\Staff\Controller\TeamController::class => 'list, show'
        ],
        // Non-cacheable actions
        [
            \Gmbit\Staff\Controller\TeamController::class => 'list, show'
        ]
    );
});