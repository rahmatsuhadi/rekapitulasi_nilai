<?php
include_once "../src/Model/GradeModel.php";


$id = $_GET['id'];


if(isset($id)){

    $grade = new Grade();

    session_start();
        if($grade->delete($id)){
            $_SESSION['notification'] = [
                'type' => 'success',
                'message' => 'Kelas berhasil Dihapus!'
            ];
            header("location: ./index.php?pesan=success");
        }
        else{
            $_SESSION['notification'] = [
                'type' => 'error',
                'message' => 'Terjadi kesalahan saat menghapus Kelas.'
            ];
            header("location: ./index.php?pesan=gagal");
    
        }

}

