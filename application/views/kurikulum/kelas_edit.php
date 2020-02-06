<div class="wrapper">
  <?php $this->load->view('layouts/sidebar'); ?>
	<div id="content">
    <?php $this->load->view('layouts/full_screen'); ?>
    <div class="container pt-4 mt-5">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url();?>Kelas_kuliah" class="text-success">Kelas Kuliah</a>
        </li>
        <li class="breadcrumb-item active">
          <span>Edit</span>
        </li>
      </ol>

      <!-- DataTables Example -->
      <div class="card">
        <div class="card-body">
          <?php foreach($data as $key){ ?>
          <form action="<?php echo site_url(); ?>Kelas_kuliah/update_kls" method="post" autocomplete="off">
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="nim">ID Kelas Kuliah :</label>
                  <input type="text" class="form-control" name="id_kls" id="id_kls" value="<?php echo $key->id_kls; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="aktif">ID SMS :</label>
                  <select class="custom-select" name="id_sms" required>
                    <option selected><?php echo $key->id_sms; ?></option>
                    <option value="0">Tidak Ada</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">ID Semester :</label>
                  <select class="custom-select" name="id_smt" required>
                    <option selected><?php echo $key->id_smt; ?></option>
                    <?php foreach($smt as $row){ ?>
                    <option><?php echo $row['id_smt']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">ID Mata Kuliah :</label>
                  <select class="custom-select" name="id_mk" required>
                    <option selected><?php echo $key->id_mk; ?></option>
                    <?php foreach($mk as $row){ ?>
                    <option><?php echo $row['id_mk']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">Nama Kelas Kuliah :</label>
                  <input type="text" class="form-control" name="nm_kls" id="nm_kls" maxlength="5" value="<?php echo $key->nm_kls; ?>" required>
                </div>
                <div class="form-group">
                  <label for="aktif">SKS Mata Kuliah :</label>
                  <input type="number" class="form-control number" name="sks_mk" id="sks_mk" maxlength="1"value="<?php echo $key->sks_mk; ?>" required>
                </div>
                <div class="form-group">
                  <label for="aktif">SKS Tatap Muka :</label>
                  <input type="number" class="form-control number" name="sks_tm" id="sks_tm" maxlength="2" value="<?php echo $key->sks_tm; ?>" required>
                </div>
                <div class="form-group">
                  <label for="aktif">SKS Praktekum :</label>
                  <input type="number" class="form-control number" name="sks_prak" id="sks_prak" maxlength="2" value="<?php echo $key->sks_prak; ?>" required>
                </div>
                <div class="form-group">
                  <label for="aktif">SKS Praktekum Lapangan :</label>
                  <input type="number" class="form-control number" name="sks_prak_lap" id="sks_prak_lap" maxlength="2" value="<?php echo $key->sks_prak_lap; ?>" required>
                </div>
              </div>

              <div class="col">
                <div class="form-group">
                  <label for="aktif">SKS Simulasi :</label>
                  <input type="number" class="form-control number" name="sks_sim" id="sks_sim" maxlength="2" value="<?php echo $key->sks_sim; ?>" required>
                </div>
                <div class="form-group">
                  <label for="aktif">Bahasan Case :</label>
                  <input type="text" class="form-control" name="bahasan_case" id="bahasan_case" maxlength="200" value="<?php echo $key->bahasan_case; ?>" required>
                </div>
                <div class="form-group">
                  <label for="aktif">Tanggal Mulai Koas :</label>
                  <input type="date" class="form-control" name="tgl_mulai_koas" id="tgl_mulai_koas" value="<?php echo $key->tgl_mulai_koas; ?>" required>
                </div>
                <div class="form-group">
                  <label for="aktif">Tanggal Akhir Koas :</label>
                  <input type="date" class="form-control" name="tgl_selesai_koas" id="tgl_selesai_koas" value="<?php echo $key->tgl_selesai_koas; ?>" required>
                </div>
                <div class="form-group">
                  <label for="aktif">ID MoU :</label>
                  <select class="custom-select" name="id_mou">
                    <option selected><?php echo $key->id_mou; ?></option>
                    <option value="0">Tidak Ada</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">Selenggara PDITT :</label>
                  <input type="number" class="form-control number" name="a_selenggara_pditt" id="a_selenggara_pditt" maxlength="1" value="<?php echo $key->a_selenggara_pditt; ?>" required>
                </div>
                <div class="form-group">
                  <label for="aktif">Kuota Peserta :</label>
                  <input type="number" class="form-control number" name="kuota_pditt" id="kuota_pditt" maxlength="1" value="<?php echo $key->kuota_pditt; ?>">
                </div>
                <div class="form-group">
                  <label for="aktif">Pengguna PDITT :</label>
                  <select class="custom-select" name="a_pengguna_pditt" required>
                    <option selected><?php echo $key->a_pengguna_pditt; ?></option>
                    <option value="1">Ikut Serta</option>
                    <option value="0">Tidak Ikut Serta</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">ID Kelas PDITT:</label>
                  <select class="custom-select" name="id_kls_pditt">
                    <option selected><?php echo $key->id_kls_pditt; ?></option>
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