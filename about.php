<?php include('header.php'); ?>

  <!-- Layout -->
  <div class="layout">
    
    <!-- Home -->
    <main class="main main-inner bg-about" data-stellar-background-ratio="1">
      <div class="container">
        <header class="main-header">
            <h2 style="background: #e5bf93; width: fit-content; padding: 20px; margin-bottom: 0px;">think modular</h2>
            <h1 style="background: #000; width: fit-content; padding: 20px;"><span class="text-primary">think modenza</span></h1>
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

    <div class="content">   
    
      <!-- About  -->
      <section id="about" class="about">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12">
              <div class="entry">
                <h2 class="section-title" style="text-align:left;margin-bottom:5%">About <span class="text-primary">Us</span></h2>
                <p class="entry-text">Modenza is a modular component manufacturer for Kitchens, Wardrobes & TV Units. 
                  The Company was established in 2015 with the sole purpose of providing par excellence and leading quality modular products in the market.
                  <br>
                </p>
              </div>
              <div class="entry" style="margin-top:-3%">
                <p class="entry-text">We manufacture innovative, high quality, premium finish and durable modular products.
                  Quality of the final product is of utmost importance. In order to ensure the same we maintain very stringent checks on the raw - material procurement.
                  We pride ourselves on timely delivery, customer satisfaction and hands on after- sales support.<br><br>
                  Till date we have successfully delivered our products to a wide range of clients including our Dealers, Retail projects, Offices & Hospitality Groups.
                </p>      
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
              <img src="img/Laminate.png" 
                    style="position: absolute;
                    transform: rotate3d(1, 0, 3, 15deg);
                    margin-top: -50px;
                    margin-left: -150px;" alt="">
              <img src="img/VNR.png" style="margin-top: 280px; transform: skewX(-9deg); margin-left: 160px;" alt="">
            </div>
          </div>
        </div>
      </section>

      <!-- Services -->
      <section id="services" class="services section">
          <div class="container">
              <div class="section-content" style="margin-top:-8%">
                  <div class="row-services row-base row">
                      <div class="col-base col-service col-sm-6 col-md-7 wow fadeInUp">
                          <div class="service-item">
                                <h2 class="section-title" style="text-align:left;margin-bottom:5%;font-size:32px;margin-left:1%">Manufaturing <span class="text-primary">Competence</span></h2>
                                <br>
                              <p>Modenza has a state-of-the-art manufacturing unit in Lucknow, Uttar Pradesh with a fully mechanized manufacturing process which guarantees precision and accuracy in all its products. </p>
                          </div>

                          <div class="service-item">
                              <p>
                                  This along with our highly skilled workforce ensures that the end product is of supreme quality and impeccable finish.
                                  <br><br> Having a fully mechanized process ensures quicker deliveries and turn- around time to meet our customer’s timelines.
                              </p>
                          </div>
                      </div>
                      <div class="col-base col-service col-sm-6 col-md-5 wow fadeInUp" data-wow-delay="0.3s">
                          <img src="img/backgrounds/manufactbg.jpeg" class="aboutimg" alt="">
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <!-- ///// contact footer ///// -->
      <?php include('mapfooter.php') ?>
      
    </div>
  </div>

<?php include('footer.php'); ?>