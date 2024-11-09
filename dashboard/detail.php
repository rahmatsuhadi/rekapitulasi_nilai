<?php include_once "../templates/header.php"; ?>

<?php

include_once "../src/Model/CourseModel.php";

$search = @$_GET['key'];

$course_id  = $_GET['course_id'];

$model = new Course();
$course = $model->getCourseByid($course_id);


?>

<div class="container mt-4 mb-5" style="width: 80%;">
                <a href="./" class="text-decoration-none text-black">Kembali</a>

                



                <div class="border px-3 py-2 mt-2">

                    <h6 class="fw-bold">Rekap Hasil Mahasiswa</h6>

                    <div class="row gx-5 pt-2">
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
                                <h5 class="form-control border-0" id="Nama_Mahasiswa">
                                    <?=$course['full_name']?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIM</label>
                                <h5 class="form-control border-0" id="nim">
                                    <?=$course['identity']?>
                                </h5>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="kehadiran" class="form-label">Kehadiran</label>
                                <h5 class="form-control border-0" id="kehadiran">
                                    <?=$course['presensi']?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="tugas" class="form-label">Tugas</label>
                                <h5 class="form-control border-0" id="tugas">
                                    <?=$course['tugas']?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="responsi" class="form-label">Responsi</label>
                                <h5 class="form-control border-0" id="responsi">
                                    <?=$course['responsi']?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label for="uts" class="form-label">UTS</label>
                                <h5 class="form-control border-0" id="uts">
                                    <?=$course['uts']?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label for="uas" class="form-label">UAS</label>
                                <h5 class="form-control border-0" id="uas">
                                    <?=$course['uas']?>
                                </h5>
                            </div>
                        </div>
                    </div>

                      
                    </div>

                </div>

                <!--  -->
            </div>

            <?php include_once "../templates/footer.php"; ?>