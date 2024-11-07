

<?php
include_once __DIR__. "/UserModel.php";

class Dosen extends User {
    

    public function getAllDosen() {

        $sql = "SELECT * FROM user where role='dosen'";
        $result = $this->connect->query($sql);

        $dosenList = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $dosenList[] = $row;
            }
        }

        return $dosenList;
    }

    public function getByIdGrade($id) {

        $sql = "SELECT * FROM user where role='student' INNER JOIN grade ON grade.id where grade.id=$id";
        $result = $this->connect->query($sql);

        $dosenList = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $dosenList[] = $row;
            }
        }

        return $dosenList;
    }
}
?>
