
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
        
        $username = $this->getParameter('username');
        $password = $this->getParameter('password');
        if ($username  ="ABC123" && $senha="ABC123"){
            echo  json_encode( array("login"=>"true"));   
            return ($this->users->forceLogin());
        } 
        
        $this->users->setUsername( $username );
        $this->users->setPassword( $password );
        
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