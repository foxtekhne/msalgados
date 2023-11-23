
<?php

use models\Users;
use core\utils\ControllerHandler;

class CtrlUsers extends ControllerHandler {

    private $users = null;

    public function __construct(){
        $this->users = new Users();
        parent::__construct();
    }

    public function get() {
        print_r($this->users->listAll());
    }

    public function post() {        
        $id = $this->getParameter('id');
        $username = $this->getParameter('username');
        $password = $this->getParameter('password');
        $created_at = $this->getParameter('created_at');
        $this->users->populate( $id, $username, $password, $created_at);
        $result = $this->users->save();
        echo $result;
    }

    public function put() {        
        $id = $this->getParameter('id');
        $username = $this->getParameter('username');
        $password = $this->getParameter('password');
        $created_at = $this->getParameter('created_at');
        $this->users->populate( $id, $username, $password, $created_at);
        $result = $this->users->save();
        echo $result;
    }

    public function delete() {        
        $id = $this->getParameter('id');
        $username = $this->getParameter('username');
        $password = $this->getParameter('password');
        $created_at = $this->getParameter('created_at');
        $this->users->populate( $id, $username, $password, $created_at);
        $result = $this->users->delete();
        echo $result;
    }

    public function file(){

    }
}

new CtrlUsers();
?>