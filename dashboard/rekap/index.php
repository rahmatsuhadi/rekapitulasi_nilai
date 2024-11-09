<?php include_once "../../templates/header.php"; ?>


<?php 
    include_once "../../src/Model/CourseModel.php";
    include_once "../../src/Model/GradeModel.php";
    include_once "../../src/Model/MahasiswaModel.php";

    $id = $_GET['id'];

    $modelCourse = new Course();
    $modelGrade = new Grade();
    $grade = $modelGrade->getGradeById($id);
    $courseList = $modelCourse->getAllCourseByGradeId($id);


    $search = @$_GET['key'];
    
    if($search){
        $model = new Mahasiswa();
        $mahasiswaList = $model->searchByIdentityName($search, $id);
    }


?>
            <div class="container-lg ps-5 px-lg-3 mt-4 w-100">



                <div class="d-flex justify-content-between">
                <h2><?=$grade->name?> (<?=$grade->code_name?>)</h2>
                
                </div>


                <!-- search -->

                
                <?php
                if($role=="admin"):
                    ?>
                    <form method="GET">
                    
                    <div class="input-group mb-3 mt-3">
    
                        <input type="text" name="key" class="form-control" placeholder="Cari Nama/NIM"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <input type="hidden" name="id" value="<?=$id?>"/>
                            <!-- <a href="./edit.html"> -->
                                <button type="submit" class="btn text-white bg-pink">Cari</button>
                            <!-- </a> -->
                        </div>
                        </div>
                    </form>
                    <?php
                endif;
                ?>

                <!--  -->
                <div class="border px-3 py-2 mt-2">
                        <?php if(!$search):?>
                        <h6 class="text-center mt-2">Silahkan Cari Mahasiswa Terlebih dahulu!</h6>
                        
                            <?php else:?>
                                <div class="table-responsive mt-2">
                                <table class="table table-borderless table-custom" id="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Mahasiswa</th>
                                            <th scope="col">NIM</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;?>
                                    <?php foreach ($mahasiswaList as $item): ?>
                                        <tr>
                                            <td><?=$no;?></td>
                                            <td scope="row">
                                                <a href="/dashboard/rekap/edit.php?id=<?=$item['id']?>" class="">
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
                                                $no++;
                                                ?>
                                        </td>
                                            <td scope="row">
                                                <?php if(!$item['id_course']):?>
                                                    <a href="/dashboard/rekap/tambah.php?grade_id=<?=$id?>&student_id=<?=$item['id']?>" class="">
                                                        <h5 class="fs-6 fw-bold">Tambah</h5>
                                                    </a>
                                                <?php else:?>
                                                    <a href="/dashboard/rekap/delete.php?grade_id=<?=$id?>&course_id=<?=$item['id_course']?>" class="">
                                                        <h5 class="fs-6 fw-bold">Hapus</h5>
                                                    </a>
                                                <?php endif; ?>
                                                   
                                                </td>

                                        </tr>
                                        <?php endforeach?>                           

                                    </tbody>
                                </table>
                                </div>
                        <?php endif?>

                        <div>

                        <div>
                    </div>
                


                <!-- search -->

                <span class="text-danger" style="font-size: 11pt;">*Klik Nama Mahasiswa untuk melihat detail</span>

                <div class="table-responsive mt-2">
                    <table class="table table-borderless table-custom" id="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Mahasiswa</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Kehadiran</th>
                                <th scope="col">Tugas</th>
                                <th scope="col">Responsi</th>
                                <th scope="col">UTS</th>
                                <th scope="col">UAS</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($courseList as $item): ?>
                            <tr>
                                <td>1</td>
                                <td scope="row">
                                    <a href="/dashboard/rekap/edit.php?course_id=<?=$item['id']?>&grade_id=<?=$grade->id?>" class="">
                                        <h5 class="fs-6 fw-bold"><?=$item['full_name']?></h5>
                                    </a>
                                </td>
                                <td><?=$item['identity']?></td>
                                <td><?=$item['presensi']?></td>
                                <td><?=$item['tugas']?></td>
                                <td><?=$item['responsi']?></td>
                                <td><?=$item['uts']?></td>
                                <td><?=$item['uas']?></td>
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

                            </tr>
                            <?php endforeach?>                           

                        </tbody>
                    </table>
                </div>


            </div>

        </main>


    </div>

    <?php include_once "../../templates/footer.php"; ?>