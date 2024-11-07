<?php
// Model untuk login user

class UserModel {

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
        global $conn;

        $userId = $conn->real_escape_string($userId);

        $sql = "SELECT * FROM users WHERE id = '$userId'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        }
        return null;
    }

}

?>
