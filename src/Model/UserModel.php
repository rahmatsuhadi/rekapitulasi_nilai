<?php

// include_once __DIR__."../../config/config.php";
include_once __DIR__. "../../../config/config.php";

class User {
    public int $id;
    public string $identity;
    public string $full_name;
    public string $role;
    public string $email;
    public string $password;

    public function __construct() {
        global $sambung;
        $this->connect = $sambung;
    }

    public function save() {

        $sql = "INSERT INTO user (full_name, identity, password, email, role, status) VALUES ('$this->full_name','$this->identity','$this->password', '$this->email', '$this->role', 'active')";
        $query = $this->connect->query($sql);

        if($query){
            return $query;
        }

        return false;
    }

    public function delete($id) {

        $sql = "DELETE FROM user WHERE `user`.`id` = $id";

        $query = $this->connect->query($sql);

        if($query){
            return $query;
        }

        return false;
    }

    public function verifyLogin($identity, $password) {
        global $sambung;

        $query = "SELECT * FROM user WHERE identity = '$identity'";
        $result = mysqli_query($sambung, $query);

        // Jika user ditemukan
        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
        
            if (password_verify($password, $user['password'])) {
                return $user;
            }
        }

        return false;
    }

    public function getUserById($userId) {

        // $userId = $this->connect->real_escape_string($userId);

        $sql = "SELECT * FROM user WHERE id = '$userId'";
        $result = $this->connect->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $this->id = $user['id'];
            $this->full_name = $user['full_name'];
            $this->identity = $user['identity'];
            $this->email = $user['email'];
            $this->password = $user['password'];
            return $this;

        }
        return null;
    }

}
?>
