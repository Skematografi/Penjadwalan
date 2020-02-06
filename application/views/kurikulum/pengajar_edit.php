<div class="wrapper">
  <?php $this->load->view('layouts/sidebar'); ?>
	<div id="content">
    <?php $this->load->view('layouts/full_screen'); ?>
    <div class="container pt-4 mt-5">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url();?>Pengajar" class="text-success">Pengajar Kuliah</a>
        </li>
        <li class="breadcrumb-item active">
          <span>Edit</span>
        </li>
      </ol>

      <!-- DataTables Example -->
      <div class="card">
        <div class="card-body">
          <?php foreach($data as $key){ ?>
          <form action="<?php echo site_url(); ?>Pengajar/update_pengajar" method="post" autocomplete="off">
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="nim">ID Ajar :</label>
                  <input type="text" class="form-control" name="id_ajar" id="id_ajar" value="<?php echo $key->id_ajar; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="aktif">ID Registrasi PTK  :</label>
                  <select class="custom-select" name="id_reg_ptk" required>
                    <option selected><?php echo $key->id_reg_ptk; ?></option>
                    <?php foreach($dosen as $row){ ?>
                    <option><?php echo $row['id_reg_ptk']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">ID Substansi :</label>
                  <select class="custom-select" name="id_subst" required>
                    <option selected><?php echo $key->id_subst; ?></option>
                    <option value="0">Tidak Ada</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">ID Kelas Kuliah :</label>
                  <select class="custom-select" name="id_kls" id="id_kls" onChange="get_values();" required>
                    <option selected><?php echo $key->id_kls; ?></option>
                    <?php foreach($kls as $row){ ?>
                    <option><?php echo $row['id_kls']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">SKS Substansi Total :</label>
                  <input type="text" class="form-control" name="sks_subst_tot" id="sks_subst_tot" maxlength="5" value="<?php echo $key->sks_subst_tot; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="aktif">SKS Tatap Muka :</label>
                  <input type="number" class="form-control" name="sks_tm_subst" id="sks_tm_subst" value="<?php echo $key->sks_tm_subst; ?>" maxlength="2"readonly>
                </div>
              </div>

              <div class="col">
                <div class="form-group">
                  <label for="aktif">SKS Praktikum :</label>
                  <input type="number" class="form-control" name="sks_prak_subst" id="sks_prak_subst" value="<?php echo $key->sks_prak_subst; ?>" maxlength="2" readonly>
                </div>
                <div class="form-group">
                  <label for="aktif">SKS Praktikum Lapangan :</label>
                  <input type="number" class="form-control" name="sks_prak_lap_subst" id="sks_prak_lap_subst" value="<?php echo $key->sks_prak_lap_subst; ?>" maxlength="2" readonly>
                </div>
                <div class="form-group">
                  <label for="aktif">SKS Simulasi :</label>
                  <input type="number" class="form-control" name="sks_sim_subst" id="sks_sim_subst" value="<?php echo $key->sks_sim_subst; ?>" maxlength="2" readonly>
                </div>
                <div class="form-group">
                  <label for="aktif">Rencana Tatap Muka :</label>
                  <input type="number" class="form-control number" name="jml_tm_renc" id="jml_tm_renc" value="<?php echo $key->jml_tm_renc; ?>" required>
                </div>
                <div class="form-group">
                  <label for="aktif">Realisasi Tatap Muka :</label>
                  <input type="number" class="form-control number" name="jml_tm_real" id="jml_tm_real" value="<?php echo $key->jml_tm_real; ?>" required>
                </div>
                <div class="form-group">
                  <label for="aktif">ID Jenis Evaluasi :</label>
                  <select class="custom-select" name="id_jns_eval">
                    <option selected><?php echo $key->id_jns_eval; ?></option>
                    <option value="0">Tidak Ada</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-info" style="float:right;">Submit</button>
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
 
        $.post ("<?php echo base_url(); ?>Pengajar/get_values/" + id_kls,
 
            function(data)
            {
              $('#sks_tm_subst').val(data.sks_tm);
              $('#sks_prak_subst').val(data.sks_prak);
              $('#sks_prak_lap_subst').val(data.sks_prak_lap);
              $('#sks_sim_subst').val(data.sks_sim);
              $('#sks_subst_tot').val(data.sks_tm)+val(data.sks_prak)+val(data.sks_prak_lap)+val(data.sks_sim);
            }
        );
    }
</script>