<?php
    class Database {
        private $host = 'localhost';
        private $user = 'root';
        private $password = '';
        private $dbname = 'eavstays';

        private $dbh;

        public function __construct(){
            $this->dbh = mysqli_connect($this->host, $this->user, $this->password, $this->dbname);
            if(mysqli_connect_errno()){
                die('Could not connect to the database!');
            }
        }

        public function query($sql){
            $res = mysqli_query($this->dbh, $sql);
            if($res){
                return $res;
            }else{
                return false;
            }
        }

        public function exists($username, $email){
            $res = $this->query('SELECT * FROM value_table WHERE value="'.$username.'" OR value="'.$email.'"');
            if(mysqli_num_rows($res) > 0){
                return true;
            }else{
                return false;
            }
        }

        public function latestId(){
            $res = $this->query('SELECT MAX(id) FROM entity');
            if($res !== null){
                $res = mysqli_fetch_assoc($res);
                return $res['MAX(id)'];
            }
        }
        public function getAttribId($val){
            $res = $this->query('SELECT * FROM attribute WHERE attribute="'.$val.'"');
            $res = mysqli_fetch_assoc($res);
            return $res['id'];
        }

        public function addUser($name, $username, $email, $password){
            $this->query('INSERT INTO entity(type) VALUES("user")');
            $id = $this->latestId();
            $res = $this->query('INSERT INTO value_table(entity_id, attr_val, value) VALUES('.$id.', '.$this->getAttribId('name').',"'.$name.'"),('.$id.', '.$this->getAttribId('email').',"'.$email.'"),('.$id.', '.$this->getAttribId('username').',"'.$username.'"),('.$id.', '.$this->getAttribId('password').',"'.$password.'")');
            if($res){
                return true;
            }else{
                return false;
            }
        }
        public function addHotel($name, $username, $email, $password){
            $this->query('INSERT INTO entity(type) VALUES("hotel")');
            $id = $this->latestId();
            $res = $this->query('INSERT INTO value_table(entity_id, attr_val, value) VALUES('.$id.', '.$this->getAttribId('name').',"'.$name.'"),('.$id.', '.$this->getAttribId('email').',"'.$email.'"),('.$id.', '.$this->getAttribId('username').',"'.$username.'"),('.$id.', '.$this->getAttribId('password').',"'.$password.'")');
            if($res){
                return true;
            }else{
                return false;
            }
        }
    }

    $db = new Database;
