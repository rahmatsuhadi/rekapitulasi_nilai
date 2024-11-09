
<?php include_once "../src/Model/GradeModel.php"; ?>
<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $code_name = $_POST['kode_kelas'];
    $dosen_id = $_POST['dosen'];
    $day = $_POST['day'];
    $time = $_POST['time'];
    $is_online = @$_POST['is_online'] || "0";


    $grade = new Grade();

    $grade->name = $name;
    $grade->code_name = $code_name;
    $grade->dosen_id = $dosen_id;
    $grade->day = $day;
    $grade->time = $time;
    $grade->is_online = $is_online;


    if($grade){
        session_start();
        if ($grade->save()) {

            $_SESSION['notification'] = [
                'type' => 'success',
                'message' => 'Kelas berhasil Ditambah!'
            ];
            
            header('location: ' . "./tambah-kelas.php?pesan=success");
        } else {

            $_SESSION['notification'] = [
                'type' => 'error',
                'message' => 'Terjadi kesalahan saat menambahkan Kelas.'
            ];
            header('location: ' . "./tambah-kelas.php?pesan=gagal");
        }
    }
    
}