
plugin.tx_phpunitexample_fe1 {
    view {
        # cat=plugin.tx_phpunitexample_fe1/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:phpunitexample/Resources/Private/Templates/
        # cat=plugin.tx_phpunitexample_fe1/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:phpunitexample/Resources/Private/Partials/
        # cat=plugin.tx_phpunitexample_fe1/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:phpunitexample/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_phpunitexample_fe1//a; type=string; label=Default storage PID
        storagePid =
    }
}

module.tx_phpunitexample_be1 {
    view {
        # cat=module.tx_phpunitexample_be1/file; type=string; label=Path to template root (BE)
        templateRootPath = EXT:phpunitexample/Resources/Private/Backend/Templates/
        # cat=module.tx_phpunitexample_be1/file; type=string; label=Path to template partials (BE)
        partialRootPath = EXT:phpunitexample/Resources/Private/Backend/Partials/
        # cat=module.tx_phpunitexample_be1/file; type=string; label=Path to template layouts (BE)
        layoutRootPath = EXT:phpunitexample/Resources/Private/Backend/Layouts/
    }
    persistence {
        # cat=module.tx_phpunitexample_be1//a; type=string; label=Default storage PID
        storagePid =
    }
}
