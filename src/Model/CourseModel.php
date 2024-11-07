<?php

include_once __DIR__. "../../../config/config.php";

class Course {
    public $id;
    public $student_id;
    public $grade_id;
    public $responsi;
    public $presensi;
    public $uts;
    public $uas;
    public $tugas;

    public function __construct() {
        global $sambung;
        $this->connect = $sambung;
    }

    public function save() {

        $sql = "INSERT INTO course (grade_id, student_id) VALUES ('$this->grade_id','$this->student_id')";
        $query = $this->connect->query($sql);


        if($query){
            return $query;
        }

        return false;
    }
    public function update() {
        $sql = "UPDATE course 
                SET responsi = '$this->responsi', uts = '$this->uts', uas = '$this->uas', tugas = '$this->tugas', presensi = '$this->presensi' 
                WHERE id = '$this->id'";
    // var_dump($sql);
    //     return;
    
    $query = $this->connect->query($sql);
        if ($query) {
            return true; // Jika berhasil
        }
    
        return false;
    }
    
    public function delete($id) {

        $sql = "DELETE FROM course WHERE `course`.`id` = $id";

        $query = $this->connect->query($sql);

        if($query){
            return $query;
        }

        return false;
    }
    // Fungsi untuk mendapatkan daftar mahasiswa
    public function getAllCourse() {
        global $sambung;

        $sql = "SELECT * FROM course ";
        $result = $sambung->query($sql);

        $courseList = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $courseList[] = $row;
            }
        }

        return $courseList;
    }

    public function getAllCourseByGradeId($grade_id) {
        global $sambung;

        $sql = "SELECT user.*, course.*, course.id AS id_course FROM course INNER JOIN user ON user.id = course.student_id where course.grade_id = $grade_id";
        $result = $sambung->query($sql);


        $courseList = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $courseList[] = $row;
            }
        }

        return $courseList;
    }

    public function getCourseByid($id) {


        $sql = "SELECT * FROM course INNER JOIN user ON user.id = course.student_id WHERE course.id = '$id' ";
        $result = $this->connect->query($sql);


        if ($result->num_rows > 0) {
            $course = $result->fetch_assoc();
            return $course;

        }
        return null;
    }
}
?>
