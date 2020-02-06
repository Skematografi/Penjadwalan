<!-- Sidebar  -->
    <div id="sidebar">
        <div class="sidebar-header">
            <h4><i class="fas fa-book-reader" style="size: 2px;"></i> Penjadwalan</h4>
        </div>

        <ul class="list-unstyled components">
            <!-- <p><i class="fas fa-tachometer-alt"></i> Dashboard</p> -->
            <li>
                <a href="<?php echo base_url(); ?>Dashboard"><i class="fas fa-tachometer-alt pl-3 pr-3"></i>Dashboard</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>Mata_kuliah"><i class="fas fa-book-open pl-3 pr-3"></i>Mata Kuliah</a>
            </li>
            <li>
                <a href="#kurikulum" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle-sidebar"><i class="fa fa-university pl-3 pr-3"></i>Kurikulum</a>
                <ul class="collapse list-unstyled" id="kurikulum">
                    <li>
                        <a href="<?php echo base_url(); ?>Kelas_kuliah"><i class="fas fa-book-open pr-3"></i>Kelas Kuliah</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Pengajar"><i class="fa fa-graduation-cap pr-3"></i>Pengajar</a>
                    </li>
                </ul>
            </li>
            <li class="bg-success">
                <p><i class="pl-2 pr-3 pt-3 pb-3"></i>--- Program Studi ---</p>
            </li>
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle-sidebar"><i class="fa fa-university pl-3 pr-3"></i> Sistem Informasi</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="<?php echo base_url(); ?>Si"><i class="fas fa-users pr-3"></i>Semester 1</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Si/si_2"><i class="fas fa-users pr-3"></i>Semester 2</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Si/si_3"><i class="fas fa-users pr-3"></i>Semester 3</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Si/si_4"><i class="fas fa-users pr-3"></i>Semester 4</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Si/si_5"><i class="fas fa-users pr-3"></i>Semester 5</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Si/si_6"><i class="fas fa-users pr-3"></i>Semester 6</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Si/si_7"><i class="fas fa-users pr-3"></i>Semester 7</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Si/si_8"><i class="fas fa-users pr-3"></i>Semester 8</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#sia" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle-sidebar"><i class="fa fa-university pl-3 pr-3"></i> S.I. Akuntansi</a>
                <ul class="collapse list-unstyled" id="sia">
                    <li>
                        <a href="<?php echo base_url(); ?>Sia/sia_2"><i class="fas fa-users pr-3"></i>Semester 2</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Sia/sia_4"><i class="fas fa-users pr-3"></i>Semester 4</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>Sia/sia_6"><i class="fas fa-users pr-3"></i>Semester 6</a>
                    </li>
                </ul>
            </li>
            <li class="bg-success">
                <p><i class="pl-4 pr-4 pt-3 pb-3"></i>--- Laporan ---</p>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>Jadwal"><i class="fa fa-file pl-3 pr-3"></i>Jadwal Kuliah</a>
            </li>
            <li class="bg-success">
                <p><i class="pl-3 pr-4 pt-3 pb-3"></i>--- Pengaturan ---</p>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>Profil"><i class="fas fa-user pl-3 pr-3"></i>Profil</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>Auth/logout"><i class="fas fa-sign-out-alt pl-3 pr-3"></i>Keluar</a>
            </li>
        </ul>
    </div>