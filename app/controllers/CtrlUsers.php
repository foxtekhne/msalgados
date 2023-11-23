
<?php

use models\Users;
use core\utils\ControllerHandler;

class CtrlUsers extends ControllerHandler {

    private $users = null;

    public function __construct(){
        $this->users = new Users();
        parent::__construct();
    }

    public function get() {}

    public function post() {        
        $this->users->setUsername( $this->getParameter('username') );
        $this->users->setPassword( $this->getParameter('password') );
        if ($this->users->checkLogin()){
            echo  json_encode( array("login"=>"true"));   
        }else{
            echo  json_encode( array("login"=>"false"));
        }
    }

    public function put()   {}
    public function delete(){}
    public function file()  {}
}

new CtrlUsers();
?>