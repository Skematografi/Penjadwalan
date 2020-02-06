<div class="wrapper">
  <?php $this->load->view('layouts/sidebar'); ?>
	<div id="content">
    <?php $this->load->view('layouts/full_screen'); ?>
    <div class="container pt-4 mt-5">
      <p class="text-center" style="font-size: 20pt;">Master Pengajar</p>
      <?php echo $this->session->flashdata('message'); ?>
      <!-- DataTables Example -->
      <div class="card">
      <div class="card-header">
        <a class="btn btn-info mb-1" href="<?php echo base_url(); ?>Pengajar/tambah">Tambah</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped" id="dataTable">
            <thead class="text-white text-center bg-success">
                <tr>
                  <th>ID Ajar</th>
                  <th>ID Registrasi PTK</th>
                  <th>ID Substansi</th>
                  <th>ID Kelas</th>
                  <th>Subs. Total</th>
                  <th>Subs. Tatap Muka</th>
                  <th>Subs. Praktikum</th>
                  <th>Subs. Praktikum Lapangan</th>
                  <th>Subs. Simulasi</th>
                  <th>Rencana Tatap Muka</th>
                  <th>Realisasi Tatap Muka</th>
                  <th>ID Jenis Evaluasi</th>
                  <th>Kelola</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($pengajar as $row): 
                $id = $row['id_ajar']; ?>
              <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $row['id_reg_ptk']; ?></td>
                <td><?php echo $row['id_subst']; ?></td>
                <td><?php echo $row['id_kls']; ?></td>
                <td><?php echo $row['sks_subst_tot']; ?></td>
                <td><?php echo $row['sks_tm_subst']; ?></td>
                <td><?php echo $row['sks_prak_subst']; ?></td>
                <td><?php echo $row['sks_prak_lap_subst']; ?></td>
                <td><?php echo $row['sks_sim_subst']; ?></td>
                <td><?php echo $row['jml_tm_renc']; ?></td>
                <td><?php echo $row['jml_tm_real']; ?></td>
                <td><?php echo $row['id_jns_eval']; ?></td>
                <td class="text-center">
                  <?php echo anchor('Pengajar/edit_pengajar/'.$id, "<button class='btn btn-primary'><i class='far fa-edit'></i></button>");
                  ?>
                  <?php echo anchor('Pengajar/hapus_pengajar/'.$id, "<button class='btn btn-danger'><i class='far fa-trash-alt'></i></button>");
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