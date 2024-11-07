
<?php include_once "../../src/Model/CourseModel.php"; ?>
<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_GET['id'];
    $grade_id = $_GET['grade_id'];

    $course = new Course();

    $course->id = $id;
    $course->uts = $_POST['uts'];
    $course->uas = $_POST['uas'];
    $course->tugas = $_POST['tugas'];
    $course->responsi = $_POST['responsi'];
    $course->presensi = $_POST['presensi'];



    session_start();
    if ($course->update()) {
        // return;
        
            $_SESSION['notification'] = [
                'type' => 'success',
                'message' => 'Course berhasil Diupdate!'
            ];
            
            header('location: ' . './edit.php?course_id='.$id.'&grade_id='.$grade_id.'&pesan=success');
        } else {
            return;

            $_SESSION['notification'] = [
                'type' => 'error',
                'message' => 'Terjadi kesalahan saat Update Course Mahasiswa.'
            ];
            header('location: ' . './edit.php?course_id='.$id.'&grade_id='.$grade_id.'&pesan=gagal');
        }
    
}