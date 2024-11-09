




<?php include_once "../templates/header.php"; ?>

<?php include_once "../src/Model/DosenModel.php"; ?>

<?php

$model = new Dosen();
$dosen_list = $model->getAllDosen();

?>


            <div class="container mt-4 mb-5" style="width: 80%;">
                <a href="./" class="text-decoration-none text-black">Kembali</a>

               <div class="mt-4">
                <h4>Registrasi Kelas</h4>
               <form action="./action-tambah.php" method="POST">
               <div class="row gx-5 pt-2">
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="nama_kelas" class="form-label">Kelas</label>
                                <input type="text"  name="name" class="form-control" id="nama_kelas"
                                    placeholder="Nama">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="kode_kelas" class="form-label">KODE Kelas</label>
                                <input type="text"  class="form-control" name="kode_kelas" id="kode_kelas" placeholder="PWPB-D3TI01">
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="dosen" class="form-label">Dosen</label>

                                <select  name="dosen" class="form-select" id="dosen"
                                >
                                <option disabled selected>Pilih Dosen</option>
                                    <?php foreach ($dosen_list as $item):
                                    ?>
                                <option value="<?=$item['id']?>"><?=$item['full_name']?></option>    
                                    <?php
                                    endforeach; ?>
                            </select>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="day" class="form-label">Hari</label>
                                <select name="day" class="form-select" id="day">
                                <option disabled selected>Pilih Hari</option>
                                <option value="Senin" >Senin</option>         
                                <option value="Selasa" >Selasa</option>      
                                <option value="Rabu" >Rabu</option>      
                                <option value="Kamis" >Kamis</option> 
                                <option value="Jumat" >Jumat</option>                                      
                            </select>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="time" class="form-label">Waktu</label>
                                <input type="time" name="time" class="form-control" id="time"/>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                        <div class="mb-3">
                                <label for="time" class="form-label">Online</label>

                                <div class="form-check">
                                <input class="form-check-input" name="is_online" type="checkbox" value="1" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Kelas Online
                                </label>
                            </div>
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

            <?php include_once "../templates/footer.php"; ?>
