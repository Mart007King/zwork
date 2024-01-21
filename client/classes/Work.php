<?php

error_reporting(E_ALL);
require_once("Db.php");

    class Work extends Db
    {
        private $dbconn;

        public function __construct()
        {
            $this->dbconn = $this->connect();
        }

        public function add_cate($catname)
        {
            $sql = "INSERT INTO category(category_name) VALUES(?)";
            $stmt = $this->dbconn->prepare($sql);
            $record = $stmt->execute([$catname]);
            $catid = $this->dbconn->lastInsertId();
            return $catid;
        }

        public function insert_pic($filename,$id)
        {
            $sql = "UPDATE user_account SET profille_pic=? WHERE user_id=?";
            $stmt = $this->dbconn->prepare($sql);
           $record = $stmt->execute([$filename,$id]);
           return $record;
        }

        public function fetch_picture($id)
        {
            $sql = "SELECT profille_pic FROM user_account WHERE user_id=?";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute([$id]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

        public function get_cate()
        {
            $sql = "SELECT * FROM category";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute([]);
            $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $record;
        }

        public function get_cat_name($catid)
        {
            $sql = "SELECT category_name FROM category WHERE category_id = ?";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute([$catid]);
            $record = $stmt->fetch(PDO::FETCH_ASSOC);
            return $record;
        }

        public function get_skill_name($skill_id)
        {
            $sql = "SELECT skill_name FROM skill WHERE skill_id = ?";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute([$skill_id]);
            $record = $stmt->fetch(PDO::FETCH_ASSOC);
            return $record;
        }

        public function get_skilbyid($idd)
        {
            $sql = "SELECT * FROM skill WHERE category_id=?";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute([$idd]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function insert_skill($skillname,$catid)
        {
            $sql = "INSERT INTO skill(skill_name,category_id) VALUES(?,?)";
            $stmt = $this->dbconn->prepare($sql);
            $record = $stmt->execute([$skillname,$catid]);
            $skill_id = $this->dbconn->lastInsertId();
            return $skill_id;
        }

        public function save($id)
        {
            $take = $id;
            $_SESSION['selected'] = $take;
            return $_SESSION['selected'];
        }

        
    }
    $wk = new Work();
   

?>