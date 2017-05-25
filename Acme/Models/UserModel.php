<?php

namespace Acme\Models;

use Asw\AswModel;
class UserModel extends AswModel {

    protected $table = 'users';
    private $id;
    private $name;
    private $email;

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }

}