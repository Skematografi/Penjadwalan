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
                    <a href="#">Semester 4</a>
                </li>
            </ol>
           <?php echo $this->session->flashdata('message'); ?>
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo site_url(); ?>Si_kelola/tambah_data" method="post" autocomplete="off">
                         <div class="row">
                            <div class="col">
                              <input type="text" name="link" id="link" value="Sia/sia_4" hidden>
                              <div class="form-group">
                                <label for="nim">ID Jadwal :</label>
                                <input type="text" class="form-control" name="id_jadwal" id="id_jadwal" value="<?= $auto;?>" readonly>
                              </div>
                                <div class="form-group">
                                    <label for="nim">Kelas :</label>
                                    <select class="custom-select" name="kelas" id="kelas" required>
                                      <option value="" selected disabled>--Pilihan--</option>
                                      <?php foreach($sort as $row){ ?>
                                      <option><?php echo "S.I. Akuntansi 4 ".$row['gelombang']; ?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Mata Kuliah :</label>
                                    <select class="custom-select" name="id_kls" id="id_kls" onchange="get_values();" required>
                                      <option value="" selected disabled>--Pilihan--</option>
                                      <<?php foreach($join_kls as $row){ ?>
                                      <option value="<?php echo $row->id_kls; ?>"><?php echo $row->nm_mk; ?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nm_ptk">Dosen :</label>
                                    <input type="text" class="form-control" name="nm_ptk" id="nm_ptk" readonly required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="aktif">Ruangan :</label>
                                    <select class="custom-select" name="ruangan" id="ruangan" required>
                                     <option value="" selected disabled>--Pilihan--</option>
                                      <?php foreach($ruangan as $row){ ?>
                                      <option value="<?php echo $row->nm_ruangan; ?>"><?php echo $row->nm_ruangan; ?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="aktif">Hari :</label>
                                    <select class="custom-select" name="hari" required>
                                      <option value="" selected disabled>--Pilihan--</option>
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
                                    <input type="time" class="form-control" name="jam" id="jam" required>
                                </div>
                                
                                <button type="submit" class="btn btn-info" style="float:right;">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card mt-5">
              <div class="card-body">
                <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="dataTable">
                          <thead class="text-white text-center bg-success">
                              <tr>
                                <th>ID Jadwal</th>
                                <th>Kelas</th>
                                <th>Mata Kuliah</th>
                                <th>Dosen</th>
                                <th>Ruangan</th>
                                <th>Hari</th>
                                <th>Jam</th>
                                <th>Kelola</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($jadwal as $row): 
                              $id = $row->id_jadwal; ?>
                            <tr>
                              <td><?php echo $id ?></td>
                              <td><?php echo $row->kelas; ?></td>
                              <td><?php echo $row->nm_mk; ?></td>
                              <td><?php echo $row->dosen; ?></td>
                              <td><?php echo $row->ruangan; ?></td>
                              <td><?php echo $row->hari; ?></td>
                              <td><?php echo $row->jam; ?></td>
                              <td class="text-center">
                                <?php echo anchor('Si_kelola/edit_sia4/'.$id, "<i class='far fa-edit' style='size:2px;color:blue; margin-right:5px;'> Edit</i>");
                                ?>
                                <?php echo anchor('Si_kelola/hapus/'.$id.'/Sia/sia_2',"<i class='far fa-trash-alt' style='size:2px;color:red;'> Hapus</i>");
                                ?>
                              </td>
                            </tr>
                            <?php endforeach ?>
                          </tbody>
                        </table>
                </div>
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