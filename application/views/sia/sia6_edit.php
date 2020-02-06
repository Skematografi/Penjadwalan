<div class="wrapper">
    <?php $this->load->view('layouts/sidebar'); ?>
	<div id="content">
        <?php $this->load->view('layouts/full_screen'); ?>
        <div class="container">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Sistem Informasi Akuntansi</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Semester 6</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Edit Jadwal</a>
                </li>
            </ol>
           <?php echo $this->session->flashdata('message'); ?>
            <div class="card">
                <div class="card-body">
                  <?php foreach($data as $key){ ?>
                    <form action="<?php echo site_url(); ?>Si_kelola/update" method="post" autocomplete="off">
                         <div class="row">
                            <div class="col">
                              <input type="text" name="link" id="link" value="Sia/sia_6" hidden>
                               <div class="form-group">
                                <label for="nim">ID Jadwal :</label>
                                <input type="text" class="form-control" name="id_jadwal" id="id_jadwal" value="<?= $key->id_jadwal; ?>" readonly>
                              </div>
                                <div class="form-group">
                                    <label for="nim">Kelas :</label>
                                    <select class="custom-select" name="kelas" id="kelas" required>
                                      <option selected><?= $key->kelas; ?></option>
                                      <?php foreach($sort as $row){ ?>
                                      <option><?php echo "S.I. Akuntansi 2 ".$row['gelombang']; ?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Mata Kuliah :</label>
                                    <select class="custom-select" name="id_kls" id="id_kls" onchange="get_values();" required>
                                      <option value="<?= $key->id_kls; ?>" selected><?= $key->nm_mk; ?></option>
                                      <<?php foreach($join_kls as $row){ ?>
                                      <option value="<?php echo $row->id_kls; ?>"><?php echo $row->nm_mk; ?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nm_ptk">Dosen :</label>
                                    <input type="text" class="form-control" name="nm_ptk" id="nm_ptk" value="<?= $key->dosen; ?>" readonly required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="aktif">Ruangan :</label>
                                    <select class="custom-select" name="ruangan" id="ruangan" required>
                                     <option selected><?= $key->ruangan; ?></option>
                                      <?php foreach($ruangan as $row){ ?>
                                      <option value="<?php echo $row->nm_ruangan; ?>"><?php echo $row->nm_ruangan; ?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="aktif">Hari :</label>
                                    <select class="custom-select" name="hari" required>
                                      <option selected><?= $key->hari; ?></option>
                                      <option value="Senin">Senin</option>
                                      <option value="Selasa">Selasa</option>
                                      <option value="Rabu">Rabu</option>
                                      <option value="Kamis">Kamis</option>
                                      <option value="Jumat">Jumat</option>
                                      <option value="Sabtu">Sabtu</option>
                                      <option value="Minggu">Minggu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jam">Jam :</label>
                                    <input type="time" class="form-control" name="jam" id="jam" value="<?= $key->jam; ?>" required>
                                </div>
                                
                                <button type="submit" class="btn btn-info" style="float:right;">Update</button>
                            </div>
                        </div>
                    </form>
                  <?php }; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function get_values()
    {
        var id_kls=$("#id_kls").val();
 
        $.post ("<?php echo base_url(); ?>Si/get_values/" + id_kls,
 
            function(data)
            {
              $('#nm_ptk').val(data.nm_ptk);
            }
        );
    }
</script>