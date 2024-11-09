<?php include_once "../../templates/header.php"; ?>

<?php

include_once "../../src/Model/CourseModel.php";

$search = @$_GET['key'];

$grade_id  = @$_GET['grade_id'];
$course_id  = @$_GET['course_id'];

$id =@$_GET['course_id'];

    $model = new Course();
    $course = $model->getCourseByid($id);

?>

<div class="container mt-4 mb-5" style="width: 80%;">
                <a href="/dashboard/rekap/index.php?id=<?=$grade_id?>" class="text-decoration-none text-black">Kembali</a>




                <!-- <div class="input-group mb-3 mt-3">

                    <input type="text" value="23.01.4968" class="form-control" name="searchMahasiswa" placeholder="Cari Nama/NIM"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn text-white bg-pink">Cari</button>
                    </div>
                </div> -->



                <div class="border px-3 py-2 mt-2">

                    <h6 class="fw-bold">Rekap Hasil Mahasiswa</h6>

                    <form method="POST" action="./update.php?id=<?=$id?>&grade_id=<?=$grade_id?>">

                    <div class="row gx-5 pt-2">
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
                                <h5 class="form-control border-0">
                                    <?=$course['full_name']?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIM</label>
                                <h5 class="form-control border-0">
                                    <?=$course['identity']?>
                                </h5>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="kehadiran" class="form-label">Kehadiran</label>
                                <input type="number" value="<?=$course['presensi']?>"  name="presensi" class="form-control" id="kehadiran"
                                    placeholder="Kehadiran">
                                <!-- <span style="font-size: 12px;" class="text-danger">Otomatis terisi/perubahan tidak
                                    diijinkan</span> -->
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="tugas" class="form-label">Tugas</label>
                                <input type="number" value="<?=$course['tugas']?>" class="form-control" name="tugas" id="tugas" placeholder="Tugas">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="responsi" class="form-label">Responsi</label>
                                <input type="number" value="<?=$course['responsi']?>" class="form-control" name="responsi" id="responsi" placeholder="Responsi">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label for="uts" class="form-label">UTS</label>
                                <input type="number" value="<?=$course['uts']?>" class="form-control" name="uts" id="uts" placeholder="UTS">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label for="uas" class="form-label">UAS</label>
                                <input type="number" value="<?=$course['uas']?>" class="form-control" name="uas" id="uas" placeholder="UAS">
                            </div>
                        </div>
                        <!-- <div class="col-12">
                            <div class="mb-3">
                                <label for="nilai" class="form-label">Nilai</label>
                                <select class="form-control" id="nilai" placeholder="name@example.com">
                                    <option>
                                        A
                                    </option>
                                    <option>
                                        B
                                    </option>
                                    <option>
                                        C
                                    </option>

                                    <option>
                                        A
                                    </option>
                                </select>

                                <span style="font-size: 12px;" class="text-danger">Otomatis terisi/kalkulasi
                                    otomatis</span>

                            </div>

                        </div> -->
                        </form>

                        <div class="col-12">
                            <button class="btn text-white  bg-pink w-100">
                                SIMPAN
                            </button>
                        </div>
                    </div>

                </div>

                <!--  -->
            </div>

            <?php include_once "../../templates/footer.php"; ?>