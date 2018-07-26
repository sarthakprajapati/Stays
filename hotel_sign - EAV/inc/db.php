<?php
require "include/db.php";
    class Database {
        private $host = 'localhost';
        private $user = 'root';
        private $password = 'Krishanu#98';
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

        public function facilityExists($attr, $id){
            $res = $this->query('SELECT * FROM value_table WHERE attr_val="'.$attr.'" AND entity_id='.$id);
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

        public function addUser($name, $username, $email, $password, $image){
            $this->query('INSERT INTO entity(type) VALUES("user")');
            $id = $this->latestId();

            $res = $this->query('INSERT INTO value_table(entity_id, attr_val, value) VALUES('.$id.', '.$this->getAttribId('name').',"'.$name.'"),('.$id.', '.$this->getAttribId('email').',"'.$email.'"),('.$id.', '.$this->getAttribId('username').',"'.$username.'"),('.$id.', '.$this->getAttribId('password').',"'.$password.'"),('.$id.', '.$this->getAttribId('image').',"'.$image.'")');
            if($res){
                return true;
            }else{
                return false;
            }
        }
        public function addHotel($name, $username, $email, $password, $image){
            $this->query('INSERT INTO entity(type) VALUES("hotel")');
            $id = $this->latestId();

            $res = $this->query('INSERT INTO value_table(entity_id, attr_val, value) VALUES('.$id.', '.$this->getAttribId('name').',"'.$name.'"),('.$id.', '.$this->getAttribId('email').',"'.$email.'"),('.$id.', '.$this->getAttribId('username').',"'.$username.'"),('.$id.', '.$this->getAttribId('password').',"'.$password.'"),('.$id.', '.$this->getAttribId('image').',"'.$image.'")');
            if($res){
                return true;
            }else{
                return false;
            }
        }

        public function getAttrib($id){
            $res = $this->query('SELECT * FROM attribute WHERE id='.$id);
            $res = mysqli_fetch_assoc($res);
            return $res['attribute'];
        }

        public function getAttribType($id){
            $res = $this->query('SELECT * FROM attribute WHERE id='.$id);
            $res = mysqli_fetch_assoc($res);
            return $res['type'];
        }

        public function getIdEntity($email){
            $res = $this->query('SELECT entity_id FROM value_table WHERE value="'.$email.'"');
            $res = mysqli_fetch_assoc($res);
            return $res['entity_id'];
        }

        public function addValue($id, $attr, $value){
            $res = $this->query('INSERT INTO value_table(entity_id, attr_val, value) values("'.$id.'","'.$this->getAttribId($attr).'","'.$value.'")');
            if($res){
                return true;
            }else{
                return false;
            }
        }

        public function getAllHotel(){
            $query = 'SELECT *,entity.id as e_id, value_table.id as v_id FROM value_table INNER JOIN entity ON entity.id = value_table.entity_id WHERE entity.type = "hotel"';
            $res = $this->query($query);
            $result = array();
            while($val = mysqli_fetch_assoc($res)){
                $attrib = $this->getAttrib($val['attr_val']);
                if($attrib == 'name'){
                    $row['name'] = $val['value'];
                }else if($attrib == 'username'){
                    $row['username'] = $val['value'];
                }else if($attrib == 'email'){
                    $row['email'] = $val['value'];
                }
                if(isset($row['name']) && isset($row['username']) && isset($row['email'])){
                    array_push($result, $row);
                    unset($row);
                }
            }
            return $result;
        }

        public function getHotelById($id){
            $res = $this->query('SELECT * FROM value_table entity_id='.$id);
            while($val = mysqli_fetch_assoc($res)){
                $attrib = $this->getAttrib($val['attr_val']);
                $row[$attrib] = $val['value'];
            }
            return $row;
        }
    }

    $db = new Database;
