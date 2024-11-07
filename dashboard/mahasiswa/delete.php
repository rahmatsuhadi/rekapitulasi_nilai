<?php
include_once "../../src/Model/MahasiswaModel.php";


$id = $_GET['id'];


if(isset($id)){

    $mahasiswa = new Mahasiswa();

    session_start();
        if($mahasiswa->delete($id)){
            $_SESSION['notification'] = [
                'type' => 'success',
                'message' => 'Mahasiswa berhasil Dihapus!'
            ];
            header("location: ./index.php?pesan=success");
        }
        else{
            $_SESSION['notification'] = [
                'type' => 'error',
                'message' => 'Terjadi kesalahan saat menghapus mahasiswa.'
            ];
            header("location: ./index.php?pesan=gagal");
    
        }

}

