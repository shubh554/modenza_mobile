<?php include('header.php'); ?>

  <!-- Layout -->
  <div class="layout">
    
    <!-- Home -->
    <main class="main main-inner bg-about" style = "background: url(img/contact_bg.jpg) 50% 0 no-repeat; background-size: cover;" data-stellar-background-ratio="0.6">
      <div class="container">
        <header class="main-header">
            <h2  style="background: #000; color: #e5bf93; width: fit-content; padding: 20px; margin-bottom: 0px; text-align: center;">Plan | Perform | Grow</h2>
        </header>
      </div>

      <!-- Lines -->
      <div class="page-lines">
        <div class="container">
          <div class="col-line col-xs-4">
            <div class="line"></div>
          </div>
          <div class="col-line col-xs-4">
            <div class="line"></div>
          </div>
          <div class="col-line col-xs-4">
            <div class="line"></div>
            <div class="line"></div>
          </div>
        </div>
      </div>
    </main>

    <!-- form -->
    <div class="container contact-details contact-form">
      <div class="row-base row">
        <div class="col-base col-md-12">
          <form class="js-ajax-form">
            <div class="row-field row">
               <h2 class="section-title" style="text-align:left;margin-bottom:5%">Enquiry <span class="text-primary">Form</span></h2>
                <div class="col-field col-sm-12 col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email"  placeholder="Email">
                </div>
                </div>
                <div class="col-field col-sm-12 col-md-6">
                <div class="form-group">
                    <input type="tel" class="form-control" name="phone" required placeholder="Phone *">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="company" placeholder="Company">
                </div>
                </div>
                <div class="col-field col-sm-12 col-md-12">
                <div class="form-group">
                    <textarea class="form-control" name="message" placeholder="Message"></textarea>
                </div>
                </div>
                <div class="col-message col-field col-sm-12">
                <div class="form-group">
                    <div class="success-message"><i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...</div>
                    <div class="error-message">We're sorry, but something went wrong</div>
                </div>
                </div>
            </div>
            <div class="form-submit text-left"><button type="submit" class="btn btn-shadow-2">Send <i class="icon-next"></i></button></div>
          </form>
        </div>
      </div>
    </div>

    <!-- Contacts Details -->
    <h2 class="section-title" style="text-align:right;margin-bottom:0%;margin-right:10%">Contact <span class="text-primary">Us</span></h2>
    <section class="contact-details" style="margin-top:5%">
        <div class="col-map col-md-7">
          <div id="map" class="gmap col-md-7">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14235.267278468007!2d81.0393001!3d26.8775604!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeb2c82ee411c79f8!2sModenza%20Design%20llp!5e0!3m2!1sen!2sin!4v1632916097037!5m2!1sen!2sin" 
              width="100%" 
              height="540px" 
              allowfullscreen="" 
              loading="lazy"></iframe>
          </div>
        </div>
        <div class="contact-info col-md-5 col-md-offset-7">
          <div class="contact-info-content">
            <!-- <div class="contact-info-title">Contacts</div> -->
            <div class="phone contact-row">
              <i class="fa fa-phone"></i> 
              <div class="contact-body">
                <h4>Phone</h4>
                <div class="phone-row">+91 91613 00003</div>
                 <div class="phone-row">+91 75700 00803</div>
              </div>
            </div>
            <div class="contact-row">
              <i class="fa fa-envelope"></i> 
              <div class="contact-body">
                <h4>Email</h4>
                <div class="contact-content">sales@modenza.in</div>
                <div class="contact-content">info@modenza.in</div>
              </div>
            </div>
            <div class="contact-row">
              <i class="fa fa-map-marker"></i> 
              <div class="contact-body">
                <h4>Address</h4>
                <div class="contact-content">Khasra No. 55, Deva Road, Chinhat, <br>
                  Lucknow 227105, Uttar Pradesh, India</div>
              </div>
            </div>
          </div>
        </div>
      </section>

    
        <!-- ///// contact footer ///// -->
      
    </div>

  </div>

  <!-- Footer -->
<footer id="footer" class="footer">     
    <div class="container">
    <div class="row-base row">
        <div class="col-base text-left-md col-md-4">
        © Modenza 2021. All Rights Reserved.
        </div>
        <div class="text-center-md col-base col-md-4">
        </div>
        <div class="text-right-md col-base col-md-4">
        by Codeedge
        </div>
    </div>
    </div>
</footer>

<?php include('footer.php'); ?>