<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Samowitsch.Phpunitexample',
            'Fe1',
            [
                'Foo' => 'list, show, new, create, edit, update, delete',
                'Bar' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Foo' => 'create, update, delete',
                'Bar' => 'create, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    fe1 {
                        iconIdentifier = phpunitexample-plugin-fe1
                        title = LLL:EXT:phpunitexample/Resources/Private/Language/locallang_db.xlf:tx_phpunitexample_fe1.name
                        description = LLL:EXT:phpunitexample/Resources/Private/Language/locallang_db.xlf:tx_phpunitexample_fe1.description
                        tt_content_defValues {
                            CType = list
                            list_type = phpunitexample_fe1
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'phpunitexample-plugin-fe1',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:phpunitexample/Resources/Public/Icons/user_plugin_fe1.svg']
			);
		
    }
);
