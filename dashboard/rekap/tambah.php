
<?php include_once "../../src/Model/CourseModel.php"; ?>
<?php


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $grade_id = $_GET['grade_id'];
    $student_id = $_GET['student_id'];


    $course = new Course();

    $course->grade_id = $grade_id;
    $course->student_id = $student_id;

    if($course){
        session_start();
        if ($course->save()) {

            $_SESSION['notification'] = [
                'type' => 'success',
                'message' => 'Course berhasil Ditambah!'
            ];
            
            header('location: ' . './index.php?id='.$grade_id.'&pesan=success');
        } else {

            $_SESSION['notification'] = [
                'type' => 'error',
                'message' => 'Terjadi kesalahan saat menambahkan Mahasiswa.'
            ];
            header('location: ' . './index.php?id='.$grade_id.'&pesan=gagal');
        }
    }
    
}