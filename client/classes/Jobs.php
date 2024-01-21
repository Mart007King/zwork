<?php
error_reporting(E_ALL);
require_once("Db.php");

    class Jobs extends Db
    {
        private $dbconn;

        public function __construct()
        {
            $this->dbconn = $this->connect();
        }

        public function insert_job($jname,$jdesc,$complex,$type,$category,$dura,$payment,$client_id)
        {
            
            $sql = "INSERT INTO jobs(job_name,job_description,job_complexity,job_type,category_id,expected_duration,payment_amount,client_id) VALUES(?,?,?,?,?,?,?,?)";
            $stmt = $this->dbconn->prepare($sql);
            $result = $stmt->execute([$jname,$jdesc,$complex,$type,$category,$dura,$payment,$client_id]);
                       
            if ($result) {
                $id = $this->dbconn->lastInsertId();
                return $id;
            }
            
        }

        public function fetch_job($client_id)
        {
            $sql = "SELECT * FROM jobs WHERE client_id = ?";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute([$client_id]);
            $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $record;
        }

        public function update_status($stat,$jid)
        {            
            $sql = "UPDATE jobs SET status=? WHERE jobs_id =?";
            $stmt = $this->dbconn->prepare($sql);
            $result = $stmt->execute([$stat,$jid]);
            return $result;
        }

        public function fetch_proposal($jid)
        {
            $sql = "SELECT * FROM proposal WHERE jobs_id = ?";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute([$jid]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }


?>