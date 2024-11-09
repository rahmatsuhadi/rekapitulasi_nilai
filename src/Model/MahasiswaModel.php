

<?php
// include_once __DIR__. "/UserModel.php";

include_once __DIR__. "../UserModel.php";

class Mahasiswa extends User {
    

    public function getAllMahasiswa() {

        $sql = "SELECT * FROM user where role='student'";
        $result = $this->connect->query($sql);

        $mahasiswaList = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $mahasiswaList[] = $row;
            }
        }

        return $mahasiswaList;
    }

    public function getAllMahasiswaByIdGrade($id) {

        $sql = "SELECT * FROM user where role='student' INNER JOIN grade ON grade.id where grade.id=$id";
        $result = $this->connect->query($sql);

        $mahasiswaList = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $mahasiswaList[] = $row;
            }
        }

        return $mahasiswaList;
    }
    public function searchByIdentityName($search, $id_grade) {

        $sql = "SELECT user.*, 
       course.id AS id_course, 
       course.grade_id AS course_grade_id 
        FROM user
        LEFT JOIN course ON course.student_id = user.id AND course.grade_id = $id_grade
        WHERE user.role = 'student'
        AND (user.full_name LIKE '%$search%' OR user.identity LIKE '%$search%')
        ";
        $result = $this->connect->query($sql);

        
        $mahasiswaList = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $mahasiswaList[] = $row;
            }
        }


        return $mahasiswaList;
    }
}
?>
