<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

	protected function _initConstants() {
        $constantsConfig = new Zend_Config_Ini(
            APPLICATION_PATH . '/configs/constants.ini',
            APPLICATION_ENV,
            array('allowModifications' => true)
        );

        Zend_Registry::set("constants", $constantsConfig);
    }

}

