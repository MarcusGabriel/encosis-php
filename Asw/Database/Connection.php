<?php

namespace Asw\Database;
use PDO;
    class Connection{
        static $pdo;
        public function __construct (){
            self::$pdo = new PDO('mysql:host=localhost;dbname=crud','root','');
            // self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }

        public static function getConnection(){
            if(!self::$pdo){
                new Connection();
            }

            return self::$pdo;
        }
        
    }