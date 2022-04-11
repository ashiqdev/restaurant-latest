<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "Virtual Reality";
	
    require_once("../../inc/header.php"); 
  ?>
  </head>

  <body>
    <div class="main_contant" style="overflow-x: hidden; overflow-y: auto">
      >
      <!--=========================-->
      <!--=        Navbar         =-->
      <!--=========================-->
      <?php 
      
      require_once("../../inc/navbar.php"); 
      ?>

      <!--==========================-->
      <!--=         Banner         =-->
      <!--==========================-->
      <section class="page-banner">
        <div class="container">
          <div class="page-title-wrapper">
            <h1 class="page-title">PLAYSTATION + VR</h1>

            <ul class="bradcurmed">
              <li><a href="/">Hem</a></li>
              <li>Virtual Reality</li>
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
                  <h3 class="sub-title wow pixFadeUp">Playstation VR</h3>
                </div>
                <!-- /.section-title -->

                <p class="description wow pixFadeUp" data-wow-delay="0.2s">
                  Hos oss kan ni nu spela Playstation och VR med era egna spel.
                  Boka era platser och ta med vännerna för en spelkväll där ni
                  har hela vårt eventrum för er själva.<br /><br />
                  Bokningsförfrågan går att göra på
                  <span style="font-weight: bold">031 - 19 19 19 </span>
                  eller <span style="font-weight: bold;">Info@NordicSportsbar.se </span>
                </p>
              </div>
              <!-- /.about-content -->
            </div>
            <!-- /.col-lg-7 -->

            <div class="col-lg-5">
              <div class="about-thumb wow pixFadeRight" data-wow-delay="0.2s">
                <img
                  style="height: auto"
                  src="/bilder/play.jpg"
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
