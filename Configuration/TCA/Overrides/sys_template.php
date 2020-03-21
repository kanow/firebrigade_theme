<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    $extensionKey = 'fire_department';

    /**
     * Default TypoScript for FireDepartment
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'FireDepartment'
    );
});
