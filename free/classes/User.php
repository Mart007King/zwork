<?php
error_reporting(E_ALL);
require_once("Db.php");

    class User extends Db
    {
        private $dbconn;

        public function __construct()
        {
            $this->dbconn = $this->connect();
        }

        public function get_userbyid($id)
        {
            $sql = "SELECT * FROM user_account WHERE user_id = ?";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute([$id]);
            $record = $stmt->fetch(PDO::FETCH_ASSOC);
            return $record;
        }

        public function insert_gender($gender,$id)
        {
            $sql = "UPDATE user_account SET gender =? WHERE user_id=?";
            $stmt = $this->dbconn->prepare($sql);
            $record = $stmt->execute([$gender,$id]);
            return $record;
        }

        public function insert_number($number,$id)
        {
            $sql = "UPDATE user_account SET user_phone =? WHERE user_id=?";
            $stmt = $this->dbconn->prepare($sql);
            $record = $stmt->execute([$gender,$id]);
            return $record;
        }
    }

    $user = new User();

?>