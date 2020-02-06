<div class="wrapper">
    <?php $this->load->view('layouts/sidebar'); ?>
	<div id="content">
        <?php $this->load->view('layouts/full_screen'); ?>
        <div class="container">
        	<h2 class="pl-2">Profil</h2>
        	<?php echo $this->session->flashdata('message'); ?>
		  	<div class="card" style="width:400px">
			    <img class="card-img-top mx-auto pt-3" src="<?php echo base_url();?>assets/image/admin.jpg" alt="Card image" style="width:95%">
			    <div class="card-body">
					<?php foreach($profil as $row): ?>
			          <form action="<?php echo site_url(); ?>Profil/update" method="post" autocomplete="off">
			            <div class="row">
			              <div class="col">
			                <div class="form-group">
			                  <label for="username">Username :</label>
			                  <input type="text" class="form-control" name="username" id="username" maxlength="15" value="<?php echo $row->user; ?>" required>
			                </div>
			                <div class="form-group">
			                  <label for="email">Email :</label>
			                  <input type="email" class="form-control" name="email" id="email" maxlength="50" value="<?php echo $row->email; ?>" required>
			                </div>
			                <div class="form-group">
			                  <label for="password">Password :</label>
			                  <input type="password" class="form-control" name="password" id="password" value="<?php echo $row->password; ?>" required>
			                </div>
			            
			                <button type="submit" class="btn btn-info btn-block">Update</button>
			              </div>
			            </div>
			          </form>
			        <?php endforeach; ?>
		    	</div>
		  	</div>
    	</div>
	</div>
</div>