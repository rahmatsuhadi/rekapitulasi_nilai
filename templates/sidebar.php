
<?php


$role = $_SESSION['role'];


?>


<aside id="sidebar" class="sidebar expand" style="height: 100vh;">
            <div class="d-flex py-3 px-2  mb-4">
                <div>
                    <button class="btn button-sidebar">
                        <img src="/assets/logo.png" height="50" width="50" />
                    </button>
                </div>
                <div class="d-flex flex-column align-items-end overflow-hidden " id="nav-title">
                    <h6 class="text-white fw-bold">Dashboard Amikom</h6>
                    <span class="text-white"><?=$role?></span>
                </div>
            </div>

            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="/dashboard" class="link-item">
                        <i class="fa-solid fa-gauge-high" style="height: 30px; width: 30px;"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- <?php if($role=="dosen"):?> -->
                    <li class="sidebar-item">
                    <a href="/dashboard/profile.php" class="link-item">
                        <i class="fa-solid fa-chalkboard-user" style="height: 30px; width: 30px;"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <!-- <?php endif; ?> -->

                <?php if($role=="admin"):?>
                <li class="sidebar-item">
                    <a href="/dashboard/dosen" class="link-item">
                        <i class="fa-solid fa-users" style="height: 30px; width: 30px;"></i>
                        <span>Data Dosen</span>
                    </a>
                </li>
                <?php endif; ?>
                <?php if($role=="admin" || $role=="dosen"):?>
                <li class="sidebar-item">
                    <a href="/dashboard/mahasiswa" class="link-item">
                        <i class="fa-solid fa-users" style="height: 30px; width: 30px;"></i>
                        <span>Mahasiswa</span>
                    </a>
                </li>
                <?php endif; ?>
                <li class="sidebar-item">
                    <a href="/dashboard/bantuan.php" class="link-item">
                        <i class="fa-solid fa-circle-question" style="height: 30px; width: 30px;"></i>
                        <span>Bantuan</span>
                    </a>

                </li>

                <li class="sidebar-item">
                    <a href="/dashboard/logout.php" class="link-item">
                        <i class="fa-solid fa-door-open" style="height: 30px; width: 30px;"></i>
                        <span>Keluar</span>
                    </a>
                </li>

            </ul>
        </aside>