<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Samowitsch.Phpunitexample',
            'Fe1',
            'Example FE'
        );

        if (TYPO3_MODE === 'BE') {

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'Samowitsch.Phpunitexample',
                'tools', // Make module a submodule of 'tools'
                'be1', // Submodule key
                '', // Position
                [
                    'Foo' => 'list, show, new, create, edit, update, delete','Bar' => 'list, show, new, create, edit, update, delete',
                ],
                [
                    'access' => 'user,group',
                    'icon'   => 'EXT:phpunitexample/Resources/Public/Icons/user_mod_be1.svg',
                    'labels' => 'LLL:EXT:phpunitexample/Resources/Private/Language/locallang_be1.xlf',
                ]
            );

        }

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('phpunitexample', 'Configuration/TypoScript', 'PHP Unit example');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_phpunitexample_domain_model_foo', 'EXT:phpunitexample/Resources/Private/Language/locallang_csh_tx_phpunitexample_domain_model_foo.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_phpunitexample_domain_model_foo');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_phpunitexample_domain_model_bar', 'EXT:phpunitexample/Resources/Private/Language/locallang_csh_tx_phpunitexample_domain_model_bar.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_phpunitexample_domain_model_bar');

    }
);
