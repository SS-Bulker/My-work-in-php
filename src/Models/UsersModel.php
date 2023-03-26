<?php

namespace src\Models;

use src\Models\Model;

class UsersModel extends Model {

    public function __construct(){
        parent::__construct();
    }

    public function consultarUsuarios(){
        try{
            return $this->capsule::table('users')->get();

        }catch(Exception $e){
            $this->logger->error('Error ' . json_encode($e->getMessage()) , array('exception' => $e));
        }
    }
}