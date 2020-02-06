<div class="wrapper">
    <?php $this->load->view('layouts/sidebar'); ?>
	<div id="content">
        <?php $this->load->view('layouts/full_screen'); ?>
        <div class="container">
			<div class="card-deck">
			  	<div class="card">
				    <i class="fas fa-users text-right pt-3 pr-3" style="font-size:70px; color:gray;"></i>
				    <div class="card-body">
				      <h4 class="card-title"><?= $mhs; ?></h4>
				      <p>Jumlah Mahasiswa</p>
				      <a href="#" class="btn btn-primary">Lihat Detail</a>
			    	</div>
			  	</div>
			  	<div class="card">
				    <i class="fas fa-graduation-cap text-right pt-3 pr-3" style="font-size:70px; color:gray;"></i>
				    <div class="card-body">
				      <h4 class="card-title"><?= $dosen; ?></h4>
				      <p>Jumlah Dosen</p>
				      <a href="#" class="btn btn-primary">Lihat Detail</a>
			    	</div>
			  	</div>
			  	<div class="card">
				    <i class="fa fa-book text-right pt-3 pr-3" style="font-size:70px; color:gray;"></i>
				    <div class="card-body">
				      <h4 class="card-title"><?= $matkul; ?></h4>
				      <p>Jumlah Mata Kuliah</p>
				      <a href="<?php echo base_url();?>Mata_kuliah" class="btn btn-primary">Lihat Detail</a>
			    	</div>
			  	</div>
			  	<div class="card">
				    <i class="fa fa-university text-right pt-3 pr-3" style="font-size:70px; color:gray;"></i>
				    <div class="card-body">
				      <h4 class="card-title"><?= $ruang; ?></h4>
				      <p>Jumlah Ruangan</p>
				      <a href="#" class="btn btn-primary">Lihat Detail</a>
			    	</div>
			  	</div>
			</div>
    	</div>
	</div>
</div>