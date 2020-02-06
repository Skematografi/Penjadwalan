<div class="container">
  <div class="card col-lg-5 bg-success rounded-me cm">
  	<img src="<?php echo base_url(); ?>assets/image/stmik.png" alt="logo" class="mx-auto">
    <div class="text-center text-white pt-3">
      Aplikasi Penjadwalan
    </div>
    <div class="card-body">
      <?php echo $this->session->flashdata('message'); ?>
      <form action="<?php site_url('Auth'); ?>" method="post" autocomplete="off">
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" id="email" name="email" class="form-control rounded-me" placeholder="Masukan alamat email" autofocus="autofocus" value="<?php echo set_value('Email'); ?>" >
          <?php echo form_error('email','<small class="text-danger pl-3">','</small>'); ?>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="password" id="password" name="password" class="form-control rounded-me" placeholder="Masukan password">
          <?php echo form_error('password','<small class="text-danger pl-3">','</small>'); ?>
          </div>
        </div>
        <button type="submit" class="btn btn-dark btn-block rounded-me">Login</button>
      </form>
    </div>
  </div>
</div>
