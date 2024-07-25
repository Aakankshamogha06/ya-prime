<?php foreach($blog_detail_view as $row): ?>
<section class="breadcrumb-banner "style="background-color: #ccc; " >
    <div class="container" >
        <div class="row">
            <div class="col-md-12">
                <div class="banner_content text-center">
                    <h4 class="text-primary">
                        Discover the YaPrime
                    </h4>
					<h2 class="main-heading text-white"><?=$row->blog_name?></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-detail-section" style="color: white;">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-content">
                    <h2 class="main-heading text-white"><?=$row->blog_name?></h2>
                    <p><?=$row->blog_desc?></p><br>
                    <img src="<?=base_url('uploads/').$row->blog_image;?>" class="img-fluid mb-3"/><br>
                    <br><?=$row->long_desc?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sidebar-sticky">
                    <div class="container">
                        <div class="row gy-4">
                            <?php foreach ($blogs as $blog): ?>
                                <div class="col-md-12">
                                    <div class="card blog-card">
                                        <a href="<?=base_url()?>blog/<?=str_replace(' ','-',strtolower($blog->keywords));?>">
                                            <img src="<?= base_url('uploads/') . $blog->blog_image; ?>" class="card-img-top" alt="...">
                                        </a>
                                        <div class="card-body blog-content">
                                            <a href="<?=base_url()?>blog/<?=str_replace(' ','-',strtolower($blog->keywords));?>">
                                                <h5 class="card-title"><?= $blog->blog_name ?></h5>
                                            </a>    
                                            <hr style="border: 1px solid #ccc;">
                                            <div class="meta_blog">
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i> <?= date('d-m-Y', strtotime($blog->blog_date))?>
                                                </span>
                                                <span>
                                                    <i class="fa fa-user" aria-hidden="true"></i>  <?= $blog->blog_author?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endforeach?>
