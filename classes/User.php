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

        public function create_account($user_password,$confirmpwd,$user_email,$user_fname,$user_lname,$user_type,$state_id,$country_id)
        {
            if ($user_password == $confirmpwd) {
                try {
                    $hashed_pwd = password_hash($user_password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO user_account(user_password,user_email,user_fname,user_lname,user_type,state_id,country_id) VALUES(?,?,?,?,?,?,?)";
                    $stmt = $this->dbconn->prepare($sql);
                    $result = $stmt->execute([$hashed_pwd,$user_email,$user_fname,$user_lname,$user_type,$state_id,$country_id]);
                    $_SESSION['acctfeedback'] = "Account created successfully";
                    $userid = $this->dbconn->lastInsertId();
                    return $userid;
                    
                } catch (PDOException $e) {
                    $_SESSION['errormessage'] = "An error occured :".$e->getMessage();
                    return 0;
                } catch (Exception $e){
                    $_SESSION['errormessage'] = "An error occured :".$e->getMessage();
                    return 0;
                }
            } else {
                $_SESSION['errormessage'] = "Password and confirm password must be the same";
            }
            
            
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
                    return $record; 
                } else {
                    $_SESSION["errormessage"] = "Login details incorrect";
                    return false;
                }
            }
        }

        public function fetch_states()
        {
            $query = "SELECT * FROM state";
            $stmt = $this->dbconn->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function fetch_country()
        {
            $sql = "SELECT * FROM country";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function confirm_email($email)
        {
            $sql = "SELECT * FROM user_account WHERE user_email = ?";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute([$email]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

        public function get_userbyid($id)
        {
            $sql = "SELECT * FROM user_account WHERE user_id = ?";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute([$id]);
            $record = $stmt->fetch(PDO::FETCH_ASSOC);
            return $record;
        }
    }

    $user = new User();

?>