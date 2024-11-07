




<?php include_once "../../templates/header.php"; ?>




            <div class="container mt-4 mb-5" style="width: 80%;">
                <a href="./" class="text-decoration-none text-black">Kembali</a>

               <div class="mt-4">
                <h4>Registrasi Dosen</h4>
               <form action="./action-create.php" method="POST">
               <div class="row gx-5 pt-2">
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text"  name="full_name" class="form-control" id="nama"
                                    placeholder="Nama">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="nomor_dosen" class="form-label">Nomor Dosen</label>
                                <input type="text"  class="form-control" name="nomor_dosen" id="nomor_dosen" placeholder="Nomor Dosen">
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email"  name="email" class="form-control" id="email"
                                    placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password"  class="form-control" name="password" id="password" placeholder="Password">
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
