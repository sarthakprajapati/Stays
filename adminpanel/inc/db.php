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
        public function addHotel($name/*, $username, $email, $password*/,$city, $image, $detail, $address){
            $this->query('INSERT INTO entity(type) VALUES("hotel")');
            $id = $this->latestId();
            $res = $this->query('INSERT INTO value_table(entity_id, attr_val, value) VALUES('.$id.', '.$this->getAttribId('name').',"'.$name.'"),('.$id.', '.$this->getAttribId('images').',"'.$image.'"),('.$id.', '.$this->getAttribId('address').',"'.$address.'"),('.$id.', '.$this->getAttribId('detail').',"'.$detail.'"),('.$id.', '.$this->getAttribId('city').',"'.$city.'")');
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

        public function getIdEntity($email){
            $res = $this->query('SELECT entity_id FROM value_table WHERE value="'.$email.'"');
            $res = mysqli_fetch_assoc($res);
            return $res['entity_id'];
        }


        public function delHotel($delid){
            $query = "DELETE FROM `entity` WHERE `entity`.`id` = $delid";
            $this->query($query);
            $query = "DELETE FROM `value_table` WHERE `value_table`.`entity_id` = $delid";
            $this->query($query);
            return true;
        }

        public function getHotelById($id){
           $res = $this->query('SELECT * FROM value_table WHERE entity_id='.$id);
           while($val = mysqli_fetch_assoc($res)){
               $attrib = $this->getAttrib($val['attr_val']);
               $row[$attrib] = $val['value'];
           }
           return $row;
       }

        public function getAllHotel(){
            $query = 'SELECT *,entity.id as e_id, value_table.id as v_id FROM value_table INNER JOIN entity ON entity.id = value_table.entity_id WHERE entity.type = "hotel"';
            $res = $this->query($query);
            $result = array();
            while($val = mysqli_fetch_assoc($res)){
                $attrib = $this->getAttrib($val['attr_val']);
                if($attrib == 'name'){
                    $row['name'] = $val['value'];
                }else if($attrib == 'city'){
                    $row['city'] = $val['value'];
                }else if($attrib == 'address'){
                    $row['address'] = $val['value'];
                }
                else if($attrib == 'detail'){
                    $row['detail'] = $val['value'];
                }
                else if($attrib == 'images'){
                    $row['images'] = $val['value'];
                }
                $row['id'] = $val['e_id'];
                if(isset($row['name']) && isset($row['city']) && isset($row['address']) && isset($row['detail']) && isset($row['images']) && isset($row['id'])){
                    array_push($result, $row);
                    unset($row);
                }
            }
            return $result;
        }



    }

    $db = new Database;
