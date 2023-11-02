<?php 
    class crud{
        private $db;
        function __construct($conn){
            $this->db = $conn;
        }

        public function insert($fn, $ln, $dob, $email, $contact, $role){
            try {
                $sql = "INSERT INTO attendee(firstname,lastname,dob,email,contact,role_id) VALUES (:fn,:ln,:dob,:email,:contact,:role)";
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':fn',$fn);
                $stmt->bindparam(':ln',$ln);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':role',$role);

                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }

        }
    }
?>