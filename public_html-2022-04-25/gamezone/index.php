<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        $headerTitle = "Gamezone";
	
        require_once("../../inc/header.php"); 
     ?>
  </head>
  <body>
    <div class="main_contant general-style">
      <!--=========================-->
      <!--=        Navbar         =-->
      <!--=========================-->
      <?php require_once("../../inc/navbar.php"); ?>

      <!--==========================-->
      <!--=         Banner         =-->
      <!--==========================-->
      <section class="page-banner">
        <div class="container">
          <div class="page-title-wrapper">
            <h1 class="page-title">GAMEZONE</h1>

            <ul class="bradcurmed">
              <li><a href="/">Hem</a></li>
              <li>GAMEZONE</li>
            </ul>
          </div>
          <!-- /.page-title-wrapper -->
        </div>
        <!-- /.container -->

       
      </section>
      <!-- /.page-banner -->

      <!--=========================-->
      <!--=         About         =-->
      <!--=========================-->
      <section class="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="about-content">
                <div class="section-title">
                  <h3 class="sub-title wow pixFadeUp">Spelavdelning</h3>
                </div>
                <!-- /.section-title -->

                <p class="description wow pixFadeUp" data-wow-delay="0.1s">
				  När du är hos oss kan du närsomhelst hoppa över till spelavdelningen där du hittar bland annat:
                </p>

                <ul class="wow pixFadeUp gamezone-list" data-wow-delay="0.1s">
                  <li>Basket</li>
                  <li>Airhockey</li>
                  <li>Boxboll</li>
                  <li>Sparkboll</li>
                  <li>Gripklo</li>
                </ul>

                <p class="wow pixFadeUp" data-wow-delay="0.1s">
                  Nu har vi även <a href="/vr/">Playstation och VR</a>.
                </p>
              </div>
              <!-- /.about-content -->
            </div>
            <!-- /.col-lg-7 -->

            <div class="col-lg-5">
              <div class="about-thumb wow pixFadeRight" data-wow-delay="0.1s">
                <img
                  class="hauto"
                  src="/bilder/gamezone-tinified.webp"
                  width="1600" height="900"
                  alt="about"
                />
              </div>
              <!-- /.about-thumb -->
            </div>
            <!-- /.col-lg-5 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /.about -->
      <?php require_once("../../inc/footer.php"); ?>
    </div>
  </body>
</html>
