
plugin.tx_phpunitexample_fe1 {
    view {
        templateRootPaths.0 = EXT:phpunitexample/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_phpunitexample_fe1.view.templateRootPath}
        partialRootPaths.0 = EXT:phpunitexample/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_phpunitexample_fe1.view.partialRootPath}
        layoutRootPaths.0 = EXT:phpunitexample/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_phpunitexample_fe1.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_phpunitexample_fe1.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

# these classes are only used in auto-generated templates
plugin.tx_phpunitexample._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-phpunitexample table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-phpunitexample table th {
        font-weight:bold;
    }

    .tx-phpunitexample table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)

# Module configuration
module.tx_phpunitexample_tools_phpunitexamplebe1 {
    persistence {
        storagePid = {$module.tx_phpunitexample_be1.persistence.storagePid}
    }
    view {
        templateRootPaths.0 = EXT:phpunitexample/Resources/Private/Backend/Templates/
        templateRootPaths.1 = {$module.tx_phpunitexample_be1.view.templateRootPath}
        partialRootPaths.0 = EXT:phpunitexample/Resources/Private/Backend/Partials/
        partialRootPaths.1 = {$module.tx_phpunitexample_be1.view.partialRootPath}
        layoutRootPaths.0 = EXT:phpunitexample/Resources/Private/Backend/Layouts/
        layoutRootPaths.1 = {$module.tx_phpunitexample_be1.view.layoutRootPath}
    }
}
