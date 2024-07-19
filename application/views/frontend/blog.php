

<section class="blog_banner breadcrumb-banner" style="background-image: url(public/web/images/banner/blog.png);">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<div class="banner_content text-left">
					<h4 class="text-primary">
						Blogs
					</h4>
					<h1 class="text-white about-heading">
						Learn how to think better by taking notes
					</h1>
					<p class="text-white">
						YaPrime blogs are about financial-related trading topics for in-depth knowledge before trading. We will cover all the topics like stocks, commodities, forex, cryptocurrency, and various aspects of the financial market.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="blog_content">
	<div class="container">
		<div class="row gy-4">
		<?php 
        foreach($blog_detail_view as $row):?>
			<div class="col-lg-4 col-md-6">
				<div class="card blog-card">
					<a href="<?=base_url()?>blog/<?=str_replace(' ','-',strtolower($row->slug));?>">
						<img src="<?=base_url('uploads/').$row->blog_image;?>" class="card-img-top" alt="...">
					</a>
					<div class="card-body blog-content">
		              <a href="<?=base_url()?>blog/<?=str_replace(' ','-',strtolower($row->slug));?>">
		              	<h5 class="card-title">
						  <?=$row->blog_name?>			              </h5>
		              </a>
		              <hr style="border: 1px solid #ccc;">
		            	<div class="meta_blog">
		            		<span>
		            			<i class="fa fa-calendar" aria-hidden="true"></i> <?= date('d-m-Y', strtotime($row->blog_date))?>
			            	</span>
			            	<span>
			            		<i class="fa fa-user" aria-hidden="true"></i>  <?= $row->blog_author?>
			            	</span>
		            	</div>
		            </div>
				</div>
			</div>
			<?php endforeach;?>
		</div>
	</div>
</section>

