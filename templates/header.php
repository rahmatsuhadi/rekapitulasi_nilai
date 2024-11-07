<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    header('Location: '.__DIR__.'/../config/config.php');
    exit();
}

include_once __DIR__.'/../config/config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            
        /* notif */


        .notification {
            width: 400px;
            position: relative;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .notification.success {
            background-color: #4CAF50;
            color: white;
        }
        .notification.error {
            background-color: #f44336;
            color: white;
        }
        .notification .close {
            background: none;
            border: none;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }
        </style>
</head>

<body>
    <div class="m-0 d-flex position-relative">
   
     <?php include_once __DIR__ . "/../templates/sidebar.php"; ?>

        <main class="flex-grow-1 px-md-0 ps-5" style="height: 100vh;overflow-y: auto;">

        <div class="d-flex py-2 px-3 sticky-lg-top bg-white shadow">

        <?php if (isset($_SESSION['notification'])) {
                            $notification = $_SESSION['notification'];
                            $type = $notification['type'];
                            $message = $notification['message'];
            
                            echo "
                            <div class='z-3 position-absolute right-0 notification $type'>
                                <span>$message</span>
                                <button class='close' onclick='this.parentElement.style.display=\"none\";'>&times;</button>
                            </div>
                            ";
            
                            // Hapus notifikasi setelah ditampilkan
                            unset($_SESSION['notification']);
                        }
                        ?>
        
                <h3 class="fw-bold ms-4 ms-md-0">Dashboard</h3>
              

                <div class="ms-auto d-flex align-items-center">

                    <div class="dropdown ">
                        <button type="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropdownMenuButton1"
                            type="button" class="btn   fs-6 rounded-circle"
                            style="background-color: rgb(237, 237, 237);">
                            <i class="fa-regular fa-user"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="/dashboard/bantuan.html">Bantuan</a></li>
                            <li><a class="dropdown-item" href="/dashboard/logout.php">Logout</a></li>
                        </ul>
                    </div>
                    <button type="button" class="btn text-danger fs-6">
                        <i class="fa-regular fa-bell"></i>
                    </button>
                </div>
            </div>