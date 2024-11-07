<?php

include_once './config/config.php';
include_once './src/Model/UserModel.php';

function login($username, $password) {
    $authModel = new UserModel();
    $user = $authModel->verifyLogin($username, $password);

    if ($user) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['identity'] = $user['identity'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['full_name'] = $user['full_name'];

        header("Location: ../dashboard");
        exit();
    } else {
    
        session_start();
        $_SESSION['error_message'] = 'Identity atau password salah/tidak ditemukan';
        header("Location: ../index.php");
        exit();
    }
}

function logout() {
    session_start();
    session_destroy();
    header("Location: ../index.php");
    exit();
}
?>
