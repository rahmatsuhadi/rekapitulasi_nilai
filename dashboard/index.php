<?php include_once "../templates/header.php"; ?>


<?php 

include_once "../src/Model/GradeModel.php";
$model = new Grade();
$gradeList = $model->getAllGrade();

?>

            <div class="container-lg  ps-5 px-lg-3 ps-4 mt-4 w-100">

                <!--  -->
                <!-- <div class="card bg-pink text-white w-100 mb-5 " style="width: 18rem;">
                    
                </div> -->

                <div class="card mb-3">
                    <div class="card-header bg-pink">
                        <h6 class="text-white">
                            Profile Dosen
                        </h6>
                    </div>
                    <div class="card-body flex-column flex-md-row d-flex gap-3">
                        <div class="d-flex">
                            <img  src="../assets/images/placeholder-dosen.png" width="120" height="120"
                                class="m-auto" alt="...">
                        </div>
                        <div>
                            <h5 class="card-title">Selamat Datang Kembali</h5>

                            <div class="mt-4">
                                <h5 class="fw-bold"><?=$_SESSION['full_name']?></h5>
                                <p><?=$_SESSION['identity']?></p>
                                <p  class="card-text">Universitas Amikom Yogyakarta</p>
                            </div>

                        </div>
                    </div>
                </div>
                <!--  -->


                <div class="table-responsive">
                    <table class="table table-borderless table-custom" id="table">
                        <thead>
                            <tr>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col">Dosen</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Online</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($gradeList as $grade): ?>
                            <tr>
                                <td scope="row">
                                    <div>
                                        <a href="/dashboard/rekap/index.php?id=<?=$grade['id']?>" class="">
                                            <h5 class="fs-6 fw-bold">
                                            <?=$grade['name']?></h5>
                                        </a>
                                        <span style="color: rgb(133, 133, 133);font-size: 14px;"><?=$grade['code_name']?></span>
                                    </div>
                                </td>
                                <td><?=$grade['dosen']?></td>
                                <td><?= $grade['day'] . ', ' . $grade['time'] ?></td>
                                <td>
                                    <?php

                                    if($grade['is_online']):
                                        ?>
                                        <button class="btn px-2 py-1 w-75 bg-success text-white">Ya</button>
                                        <?php
                                    else:
                                        ?>
                                        <button class="btn px-2 py-1 w-75 bg-danger text-white">Tidak</button>
                                        
                                        <?php
                                        endif;
                                    ?>

                                </td>

                            </tr>
                            <?php endforeach;?>
                            
                            
                        </tbody>
                    </table>
                </div>


            </div>

<?php include_once "../templates/footer.php"; ?>