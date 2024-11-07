<?php


class Grade {

    public int $id;
    public string $name;
    public string $code_name;
    public string $day;
    public string $time;
    public int $is_online;

    public function __construct() {
        global $sambung;
        $this->connect = $sambung;
    }

    public function save() {

        $sql = "INSERT INTO grade (name, code_name, dosen_id , day, time, is_online) VALUES ('$this->name','$this->dosen_id','$this->code_name', '$this->day', '$this->time', $this->is_online)";
        $query = $this->connect->query($sql);

        if($query){
            return $query;
        }

        return false;
    }

    public function delete($id) {

        $sql = "DELETE FROM grade WHERE `grade`.`id` = $id";

        $query = $this->connect->query($sql);

        if($query){
            return $query;
        }

        return false;
    }

   
    public function getGradeById($id) {

        // $id = $this->connect->real_escape_string($id);

        $sql = "SELECT * FROM grade WHERE id = '$id'";
        $result = $this->connect->query($sql);

        if ($result->num_rows > 0) {
            $grade = $result->fetch_assoc();
            $this->id =$grade['id'];
            $this->name = $grade['name'];
            $this->code_name= $grade['code_name'];
            
            return $this;

            // return $result->fetch_assoc();
        }
        return null;
    }

    // Fungsi untuk mendapatkan daftar mahasiswa
    public function getAllGrade() {
        global $sambung;

        $sql = "SELECT user.*, grade.*, user.full_name AS dosen FROM grade INNER JOIN user ON user.id = grade.dosen_id";

        $result = $sambung->query($sql);

        $gradeList = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $gradeList[] = $row;
            }
        }

        return $gradeList;
    }
}
?>
