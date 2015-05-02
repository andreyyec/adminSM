<?php

require("../resources/libs/Smarty-3.1.16/libs/Smarty.class.php");

class ConfigMVC extends Smarty{

    public function __construct() {
        parent::__construct();
        $this->template_dir = "";
        $this->config_dir = "../_config/mvc";
        $this->compile_dir = "";
        $this->left_delimiter = '/%';
        $this->right_delimiter = '%/';
    }
    
    function setModule($nameModule) {
        $this->template_dir = "../$nameModule/view";
        $this->compile_dir  = "../$nameModule/view/compiled";
    }
    
}

?>
