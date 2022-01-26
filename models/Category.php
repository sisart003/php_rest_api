<?php

    class Category{

        //DB Stuff
        private $conn;
        private $table = 'categories';

        //Properties
        public $id;
        public $name;
        public $created_id;

        //Constructor with DB
        public function __construct($db){
            $this->conn = $db;
        }

        //Get categories
        public function read(){
            //Create query
            $query ='SELECT id, name, created_at FROM ' . $this->table . ' ORDER BY created_at DESC';

            //Prepare statement
            $stmt = $this->conn->prepare($query);

            //Execute Query
            $stmt->execute();

            return $stmt;
        }

    }