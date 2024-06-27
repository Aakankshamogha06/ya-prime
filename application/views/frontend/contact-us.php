<!-- Banner -->
<section class="contact_banner breadcrumb-banner ">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="contact_content text-center">
					<h1 class="text-primary">Contact Us</h1>
					<p class="text-white">
						YaPrime, a brand of Ya Group Limited, is a forex and CFD liquidity solutions provider focused on institutional clients.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="contact-content-section">
	<div class="container">
		<div class="row g-4 align-items-center">
			<div class="col-md-4 order-xs-2">
				<h4 class="text-primary">Connect with us</h4>
				<div class="address">
					<p class="text-white">
						<i class="fa-solid fa-location-dot"></i>
						Nassima Tower - 701 Sheikh Zayed Rd - Trade Centre - Trade Centre 1 - Dubai
					</p>

					<p class="text-white"><i class="fa-solid fa-location-dot"></i> C/o Legacy Capital Co. Ltd., Level-2, Suite 201, The Catalyst, 40 Silicon Avenue, Cybercity, Ebene – 72201, Mauritius</p>
					<p class="text-white">
						<i class="fa-solid fa-phone"></i>
						+357 22030234
					</p>
					<p class="text-white">
						<i class="fa-solid fa-envelope"></i>
						info@yaprime.com
					</p>
					<div class="social-media-icons">
						<h4 class="text-primary">Follow us</h4>
						<a href="https://www.facebook.com/yaprimeofficial/"> <i class="fa-brands fa-facebook"></i></a>
						<a href="https://twitter.com/YaPrimeofficial"><i class="fa-brands fa-x-twitter"></i></a>
						<a href="https://www.linkedin.com/company/yaprime"> <i class="fa-brands fa-linkedin"></i></a>
						<a href="https://www.instagram.com/officialyaprime/"> <i class="fa-brands fa-instagram"></i></a>
						<!-- <a href="#"> <i class="fa-brands fa-pinterest"></i></a>
			          	<a href="#"> <i class="fa-brands fa-youtube"></i></a> -->
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-7 order-xs-1">
				<div class="contact-form">
					<h2 class="mb-2 text-primary">Talk to us!</h2>
					<p class="text-white">Get your exclusive invite to speak with our team of Forex experts!</p>
					<form method="POST" action="<?= base_url('contact_us/contact_us_submit_data'); ?>" enctype="multipart/form-data" class="form-group mt-3 mt-sm-4 mb-0">
						<div class="row">
							<div class="col-6 mb-3">
								<input class="form-control form-item" type="text" name="name" placeholder="Name" required>
							</div>
							<div class="col-6 mb-3">
								<input class="form-control form-item" type="email" name="email" placeholder="Email" required>
							</div>
							<div class="col-lg-6 mb-3">
								<input type="text" placeholder="Enter Contact Number" name="phone_number" id="phone_number" class="form-control" maxlength="10">
							</div>

							<script>
								document.getElementById('phone_number').addEventListener('input', function(e) {
									this.value = this.value.replace(/[^0-9]/g, '');
								});
							</script>

							<div class="col-6 mb-3">
								<input class="form-control form-item" name="location" type="text" placeholder="Location" required>
							</div>
							<div class="col-lg-6">
								<div class="formgroup">
									<img src="<?= $captcha['image']; ?>" class="capt mb-2" alt="CAPTCHA Image">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="formgroup">
									<input type="text" name="captcha" class="form-control" id="captcha" placeholder="CAPTCHA" required>
								</div>
							</div>
							<div class="col-12 mb-3">
								<textarea class="form-control form-item" name="message" placeholder="Message" required></textarea>
							</div>
							<div class="col-12">
								<button class="btn-4 mt-3" name="submit">Submit Now</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="contact_map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3743.417698886318!2d57.49261647474626!3d-20.241504448083294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217c5b485e823a99%3A0x664d7713ca9d6a73!2sThe%20Catalyst!5e0!3m2!1sen!2sin!4v1718773157873!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
