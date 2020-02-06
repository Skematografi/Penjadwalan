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
          <span>Tambah</span>
        </li>
      </ol>

      <!-- DataTables Example -->
      <div class="card">
        <div class="card-body">
          <form action="<?php echo site_url(); ?>Kelas_kuliah/tambah_data" method="post" autocomplete="off">
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="nim">ID Kelas Kuliah :</label>
                  <input type="text" class="form-control" name="id_kls" id="id_kls" value="<?= $auto;?>" readonly>
                </div>
                <div class="form-group">
                  <label for="aktif">ID SMS :</label>
                  <select class="custom-select" name="id_sms" required="required" >
                    <option value="" selected disabled>--Pilihan--</option>
                    <option value="0">Tidak Ada</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">ID Semester :</label>
                  <select class="custom-select" name="id_smt" required="required" >
                    <option value="" selected disabled>--Pilihan--</option>
                    <?php foreach($smt as $row){ ?>
                    <option><?php echo $row['id_smt']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">ID Mata Kuliah :</label>
                  <select class="custom-select" name="id_mk" required>
                    <option value="" selected disabled>--Pilihan--</option>
                    <?php foreach($mk as $row){ ?>
                    <option value="<?php echo $row['id_mk']; ?>"><?php echo $row['nm_mk']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">Nama Kelas Kuliah :</label>
                  <input type="text" class="form-control" name="nm_kls" id="nm_kls" maxlength="5" required>
                </div>
                <div class="form-group">
                  <label for="aktif">SKS Mata Kuliah :</label>
                  <input type="number" class="form-control number" name="sks_mk" id="sks_mk" min="3" maxlength="1"required>
                </div>
                <div class="form-group">
                  <label for="aktif">SKS Tatap Muka :</label>
                  <input type="number" class="form-control number" name="sks_tm" id="sks_tm" min="3" maxlength="2"required>
                </div>
                <div class="form-group">
                  <label for="aktif">SKS Praktekum :</label>
                  <input type="number" class="form-control number" name="sks_prak" id="sks_prak" min="3"maxlength="2" required>
                </div>
                <div class="form-group">
                  <label for="aktif">SKS Praktekum Lapangan :</label>
                  <input type="number" class="form-control number" name="sks_prak_lap" id="sks_prak_lap" min="3" maxlength="2" required>
                </div>
              </div>

              <div class="col">
                <div class="form-group">
                  <label for="aktif">SKS Simulasi :</label>
                  <input type="number" class="form-control number" name="sks_sim" id="sks_sim" min="3" maxlength="2" required>
                </div>
                <div class="form-group">
                  <label for="aktif">Bahasan Case :</label>
                  <input type="text" class="form-control" name="bahasan_case" id="bahasan_case" maxlength="200" required>
                </div>
                <div class="form-group">
                  <label for="aktif">Tanggal Mulai Koas :</label>
                  <input type="date" class="form-control" name="tgl_mulai_koas" id="tgl_mulai_koas" required>
                </div>
                <div class="form-group">
                  <label for="aktif">Tanggal Akhir Koas :</label>
                  <input type="date" class="form-control" name="tgl_selesai_koas" id="tgl_selesai_koas" required>
                </div>
                <div class="form-group">
                  <label for="aktif">ID MoU :</label>
                  <select class="custom-select" name="id_mou">
                    <option value="" selected disabled>--Pilihan--</option>
                    <option value="0">Tidak Ada</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">Selenggara PDITT :</label>
                  <input type="number" class="form-control number" name="a_selenggara_pditt" id="a_selenggara_pditt" maxlength="1"required>
                </div>
                <div class="form-group">
                  <label for="aktif">Kuota Peserta :</label>
                  <input type="number" class="form-control number" name="kuota_pditt" id="kuota_pditt" min="20" maxlength="1"required>
                </div>
                <div class="form-group">
                  <label for="aktif">Pengguna PDITT :</label>
                  <select class="custom-select" name="a_pengguna_pditt" required>
                    <option value="" selected disabled>--Pilihan--</option>
                    <option value="1">Ikut Serta</option>
                    <option value="0">Tidak Ikut Serta</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">ID Kelas PDITT:</label>
                  <select class="custom-select" name="id_kls_pditt">
                    <option value="" selected disabled>--Pilihan--</option>
                    <option value="0">Tidak Ada</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-info" style="float:right;">Submit</button>
              </div>
            </div>
          </form>
        </div>
    </div>
    </div>
  </div>
</div>