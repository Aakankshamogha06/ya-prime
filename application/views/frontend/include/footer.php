<section class="footer-section px-0">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4">
        <img src="<?=base_url()?>public/web/images/logo-prime.svg" class='footer-logo' height="80px" />

        <p>YaPrime is a group of expert broker consultants here to guide you and help you in setting up your
          own Forex business. Since its advent, YaPrime has advanced with the sole goal in mind – to
          assist other Forex Brokers in realizing their dream and making you the expert that your heart
          always yearned to be.</p>
        <div class="social-media-icon">
          <a href="#"> <i class="fa-brands fa-facebook"></i></a>
          <a href="#"><i class="fa-brands fa-x-twitter"></i></i></a>
          <a href="#"> <i class="fa-brands fa-linkedin"></i></a>
          <a href="#"> <i class="fa-brands fa-instagram"></i></a>
          <a href="#"> <i class="fa-brands fa-pinterest"></i></a>
          <a href="#"> <i class="fa-brands fa-youtube"></i></a>
        </div>
      </div>
      <div class="col-md-2">
        <div class="col-width">
          <h6>About company</h6>
          <ul>
            <li>
              <a href="<?=base_url()?>about-us">
                About us
              </a>
            </li>
            <li>
              <a href="<?=base_url()?>why-choose-us">
                Why choose us
              </a>
            </li>
            <li>
              <a href="<?=base_url()?>blog">
                Our Blog
              </a>
            </li>
            <li>
              <a href="<?=base_url()?>careers">
                Careers
              </a>
            </li>
            <!-- <li>
              <a href="<?=base_url()?>our-team">
                Meet our Team
              </a>
            </li> -->
          </ul>
        </div>
      </div>
      <div class="col-md-2">
        <div class="col-width">
          <h6>Useful Link</h6>
          <ul>
            <li>
              <a href="<?=base_url()?>broker-setup">
                Broker Setup
              </a>
            </li>
            <li>
              <a href="<?=base_url()?>liquidity">
                Liquidity Solutions
              </a>
            </li>
            <li>
              <a href="i<?=base_url()?>nstitutional-clients">
                Institutional Clients
              </a>
            </li>
            <li>
              <a href="<?=base_url()?>metatrader-support">
                Metatrader Support
              </a>
            </li>
            <!-- <li>
              <a href="<?=base_url()?>portfolio">
                Portfolio
              </a>
            </li> -->
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <h4 class="text-primary">Connect with us</h4>
        <div class="address">


          <p><i class="fa-solid fa-location-dot"></i> Suite 305, Griffith Corporate Centre, Kingstown P.O. Box
            1510, Beachmont Kingstown St. Vincent and the Grenadines</p>

          <p><i class="fa-solid fa-phone"></i> +357 22030234</p>

          <p> <i class="fa-solid fa-envelope"></i> support@yaprime.com</p>
        </div>
      </div>

    </div>

    <hr class="footer_hr" />
    <p>YaPrime is the industry leader in the Forex and CFD markets. registered in Vanuata. We provide certain services
      like Forex White Label, Company formation, License service under the company name. Registered office @ Law
      Partners House, Kumul Highway, Port Vila, Vanuatu Postal Address Po Box 212, Port Vila, Vanuatu. For any
      queries, Please contact us at info@yaprime.com</p>
    <p><b>Disclaimer:</b> All product, logo and company names are trademarks™ or registered® trademarks of their
      respective holders.Use of them is not intended to violate any company norms.</p>
    <p><b>Copyrights:</b> YaPrime is a technology and service provider. YaPrime is neither a broker nor a liquidity
      provider and does not hold client funds Brand logos mentioned on this site could be/are owned by the respective
      companies and not by YaPrime. The use of a company's brand logo does not represent an endorsement of YaPrime by
      the company, nor an endorsement of the company by YaPrime, nor does it necessarily imply the existence of any
      contractual relationship Brand logos mentioned on this site could be/are owned by the respective companies and
      not by YaPrime. The use of a company's brand logo does not represent an endorsement of YaPrime by the company,
      nor an endorsement of the company by YaPrime, nor does it necessarily imply the existence of any contractual
      relationship.All individuals/ institutions seeking to sign up for a White Label are subject to YaPrime
      verification process, which includes a “Know Your Customer” (KYC) documentation to be furnished by the
      beneficiary/ approaching client.</p>
    <hr class="footer_hr" />
    <div class="row">
      <div class="col-md-6">
        <div class="copyrights">
          <p class="mb-3">All Rights Reserved © 2016-<?= date('Y') ?> | <a href="<?=base_url()?>">YaPrime</a></p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="copyrights">
          <p><a href="<?=base_url()?>disclaimer">Disclaimer</a> </p>
          <p><a href="<?=base_url()?>terms-conditions">Terms & Conditions</a></p>
          <p><a href="<?=base_url()?>privacy-policy">Privacy Policy</a></p>
          <p><a href="<?=base_url()?>refund-cancellation">Refund & Cancellation</a></p>
        </div>
      </div>
    </div>

  </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Your Prime Account </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row g-4">
            <div class="col-lg-6 align-self-center">
              <img src="<?=base_url()?>public/web/images/requst-quote.png" class="img-fluid">
            </div>
            <div class="col-lg-6 pop_up_form_class">
            <form method="POST" action="<?= base_url('admin/request_demo/request_demo_submit_data'); ?>" enctype="multipart/form-data" >
                <div class="row g-4 form-group mb-3">
                  <div class="col-lg-6 col-md-12">
                    <label for="formGroupExampleInput">Full Name</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" required="" name="name" data-gtm-form-interact-field-id="1">
                  </div>
                  <div class=" col-lg-6  col-md-12">
                    <label for="formGroupExampleInput2">Email Address</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email Address" required="" name="email" data-gtm-form-interact-field-id="2">
                  </div>
                </div>
                <div class="row g-4 form-group mb-3">
                  <div class="col-lg-6  col-md-12">
                    <label for="inputState">Contact Number</label>
                    <input type="text" placeholder="Enter Contact Number" name="contact_number" class="form-control">
                  </div>
                  <div class=" col-lg-6 col-md-12">
                    <label for="inputState">Your Country</label>
                    <input type="text" placeholder="Your Country" name="country" class="form-control">
                  </div>
                </div>
                <div class="row g-4 form-group mb-3">
                  <div class="col-md-12">
                    <label for="inputState">Are You A ?</label>
                    <select class="form-control" id="areyoua" name="areyoua" required="">
                      <option value="">Select</option>
                      <option value="Start Up">Start Up</option>
                      <option value="Introducing Broker">Introducing Broker</option>
                      <option value="Existing Broker">Existing Broker</option>
                      <option value="Others">Others</option>
                    </select>
                  </div>
                </div>
                <div class="row g-4 form-group mb-3">
                  <div class="col-md-12">
                    <label for="inputState">What are the product or services you looking for?</label>
                    <select class="form-control" id="products" name="products" required="">
                      <option disabled="" value="" selected="">Select Products</option>
                      <option value="Traders Room">Traders Room</option>
                      <option value="Forex Brokerage">Forex Brokerage</option>
                      <option value="MT5 White Label">MT5 White Label</option>
                      <option value="MT5 ">MT5 </option>
                      <option value="Forex Websites Broker">Forex Websites Broker</option>
                      <option value="Forex CRM">Forex CRM</option>
                      <option value="Forex Liquidity">Forex Liquidity</option>
                      <option value="MAM">MAM</option>
                      <option value="MAM/PAMM Support">MAM/PAMM Support</option>
                      <option value="PAMM">PAMM</option>
                      <option value="Merchant Services">Merchant Services</option>
                      <option value="Deposits And Withdrawals With Bitcoin-ETH-USDT">Deposits And Withdrawals
                        With
                        Bitcoin-ETH-USDT</option>
                      <option value="IB &amp; Affiliate Area">IB &amp; Affiliate Area</option>
                      <option value="All The Above">All The Above</option>
                    </select>
                  </div>
                </div>
                <div class="row g-4 form-group mb-3">
                  <div class="col-md-12">
                    <label for="inputState">Do you need a quote ?</label>
                    <select class="form-control" id="qoute" name="qoute" required="">
                      <option value="">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                  </div>
                </div>
                <div class="form-group mb-3">
                  <label for="exampleFormControlTextarea1">Give me a brief about your requirement</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" cols="50" placeholder="Message" name="message"></textarea>
                </div>
                <button type="submit" name="submit" class="unique_anchor_one btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="<?=base_url()?>public/web/vendor/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>public/web/vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- <script src="./vendor/font-awesome/js/all.min.js"></script> -->
