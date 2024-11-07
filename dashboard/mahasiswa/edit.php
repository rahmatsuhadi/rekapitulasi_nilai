




<?php include_once "../../templates/header.php"; ?>
<?php 
    include_once "../../src/Model/UserModel.php";
    $model = new User();
    $id = $_GET['id'];
    $user = $model->getUserByid($id);

    
?>



            <div class="container mt-4 mb-5" style="width: 80%;">
                <a href="./" class="text-decoration-none text-black">Kembali</a>

               <div class="mt-4">
                <h4>Registrasi Mahasiswa</h4>
               <form action="?id=<?=$id?>&action=update" method="POST">
               <div class="row gx-5 pt-2">
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
                                <input type="text" value="<?=$user->full_name?>"  name="full_name" class="form-control" id="Nama_Mahasiswa"
                                    placeholder="Nama Mahasiswa">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIM</label>
                                <input type="text" value="<?=$user->identity?>"  class="form-control" name="nim" id="nim" placeholder="NIM">
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email"  name="email"  value="<?=$user->email?>"class="form-control" id="email_mahasiswa"
                                    placeholder="Email Mahasiswa">
                            </div>
                        </div>
                        <!-- <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="password_mahasiswa" class="form-label">Password</label>
                                <input type="password"  class="form-control" name="password" id="password_mahasiswa" placeholder="Password">
                            </div>
                        </div> -->

                        
                        

                        <div class="col-12">
                            <button type="submit" class="btn text-white  bg-pink w-100">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>

                <!--  -->
            </div>

            <!-- table -->

            <?php include_once "../../templates/footer.php"; ?>
