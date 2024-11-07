
<?php include_once "../../src/Model/MahasiswaModel.php"; ?>
<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim = $_POST['nim'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $full_name = $_POST['full_name'];


    $mahasiswa = new Mahasiswa();

    $mahasiswa->full_name = $full_name;
    $mahasiswa->email = $email;
    $mahasiswa->role = "student";
    $mahasiswa->password = password_hash($password, PASSWORD_DEFAULT);
    $mahasiswa->identity = $nim;


    if($mahasiswa){
        session_start();
        if ($mahasiswa->save()) {

            $_SESSION['notification'] = [
                'type' => 'success',
                'message' => 'Mahasiswa berhasil Ditambah!'
            ];
            
            header('location: ' . "./tambah.php?pesan=success");
        } else {

            $_SESSION['notification'] = [
                'type' => 'error',
                'message' => 'Terjadi kesalahan saat menambahkan mahasiswa.'
            ];
            header('location: ' . "./tambah.php?pesan=gagal");
        }
    }
    
}