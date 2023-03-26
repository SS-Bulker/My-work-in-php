<?php

namespace src\Models;

use Dotenv;
use Illuminate\Database\Capsule\Manager as Capsule;
use Psr\Log\LoggerInterface;

class Model {

    protected $capsule;
    protected $logger;

    protected function __construct(LoggerInterface $logger = null){
        $this->logger = $logger;
        $this->connect();
    }

    protected function connect(){
        try{
            $dotenv = Dotenv\Dotenv::createImmutable(DIR);
            $dotenv->load();
    
            $this->capsule = new Capsule;
    
            $this->capsule->addConnection([
                'driver' => $_ENV['DB_CONNECTION'],
                'host' => $_ENV['DB_HOST'],
                'database' => $_ENV['DB_DATABASE'],
                'username' => $_ENV['DB_USERNAME'],
                'password' => $_ENV['DB_PASSWORD'],
                'charset' => $_ENV['DB_CHARSET'],
                'collation' =>$_ENV['DB_COLLATION'],
                'prefix' => '',
            ]); 

            $this->capsule->setAsGlobal();

            $this->capsule->bootEloquent();

        }catch(Exception $e){
            $this->logger->error('Error ' . json_encode($e->getMessage()) , array('exception' => $e));
        }
    }
}