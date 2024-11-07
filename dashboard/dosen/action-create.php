
<?php include_once "../../src/Model/MahasiswaModel.php"; ?>
<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomor = $_POST['nomor_dosen'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $full_name = $_POST['full_name'];


    $mahasiswa = new Mahasiswa();

    $mahasiswa->full_name = $full_name;
    $mahasiswa->email = $email;
    $mahasiswa->role = "dosen";
    $mahasiswa->password = password_hash($password, PASSWORD_DEFAULT);
    $mahasiswa->identity = $nomor;


    if($mahasiswa){
        session_start();
        if ($mahasiswa->save()) {

            $_SESSION['notification'] = [
                'type' => 'success',
                'message' => 'Dosen berhasil Ditambah!'
            ];
            
            header('location: ' . "./tambah.php?pesan=success");
        } else {

            $_SESSION['notification'] = [
                'type' => 'error',
                'message' => 'Terjadi kesalahan saat menambahkan Dosen.'
            ];
            header('location: ' . "./tambah.php?pesan=gagal");
        }
    }
    
}