<script src="<?=base_url()?>public/web/vendor/owl-carousel/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?=base_url()?>public/web/js/youtube-popup.js"></script>
<script src="<?=base_url()?>public/web/js/app.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("StickyHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
<script type="text/javascript">
  (function () {
  "use strict";

  var carousels = function () {
    $(".owl-carousel1").owlCarousel({
      loop: true,
      center: true,
      margin: 0,
      responsiveClass: true,
      nav: false,
      autoplay: true,
      autoplayTimeout:3000,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        680: {
          items: 2,
          nav: false,
          loop: false
        },
        1000: {
          items: 3,
          nav: true
        }
      }
    });
  };

  (function ($) {
    carousels();
  })(jQuery);
})();
</script>

<script type="text/javascript">
  (function () {
  "use strict";

  var carousels = function () {
    $(".owl-carousel11").owlCarousel({
      loop: true,
      margin: 30,
      responsiveClass: true,
      nav: false,
      autoplay: true,
      autoplayTimeout:3000,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        680: {
          items: 2,
          nav: false,
          loop: false
        },
        1000: {
          items: 2,
          nav: false
        }
      }
    });
  };

  (function ($) {
    carousels();
  })(jQuery);
})();
</script>

<script type="text/javascript">
  (function () {
  "use strict";

  var carousels = function () {
    $(".owl-carousel111").owlCarousel({
      loop: true,
      margin: 30,
      responsiveClass: true,
      nav: false,
      autoplay: true,
      autoplayTimeout:3000,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        680: {
          items: 2,
          nav: false,
          loop: false
        },
        1000: {
          items: 4,
          nav: false
        }
      }
    });
  };

  (function ($) {
    carousels();
  })(jQuery);
})();
</script>

<script>
    // mobile menu dropdows
    $(".moblie-dropdwon").on("click", function () {
        var current_dropdown = $(this).next(".dropdown-mb-menu");
        $(".dropdown-mb-menu").not(current_dropdown).slideUp();
        current_dropdown.slideToggle();
        return false;
    });
    
</script>
</body>

</html>