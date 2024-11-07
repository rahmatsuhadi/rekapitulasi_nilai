
<?php include_once "../../src/Model/CourseModel.php"; ?>
<?php


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['course_id'];
    $grade_id = $_GET['grade_id'];


    $course = new Course();

        session_start();
        if ($course->delete($id)) {

            $_SESSION['notification'] = [
                'type' => 'success',
                'message' => 'Course berhasil Hapus!'
            ];
            
            header('location: ' . './index.php?id='.$grade_id.'&pesan=success');
        } else {

            $_SESSION['notification'] = [
                'type' => 'error',
                'message' => 'Terjadi kesalahan saat Hapus Course Mahasiswa.'
            ];
            header('location: ' . './index.php?id='.$grade_id.'&pesan=gagal');
        }
    
}