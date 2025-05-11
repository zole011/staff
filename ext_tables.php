<?php
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'staff',
    'Configuration/TypoScript',
    'Staff'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'Staff Plugin',
        'staff',
        'EXT:staff/Resources/Public/Icons/user_plugin_staff.svg'
    ],
    'list_type'
);