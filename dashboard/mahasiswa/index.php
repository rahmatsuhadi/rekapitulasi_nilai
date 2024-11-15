<?php include_once "../../templates/header.php"; ?>


<?php 
    include_once "../../src/Model/MahasiswaModel.php";
    $model = new Mahasiswa();
    $courseList = $model->getAllMahasiswa();
    
?>
            <div class="container-lg ps-5 px-lg-3 mt-4 w-100">


                <div class="d-flex flex-lg-row flex-column gap-2 gap-lg-0 justify-content-between mb-4">
                    
                    <div class="d-flex justify-content-between gap-3">
                        <a href="./tambah.php">
                            <button type="button" class="btn bg-pink text-white">Registrasi Mahasiswa</button>
                        </a>
                    </div>
                </div>

                <span class="text-danger" style="font-size: 11pt;">*Klik Nama Mahasiswa untuk melihat detail</span>

                <div class="table-responsive mt-2">
                    <table class="table table-borderless table-custom" id="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Mahasiswa</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Status</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($courseList as $item): ?>
                            <tr>
                                <td>1</td>
                                <td scope="row">
                                    <a href="./edit.php?id=<?=$item['id']?>" class="">
                                        <h5 class="fs-6 fw-bold"><?=$item['full_name']?></h5>
                                    </a>
                                </td>
                                <td><?=$item['identity']?></td>
                                
                                <td>
                                    <?php
                                    if($item['status']=="active"):
                                        ?>
                                            <button class="btn w-75 btn-sm btn-success px-2 py-1"
                                            >Active</button>
                                        <?php
                                        else:
                                        ?>
                                        <button class="btn w-75 btn-sm btn-danger px-2 py-1"
                                        >Deactive</button>

                                        <?php

                                    endif;
                                    ?>
                              </td>
                              <td scope="row">
                                    <a href="./delete.php?id=<?=$item['id']?>" class="">
                                        <h5 class="fs-6 fw-bold">Delete</h5>
                                    </a>
                                </td>

                            </tr>
                            <?php endforeach?>                           

                        </tbody>
                    </table>
                </div>


            </div>

        </main>


    </div>


    <?php include_once "../../templates/footer.php"; ?>
