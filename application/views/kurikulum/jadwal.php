<div class="wrapper">
    <?php $this->load->view('layouts/sidebar'); ?>
	<div id="content">
        <?php $this->load->view('layouts/full_screen'); ?>
        <div class="container">
        	<div class="text-center">
	        	<h2>Jadwal Kuliah</h2>
	        	<p>STMIK Insan Pembangunan</p>
	        </div>
        	<?php echo $this->session->flashdata('message'); ?>
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo base_url(); ?>Report" method="post" autocomplete="off">
                         <div class="row">
                            <div class="col">
                              <div class="form-group">
                                    <label class="mr-3">Program Studi :</label>
                                    <select class="custom-select mr-3" name="prodi" id="prodi" required>
                                      <option value="" selected disabled>--Pilihan--</option>
                                      <option value="Sistem Informasi">Sistem Informasi</option>
                                      <option value="Akuntansi">Sistem Informasi Akuntansi</option>
                                    </select>
                                </div>
	                            <div class="form-group">
	                                <label class="mr-3">Dari :</label>
	                                <input type="number" class="form-control number" min="2019" maxlength="4" name="dr_thn" id="dr_thn" placeholder="--2019--" required>
	                            </div>
	                            <div class="form-group">
	                                <label class="mr-3">Sampai :</label>
	                                <input type="number" class="form-control number" min="2020" maxlength="4" name="sm_thn" id="sm_thn" placeholder="--2020--" required>
	                            </div>
	                        </div>
	                        <div class="col">
	                            <div class="form-group">
                                    <label class="mr-3">Kelas :</label>
                                    <select class="custom-select mr-3" name="kls" id="kls" required>
                                      <option value="" selected disabled>--Pilihan--</option>
                                      <option value="Pagi">Pagi</option>
                                      <option value="Malam">Malam</option>
                                    </select>
                                </div>
	                            <div class="form-group">
                                    <label class="mr-3">Semester :</label>
                                    <select class="custom-select mr-3" name="smt" id="smt" required>
                                      <option value="" selected disabled>--Pilihan--</option>
                                      <option value="Ganjil">Ganjil</option>
                                      <option value="Genap">Genap</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                  <label class="text-white">_</label>
                                	<button type="submit" class="btn btn-warning form-control">Export PDF <i class="fa fa-file-pdf" style="color:red;"></i></button>
                                </div>
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
                              </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($jadwal as $row): 
                              $id = $row->id_jadwal; ?>
                            <tr>
                              <td><?php echo $id ?></td>
                              <td><?php echo $row->kelas; ?></td>
                              <td><?php echo $row->kode_mk; ?></td>
                              <td><?php echo $row->dosen; ?></td>
                              <td><?php echo $row->ruangan; ?></td>
                              <td><?php echo $row->hari; ?></td>
                              <td><?php echo $row->jam; ?></td>
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


