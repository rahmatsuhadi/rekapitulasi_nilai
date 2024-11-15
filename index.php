
<?php

include_once './config/config.php';
include_once './src/Controller/AuthController.php';

session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: dashboard");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $identity = $_POST['identity'];
    $password = $_POST['password'];

    login($identity, $password);
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./assets/css/styles.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col d-flex flex-column align-items-center justify-content-lg-center justify-content-md-center h-100">
                <!-- header -->
                <div class="d-flex d-md-none mb-5 gap-2 bg-white align-items-center bg-opacity-75 mt-2 shadow-sm px-2 py-1">
                    <div class="">
                        <img src="./assets/logo.png" width="100" height="100" />
                    </div>
                    <div class="">
                        <h4 class="fw-bold fs-5">UNIVERSITAS AMIKOM YOGYAKARTA</h4>
                        <p style="font-size: 15px;">Jl.Padjajaran, Ring Road Utara, Kel. Condongcatur, Kec.Depok,
                            Kab.Sleman,
                            Prop.Daerah Istimewa Yogyakarta</p>
                        <p style="font-size: 15px;">Telp: +62 274884 201, Website: www.amikom.ac.id, Email:
                            amikom@amikom.ac.id
                        </p>
                        <hr />
                    </div>
                </div>
                <!-- header -->
                <div class="p-1 w-lg-50" >
                    <h4 class="text-center mb-4">Masuk Dashboard</h4>

                    <p class="text-center mb-4 m-auto fs-6" style="max-width: 70%;" >Masukan indentitas anda untuk mengakses dashboard</p>
                    <?php
                        // Menampilkan pesan error jika ada
                        if (isset($_SESSION['error_message'])) {
                            echo "<p style='color:red;'>{$_SESSION['error_message']}</p>";
                            unset($_SESSION['error_message']);
                        }
                        ?>

                    <form  method="POST">
                        <div class="mb-3 mt-3">
                            <!-- <label for="email" class="form-label">Nomor:</label> -->
                            <input name="identity" type="text" class="form-control border-input-pink  form-control-md mb-4" id="email" placeholder="Nomor Identity" name="email">
                        </div>
                        <div class="mb-3">
                            <!-- <label for="pwd" class="form-label">Password:</label> -->
                            <input name="password" type="password" class="form-control border-input-pink form-control-md mb-4" id="pwd" placeholder="Password"
                                name="pswd">
                        </div>
                        <!-- <div class="form-check mb-3">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                            </label>
                        </div> -->
                        <div >
                            <button type="submit" class="btn btn-login  w-100">Login Page</button>
                        </div>
                    </form>
                    <div class="mt-3">                    
                        <a href="./register.html" class=" text-black fs-6">Daftar Dulu?</a>
                    </div>

                </div>
            </div>
            <div class="col background-login d-none d-md-block">
                <div class="d-flex gap-2 bg-white align-items-center bg-opacity-75 mt-2 shadow-sm px-2 py-1">
                    <div class="">
                        <img src="./assets/logo.png" width="100" height="100" />
                    </div>
                    <div class="">
                        <h4 class="fw-bold fs-5">UNIVERSITAS AMIKOM YOGYAKARTA</h4>
                        <p style="font-size: 15px;">Jl.Padjajaran, Ring Road Utara, Kel. Condongcatur, Kec.Depok,
                            Kab.Sleman,
                            Prop.Daerah Istimewa Yogyakarta</p>
                        <p style="font-size: 15px;">Telp: +62 274884 201, Website: www.amikom.ac.id, Email:
                            amikom@amikom.ac.id
                        </p>
                        <hr />
                    </div>
                </div>
            </div>
        </div>

       

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</html>