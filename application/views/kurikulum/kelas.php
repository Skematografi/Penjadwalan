<div class="wrapper">
  <?php $this->load->view('layouts/sidebar'); ?>
	<div id="content">
    <?php $this->load->view('layouts/full_screen'); ?>
    <div class="container pt-4 mt-5">
      <p class="text-center" style="font-size: 20pt;">Master Kelas Kuliah</p>
      <?php echo $this->session->flashdata('message'); ?>
      <!-- DataTables Example -->
      <div class="card">
      <div class="card-header">
        <a class="btn btn-info mb-1" href="<?php echo base_url(); ?>Kelas_kuliah/tambah">Tambah</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped" id="dataTable">
            <thead class="text-white text-center bg-success">
                <tr>
                  <th>ID Kelas</th>
                  <th>ID SMS</th>
                  <th>ID semester</th>
                  <th>ID Mata Kuliah</th>
                  <th>Nama Kelas</th>
                  <th>SKS</th>
                  <th>Tatap Muka</th>
                  <th>Praktikum</th>
                  <th>Praktikum Lapangan</th>
                  <th>Simulasi</th>
                  <th>Bahasan Case</th>
                  <th>Tgl Mulai Koas</th>
                  <th>Tgl Akhir Koas</th>
                  <th>ID MoU</th>
                  <th>Selenggara PDITT</th>
                  <th>Kuota</th>
                  <th>Pengguna PDITT</th>
                  <th>ID Kelas PDITT</th>
                  <th>Kelola</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($kelas as $row): 
                $id = $row['id_kls']; ?>
              <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $row['id_sms']; ?></td>
                <td><?php echo $row['id_smt']; ?></td>
                <td><?php echo $row['id_mk']; ?></td>
                <td><?php echo $row['nm_kls']; ?></td>
                <td><?php echo $row['sks_mk']; ?></td>
                <td><?php echo $row['sks_tm']; ?></td>
                <td><?php echo $row['sks_prak']; ?></td>
                <td><?php echo $row['sks_prak_lap']; ?></td>
                <td><?php echo $row['sks_sim']; ?></td>
                <td><?php echo $row['bahasan_case']; ?></td>
                <td><?php echo $row['tgl_mulai_koas']; ?></td>
                <td><?php echo $row['tgl_selesai_koas']; ?></td>
                <td><?php echo $row['id_mou']; ?></td>
                <td><?php echo $row['a_selenggara_pditt']; ?></td>
                <td><?php echo $row['kuota_pditt']; ?></td>
                <td><?php echo $row['a_pengguna_pditt']; ?></td>
                <td><?php echo $row['id_kls_pditt']; ?></td>
                <td class="text-center">
                  <?php echo anchor('Kelas_kuliah/edit_kls/'.$id, "<button class='btn btn-primary'><i class='far fa-edit'></i></button>");
                  ?>
                  <?php echo anchor('Kelas_kuliah/hapus_kls/'.$id, "<button class='btn btn-danger'><i class='far fa-trash-alt'></i></button>");
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