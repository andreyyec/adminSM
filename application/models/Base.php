<?php
class Application_Model_Base{
    protected $_comment;
    protected $_created;
    protected $_email;
    protected $_id;
 
    function userValidate(){
        session_start();
        
        return phpinfo();
    }
}
?>