<?php
error_reporting(E_ALL);
require_once("Db.php");

    class Admin extends Db
    {
        private $dbconn;

        public function __construct()
        {
            $this->dbconn = $this->connect();
        }

        public function login_admin($email,$password)
        {
            $sql = "SELECT * FROM admin WHERE admin_email=?";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute([$email]);
            $record = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!$record) {
               $_SESSION['errormessage'] = "Login details incorrect";
               return false;
            } else {
                $record_pwd = $record["admin_password"];
                $checked = password_verify($password,$record_pwd);
                if ($checked) {
                    return $record["admin_id"]; 
                } else {
                    $_SESSION["errormessage"] = "Login details incorrect";
                    return false;
                }
            }
        }

        public function fetch_admin($id)
        {
            $sql = "SELECT * FROM admin WHERE admin_id = ?";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute([$id]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

        public function logout_admin()
        {
            session_unset();
            session_destroy();
        }

        public function fetch_user()
        {
            $sql = "SELECT user_id FROM user_account";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute();
            $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $user = count($record);
            return $user;
        }

        public function fetch_client()
        {
            $sql = "SELECT user_type FROM user_account WHERE user_type = 'client'";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute();
            $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $user = count($record);
            return $user;
        }

        public function fetch_freelancer()
        {
            $sql = "SELECT user_type FROM user_account WHERE user_type = 'freelancer'";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute();
            $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $user = count($record);
            return $user;
        }

        public function fetch_job()
        {
            $sql = "SELECT jobs_id FROM jobs";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute();
            $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $user = count($record);
            return $user;
        }

        public function fetch_active_job()
        {
            $sql = "SELECT status FROM jobs WHERE status = 'active'";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute();
            $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $user = count($record);
            return $user;
        }

        public function fetch_inactive_job()
        {
            $sql = "SELECT status FROM jobs WHERE status = 'inactive'";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute();
            $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $user = count($record);
            return $user;
        }
    }
//    $ad = new Admin();
//    $all = $ad->fetch_inactive_job();

//    echo "<pre>";
//    print_r($all);
//    echo "</pre>";


?>