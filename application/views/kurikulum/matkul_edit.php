<div class="wrapper">
  <?php $this->load->view('layouts/sidebar'); ?>
	<div id="content">
    <?php $this->load->view('layouts/full_screen'); ?>
    <div class="container pt-4 mt-5">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url();?>Mata_kuliah" class="text-success">Mata Kuliah</a>
        </li>
        <li class="breadcrumb-item active">
          <span>Edit</span>
        </li>
      </ol>

      <!-- DataTables Example -->
      <div class="card">
        <div class="card-body">
          <?php foreach($data as $row): ?>
          <form action="<?php echo site_url(); ?>Mata_kuliah/update_mk" method="post" autocomplete="off">
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="nim">ID Mata Kuliah :</label>
                  <input type="text" class="form-control" name="id_mk" id="id_mk" value="<?php echo $row->id_mk; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="aktif">ID SMS :</label>
                  <select class="custom-select" name="id_sms">
                    <option value="0"><?php echo $row->id_sms; ?></option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">ID Jenjang Pendidikan :</label>
                  <select class="custom-select" name="id_jenj_didik">
                    <option value="0"><?php echo $row->id_jenj_didik; ?></option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">Kode Mata Kuliah :</label>
                  <input type="text" class="form-control" name="kode_mk" id="kode_mk" maxlength="15" value="<?php echo $row->kode_mk; ?>" required>
                </div>
                <div class="form-group">
                  <label for="aktif">Nama Mata Kuliah :</label>
                  <input type="text" class="form-control" name="nm_mk" id="nm_mk" maxlength="60" value="<?php echo $row->nm_mk; ?>" required>
                </div>
                <div class="form-group">
                  <label for="aktif">Jenis Mata Kuliah :</label>
                  <select class="custom-select" name="jns_mk" required>
                    <option selected disabled><?php echo $row->jns_mk; ?></option>
                    <option value="A">Wajib</option>
                    <option value="B">Pilihan</option>
                    <option value="C">Wajib Peminatan</option>
                    <option value="D">Pilihan Peminatan</option>
                    <option value="S">Tugas Akhir/Skripsi</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">Kelompok Mata Kuliah :</label>
                  <select class="custom-select" name="kel_mk" required>
                    <option selected disabled><?php echo $row->kel_mk; ?></option>
                    <option value="A">MPK</option>
                    <option value="B">MKK</option>
                    <option value="C">MKB</option>
                    <option value="D">MPB</option>
                    <option value="E">MBB</option>
                    <option value="F">MKU/MKUD</option>
                    <option value="G">MKDK</option>
                    <option value="H">MKK</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">SKS Mata Kuliah :</label>
                  <input type="number" class="form-control number" name="sks_mk" id="sks_mk" maxlength="1" value="<?php echo $row->sks_mk; ?>" required>
                </div>
                <div class="form-group">
                  <label for="aktif">SKS Tatap Muka :</label>
                  <input type="number" class="form-control number" name="sks_tm" id="sks_tm" maxlength="2"value="<?php echo $row->sks_tm; ?>" required>
                </div>
                <div class="form-group">
                  <label for="aktif">SKS Praktekum :</label>
                  <input type="number" class="form-control number" name="sks_prak" id="sks_prak" maxlength="2" value="<?php echo $row->sks_prak; ?>" required>
                </div>
              </div>

              <div class="col">
                <div class="form-group">
                  <label for="aktif">SKS Praktekum Lapangan :</label>
                  <input type="number" class="form-control number" name="sks_prak_lap" id="sks_prak_lap" maxlength="2" value="<?php echo $row->sks_prak_lap; ?>" required>
                </div>
                <div class="form-group">
                  <label for="aktif">SKS Simulasi :</label>
                  <input type="number" class="form-control number" name="sks_sim" id="sks_sim" maxlength="2" value="<?php echo $row->sks_sim; ?>" required>
                </div>
                <div class="form-group">
                  <label for="aktif">Metode Pelaksanaan Kuliah :</label>
                  <input type="text" class="form-control" name="metode_pelaksanaan_kuliah" id="metode_pelaksanaan_kuliah" value="<?php echo $row->metode_pelaksanaan_kuliah; ?>" maxlength="225" required>
                </div>
                <div class="form-group">
                  <label for="aktif">Satuan Acara Pembelajaran :</label>
                  <select class="custom-select" name="a_sap" required>
                    <option selected disabled><?php echo $row->a_sap; ?></option>
                    <option value="1">Tersedia</option>
                    <option value="0">Belum Tersedia</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">Silabus :</label>
                  <select class="custom-select" name="a_silabus" required>
                    <option selected disabled><?php echo $row->a_silabus; ?></option>
                    <option value="1">Tersedia</option>
                    <option value="0">Belum Tersedia</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">Bahan Ajar :</label>
                  <select class="custom-select" name="a_bahan_ajar" required>
                    <option selected disabled><?php echo $row->a_bahan_ajar; ?></option>
                    <option value="1">Tersedia</option>
                    <option value="0">Belum Tersedia</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">Acara Praktikum :</label>
                  <input type="number" class="form-control number" name="acara_prak" id="acara_prak" value="<?php echo $row->acara_prak; ?>" required>
                </div>
                <div class="form-group">
                  <label for="aktif">Diktat :</label>
                  <select class="custom-select" name="a_diktat" required>
                    <option selected disabled><?php echo $row->a_diktat; ?></option>
                    <option value="1">Tersedia</option>
                    <option value="0">Belum Tersedia</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">Tanggal Mulai Efektif:</label>
                  <input type="date" class="form-control" name="tgl_mulai_efektif" id="tgl_mulai_efektif" value="<?php echo $row->tgl_mulai_efektif; ?>" required>
                </div>
                <div class="form-group">
                  <label for="aktif">Tanggal Akhir Efektif :</label>
                  <input type="date" class="form-control" name="tgl_akhir_efektif" id="tgl_akhir_efektif" value="<?php echo $row->tgl_akhir_efektif; ?>" required>
                </div>
            
                <button type="submit" class="btn btn-info" style="float:right;">Update</button>
              </div>
            </div>
          </form>
        <?php endforeach; ?>
        </div>
    </div>
    </div>
  </div>
</div>