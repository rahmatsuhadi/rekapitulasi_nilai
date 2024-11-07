<?php include_once "../templates/header.php"; ?>

            <div class="container-lg ps-5 px-lg-3 mt-4 w-100">
                
                <h4 class="fw-bold mb-3">Profile </h4>

                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <div class="d-flex flex-column mb-3">
                                <label for="formFile" class="form-label fw-bold">Foto Profile</label>
                                <img src="../assets/images/placeholder-dosen.png" width="200" height="200" />
                                
                            </div>
                            <span class="fw-bold">Ganti Profile</span>
                            <input class="form-control w-75 form-control-sm mt-2" type="file" id="formFile">
                        </div>
                    </div>

                    <div class="col">
                        <form>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Nama </label>
                                <p><?=$_SESSION['full_name']?></p>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Email address</label>
                                <p>rahmatsuhadi@dosen.univ.co.id</p>
                            </div>

                            <!-- Button trigger modal -->
                            <button type="button" class="bg-pink btn btn-sm text-white" data-bs-toggle="modal"
                                data-bs-target="#changePassword">
                                Ganti Paswword Account
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="changePassword" tabindex="-1"
                                aria-labelledby="changePasswordLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="changePasswordLabel">Ganti Password</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="passwordNew" class="form-label">Password Baru</label>
                                                    <input type="email" class="form-control" id="passwordNew"
                                                        aria-describedby="passwordNewHelp">

                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Password Baru
                                                        Lagi</label>
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword1">
                                                    <div id="passwordNewHelp" class="form-text">Pastikan kedua password
                                                        sama .
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <button type="button" class="btn bg-pink text-white">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>


            </div>

            <?php include_once "../templates/footer.php"; ?>