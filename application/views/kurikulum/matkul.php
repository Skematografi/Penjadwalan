<div class="wrapper">
  <?php $this->load->view('layouts/sidebar'); ?>
	<div id="content">
    <?php $this->load->view('layouts/full_screen'); ?>
    <div class="container pt-4 mt-5">
      <p class="text-center" style="font-size: 20pt;">Master Mata Kuliah</p>
      <?php echo $this->session->flashdata('message'); ?>
      <!-- DataTables Example -->
      <div class="card">
      <div class="card-header">
        <a class="btn btn-info mb-1" href="<?php echo base_url(); ?>Mata_kuliah/tambah">Tambah</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped" id="dataTable">
            <thead class="text-white text-center bg-success">
                <tr>
                  <th>ID MK</th>
                  <th>ID SMS</th>
                  <th>ID Jenjang</th>
                  <th>Kode</th>
                  <th>Nama</th>
                  <th>Jenis</th>
                  <th>Kelompok</th>
                  <th>SKS</th>
                  <th>Tatap Muka</th>
                  <th>Praktikum</th>
                  <th>Praktikum Lapangan</th>
                  <th>Simulasi</th>
                  <th>Metode</th>
                  <th>SAP</th>
                  <th>Silabus</th>
                  <th>Bahan Ajar</th>
                  <th>Acara</th>
                  <th>Diktat</th>
                  <th>Tgl Mulai</th>
                  <th>Tgl Akhir</th>
                  <th>Kelola</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($matkul as $row): 
                $id = $row['id_mk']; ?>
              <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $row['id_sms']; ?></td>
                <td><?php echo $row['id_jenj_didik']; ?></td>
                <td><?php echo $row['kode_mk']; ?></td>
                <td><?php echo $row['nm_mk']; ?></td>
                <td><?php echo $row['jns_mk']; ?></td>
                <td><?php echo $row['kel_mk']; ?></td>
                <td><?php echo $row['sks_mk']; ?></td>
                <td><?php echo $row['sks_tm']; ?></td>
                <td><?php echo $row['sks_prak']; ?></td>
                <td><?php echo $row['sks_prak_lap']; ?></td>
                <td><?php echo $row['sks_sim']; ?></td>
                <td><?php echo $row['metode_pelaksanaan_kuliah']; ?></td>
                <td><?php echo $row['a_sap']; ?></td>
                <td><?php echo $row['a_silabus']; ?></td>
                <td><?php echo $row['a_bahan_ajar']; ?></td>
                <td><?php echo $row['acara_prak']; ?></td>
                <td><?php echo $row['a_diktat']; ?></td>
                <td><?php echo $row['tgl_mulai_efektif']; ?></td>
                <td><?php echo $row['tgl_akhir_efektif']; ?></td>
                <td class="text-center">
                  <?php echo anchor('Mata_kuliah/edit_mk/'.$id, "<button class='btn btn-primary'><i class='far fa-edit'></i></button>");
                  ?>
                  <?php echo anchor('Mata_kuliah/hapus_mk/'.$id, "<button class='btn btn-danger'><i class='far fa-trash-alt'></i></button>");
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
</div>