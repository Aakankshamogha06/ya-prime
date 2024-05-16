<?php
	$cur_tab = $this->uri->segment(2) == '' ? 'dashboard' : $this->uri->segment(2);
	?>
<?php
// Assuming you have access to the session data and user model
$username = $this->session->userdata('username'); // Fetch username from session
$role = $this->session->userdata('role_name'); // Fetch role from session
?>

<div class="col-lg-2">
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-secondary navbar-dark">
            <!-- Navbar Brand with link to admin dashboard -->
            <a href="<?=base_url()?>admin/dashboard" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
            </a>
            <!-- User information section -->
            <div class="d-flex align-items-center ms-4 mb-4">
                <!-- User avatar -->
                <div class="position-relative">
                    <img class="rounded-circle" src="<?=base_url()?>public/admin/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                    <!-- Online indicator -->
                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <!-- User details -->
                <div class="ms-3">
                    <!-- Display fetched username -->
                    <h6 class="mb-0"><?= $username ?></h6>
                    <!-- Display fetched role -->
                    <span><?= $role ?></span>
                </div>
            </div>
            <!-- Navigation links -->
            <div class="navbar-nav w-100">
                <!-- Conditional check for user role -->
                <?php if ($this->session->userdata('role') === '1') : ?>                    <!-- Dashboard link -->
                    <a href="<?=base_url('admin/dashboard');?>" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>DASHBOARD</a>
                    <!-- Users link -->
                    <a href="<?=base_url('admin/users');?>" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>USERS</a>
                    <!-- SEO link -->
                    <a href="<?= base_url('admin/seo/seo_view'); ?>" class="nav-item nav-link"><i class="fa fa-th me-2"></i>SEO</a>
                    <!-- Blog link -->
                    <a href="<?= base_url('admin/blog/blog_view'); ?>" class="nav-item nav-link"><i class="fa fa-th me-2"></i>BLOG</a>
                <!-- End of conditional check -->
                <?php endif; ?>
                <?php if ($this->session->userdata('role') === '2') : ?>                    <!-- Dashboard link -->
                    <a href="<?=base_url('admin/dashboard');?>" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>DASHBOARD</a>
                    <!-- SEO link -->
                    <a href="<?= base_url('admin/seo/seo_view'); ?>" class="nav-item nav-link"><i class="fa fa-th me-2"></i>SEO</a>
                    <!-- Blog link -->
                    <a href="<?= base_url('admin/blog/blog_view'); ?>" class="nav-item nav-link"><i class="fa fa-th me-2"></i>BLOG</a>
                <!-- End of conditional check -->
                <?php endif; ?>
            </div>
        </nav>
    </div>
</div>
