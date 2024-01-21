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

        public function get_cate()
        {
            $sql = "SELECT * FROM category";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute([]);
            $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
 
    }

    $wk = new Work();


?>