<!DOCTYPE html>
<html lang="en">
  <head>
  <meta
      name="description"
      content="Give wings to your ideas"
    />
    <link href="<?php echo$baseurl;?>assets/images/favicon/favicon.png" rel="icon" />
    <title>Ayennas Techteam - IT Solutions & Services </title>

<?php $link="contact"; include('menu.php'); ?>
   <!-- ========================
       page title 
    =========================== -->
    <section
        class="page-title page-title-layout12 bg-overlay bg-overlay-gradient bg-parallax text-center"
      >
        <div class="bg-img">
          <img src="assets/images/page-titles/contact.jpg" alt="background" />
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="pagetitle__heading">Contact</h1>
              <nav>
                <ol class="breadcrumb justify-content-center mb-0">
                  <li class="breadcrumb-item"><a href="<?php echo$baseurl ?>">Home</a></li>
                  <li class="breadcrumb-item">
                    <a href="#">Contact</a>
                  </li>
                
                </ol>
              </nav>
            </div>
            <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /.page-title -->
      <!-- ========================= 
            Google Map
    =========================  -->
        <!-- <section class="google-map py-0">
        <div id="map" style="height: 500px"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.719986700374!2d80.07498581482152!3d12.925710090886003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52f52992aedb13%3A0x4b179f407dab8c7d!2sVelozity%20Global%20Solutions%20India%20Private%20Limited!5e0!3m2!1sen!2sin!4v1642962842880!5m2!1sen!2sin" width="2000" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
        <script src="assets/js/google-map.js"></script>
        
   <script
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWJ4KBE3HOgunq1mUpDwtH3ZoNWNJWljA&callback=initMap"
          async
          defer
        ></script> -->
        <!-- CLICK HERE (https://developers.google.com/maps/documentation/embed/get-api-key) TO  LERAN MORE ABOUT GOOGLE MAPS API KEY </section> -->
      <section class="contact-layout1 pt-0 mt--100">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="contact-panel d-flex flex-wrap">
                <div class="contact-panel__info">
                  <div class="bg-img">
                    <img src="assets/images/backgrounds/3.jpg" alt="banner" />
                  </div>
                
                    <div class="contact-block">
                    <h5 class="contact-block__title">Our Location-Nigeria</h5>
                    <ul class="contact-block__list list-unstyled">
                      <li>
                      Lagos Nigeria-105102              </li>
                    </ul>
                  </div>
                  <!-- /.contact-panel__info__block -->
                  <div class="contact-block">
                    <h5 class="contact-block__title">Quick Contact</h5>
                    <ul class="contact-block__list list-unstyled">
                      <li>
                        <a href="mailto:ayennas2019@gmail.com"></a>ayennas2019@gmail.com                     </li>
                     
                    </ul>
                  </div>
                  <!-- /.contact-panel__info__block -->
                  <div class="contact-block">
                    <h5 class="contact-block__title">Opening Hours</h5>
                    <ul class="contact-block__list list-unstyled">
                      <li>Monday - Friday</li>
                      <li>09:00 AM - 06:00 PM</li>
                    </ul>
                  </div>
                  <!-- /.contact-panel__info__block -->
                  <p class="color-white mb-20">
                    If you have any questions or need help, feel free to contact
                    with our team.
                  </p>
                  <a href="https://wa.me/+2347039740318?text=Hello" class="phone-number">
                    <i class="fa fa-whatsapp"></i><span> +2347039740318</span>
        </a>             

    
                </div>
                <form
                  class="contact-panel__form"
                  id="contact-form"
                >
                
                  <div class="row">
                    <div class="col-sm-12">
                      <h4 class="contact-panel__title">Get In Touch</h4>
                      <p class="contact-panel__desc mb-20">
                        Our deep pool of certified engineers and IT staff are
                        ready to help you to keep your IT business safe & ensure
                        high availability.
                      </p>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Name"
                          id="name"
                          name="contact-name"
                          required
                        />
                      </div>
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input
                          type="email"
                          class="form-control"
                          placeholder="Email"
                          id="email"
                          name="contact-email"
                          required
                        />
                      </div>
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Phone"
                          id="phone_no"
                          name="contact-phone"
                          required
                        />
                      </div>
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Website (optional)"
                          id="subject"
                          name="contact-website"
                        />
                      </div>
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-12">
                      <div class="form-group">
                        <textarea
                          class="form-control"
                          placeholder="Describe your inquirey!"
                          id="message"
                          name="contact-message"
                        ></textarea>
                      </div>
                      <button
                      id="submit-btn"
                        type="submit"
                        class="btn btn__primary btn__icon btn__xhight mt-10"
                      >
                        <span>Submit Request</span>
                        <i class="icon-arrow-right"></i>
                      </button>
                      <div class="contact-result"></div>
                    </div>
                    <!-- /.col-lg-12 -->
                  </div>
                  <!-- /.row -->
                </form>
              </div>
            </div>
            <!-- /.col-lg-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /.contact layout 1 -->

      <!-- ==========================
       Contact Info
    ============================ -->
      
      <!-- /.Contact Info -->




<?php include('footer.php'); ?>
  </body>
</html>
