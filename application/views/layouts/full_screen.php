<!-- Navbar  -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn btn-success">
            <i class="fas fa-desktop pl-2 pr-2"></i>
            <span> Full Screen</span>
        </button>
        <span class="navbar-text">
            <?php echo $this->session->userdata('user'); ?>
        </span>
        <!-- <img src="<?= base_url(); ?>assets/image/admin.jpg" class="rounded-circle" alt="Card image" style="width:5%"> -->
    </div>
</nav>