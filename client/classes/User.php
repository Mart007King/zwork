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
            $recordd = $stmt->execute([$number,$id]);
            return $recordd;
        }

        public function logout_user()
        {
            session_unset();
            session_destroy();
        }

        public function login_user($email,$password)
        {
            $sql = "SELECT * FROM user_account WHERE user_email=?";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute([$email]);
            $record = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!$record) {
               $_SESSION['errormessage'] = "Login details incorrect";
               return false;
            } else {
                $record_pwd = $record["user_password"];
                $checked = password_verify($password,$record_pwd);
                if ($checked) {
                    return $record["user_id"]; 
                } else {
                    $_SESSION["errormessage"] = "Login details incorrect";
                    return false;
                }
            }
        }
    }

    $user = new User();

?>