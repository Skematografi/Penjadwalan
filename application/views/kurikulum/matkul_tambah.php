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
          <span>Tambah</span>
        </li>
      </ol>

      <!-- DataTables Example -->
      <div class="card">
        <div class="card-body">
          <form action="<?php echo site_url(); ?>Mata_kuliah/tambah_data" method="post" autocomplete="off">
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="nim">ID Mata Kuliah :</label>
                  <input type="text" class="form-control" name="id_mk" id="id_mk" value="<?= $auto;?>" readonly>
                </div>
                <div class="form-group">
                  <label for="aktif">ID SMS :</label>
                  <select class="custom-select" name="id_sms">
                    <option value="" selected disabled>--Pilihan--</option>
                    <option value="0">Tidak Ada</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">ID Jenjang Pendidikan :</label>
                  <select class="custom-select" name="id_jenj_didik">
                    <option value="" selected disabled>--Pilihan--</option>
                    <option value="0">Tidak Ada</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">Kode Mata Kuliah :</label>
                  <input type="text" class="form-control" name="kode_mk" id="kode_mk" maxlength="15" required>
                </div>
                <div class="form-group">
                  <label for="aktif">Nama Mata Kuliah :</label>
                  <input type="text" class="form-control" name="nm_mk" id="nm_mk" maxlength="60" required>
                </div>
                <div class="form-group">
                  <label for="aktif">Jenis Mata Kuliah :</label>
                  <select class="custom-select" name="jns_mk" required>
                    <option selected disabled>--Pilihan--</option>
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
                    <option value="" selected disabled>--Pilihan--</option>
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
                  <input type="number" class="form-control number" name="sks_mk" id="sks_mk" min="3" maxlength="1"required>
                </div>
                <div class="form-group">
                  <label for="aktif">SKS Tatap Muka :</label>
                  <input type="number" class="form-control number" name="sks_tm" id="sks_tm" min="3" maxlength="2"required>
                </div>
                <div class="form-group">
                  <label for="aktif">SKS Praktekum :</label>
                  <input type="number" class="form-control number" name="sks_prak" id="sks_prak" min="0" maxlength="2" required>
                </div>
              </div>

              <div class="col">
                <div class="form-group">
                  <label for="aktif">SKS Praktekum Lapangan :</label>
                  <input type="number" class="form-control number" name="sks_prak_lap" id="sks_prak_lap" min="0" maxlength="2" required>
                </div>
                <div class="form-group">
                  <label for="aktif">SKS Simulasi :</label>
                  <input type="number" class="form-control number" name="sks_sim" id="sks_sim" min="3" maxlength="2" required>
                </div>
                <div class="form-group">
                  <label for="aktif">Metode Pelaksanaan Kuliah :</label>
                  <input type="text" class="form-control" name="metode_pelaksanaan_kuliah" id="metode_pelaksanaan_kuliah" maxlength="225" required>
                </div>
                <div class="form-group">
                  <label for="aktif">Satuan Acara Pembelajaran :</label>
                  <select class="custom-select" name="a_sap" required>
                    <option value="" selected disabled>--Pilihan--</option>
                    <option value="1">Tersedia</option>
                    <option value="0">Belum Tersedia</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">Silabus :</label>
                  <select class="custom-select" name="a_silabus" required>
                    <option value="" selected disabled>--Pilihan--</option>
                    <option value="1">Tersedia</option>
                    <option value="0">Belum Tersedia</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">Bahan Ajar :</label>
                  <select class="custom-select" name="a_bahan_ajar" required>
                    <option value="" selected disabled>--Pilihan--</option>
                    <option value="1">Tersedia</option>
                    <option value="0">Belum Tersedia</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">Acara Praktikum :</label>
                  <input type="number" class="form-control number" name="acara_prak" id="acara_prak" min="0"required>
                </div>
                <div class="form-group">
                  <label for="aktif">Diktat :</label>
                  <select class="custom-select" name="a_diktat" required>
                    <option value="" selected disabled>--Pilihan--</option>
                    <option value="1">Tersedia</option>
                    <option value="0">Belum Tersedia</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aktif">Tanggal Mulai Efektif:</label>
                  <input type="date" class="form-control" name="tgl_mulai_efektif" id="tgl_mulai_efektif" required>
                </div>
                <div class="form-group">
                  <label for="aktif">Tanggal Akhir Efektif :</label>
                  <input type="date" class="form-control" name="tgl_akhir_efektif" id="tgl_akhir_efektif" required>
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