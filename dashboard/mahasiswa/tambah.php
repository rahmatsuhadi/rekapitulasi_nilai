




<?php include_once "../../templates/header.php"; ?>

<?php include_once "../../src/Model/MahasiswaModel.php"; ?>

<?php 

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action']=="add") {
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
            if ($mahasiswa->save()) {

                $_SESSION['notification'] = [
                    'type' => 'success',
                    'message' => 'Mahasiswa berhasil Ditambah!'
                ];
                
                header('location: ' . "./index.php");
                exit();
            } else {

                $_SESSION['notification'] = [
                    'type' => 'error',
                    'message' => 'Terjadi kesalahan saat menambahkan mahasiswa.'
                ];
                header('location: ' . "./tambah.php?pesan=gagal");
                exit();

            }
        }
        
    }

?>



            <div class="container mt-4 mb-5" style="width: 80%;">
                <a href="./" class="text-decoration-none text-black">Kembali</a>

               <div class="mt-4">
                <h4>Registrasi Mahasiswa</h4>
               <form action="./action-create.php" method="POST">
               <div class="row gx-5 pt-2">
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
                                <input type="text"  name="full_name" class="form-control" id="Nama_Mahasiswa"
                                    placeholder="Nama Mahasiswa">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIM</label>
                                <input type="text"  class="form-control" name="nim" id="nim" placeholder="NIM">
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email"  name="email" class="form-control" id="email_mahasiswa"
                                    placeholder="Email Mahasiswa">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="password_mahasiswa" class="form-label">Password</label>
                                <input type="password"  class="form-control" name="password" id="password_mahasiswa" placeholder="Password">
                            </div>
                        </div>

                        
                        

                        <div class="col-12">
                            <button type="submit" class="btn text-white  bg-pink w-100">
                                Tambahkan
                            </button>
                        </div>
                    </div>
                </form>
            </div>

                <!--  -->
            </div>

            <!-- table -->

            <?php include_once "../../templates/footer.php"; ?>
