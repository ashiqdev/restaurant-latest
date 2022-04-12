<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "Aktiviteter";
	
    require_once("../../inc/header.php"); 
  ?>
  </head>
  <body>
    <div class="main_contant" style="overflow-x: hidden; overflow-y: auto">
      <!--=========================-->
      <!--=        Navbar         =-->
      <!--=========================-->
      <?php 
      $page="activity";
      require_once("../../inc/navbar.php"); 
      ?>

      <!--==========================-->
      <!--=         Banner         =-->
      <!--==========================-->
      <section class="page-banner">
        <div class="container">
          <div class="page-title-wrapper">
            <h1 class="page-title">Aktiviteter</h1>

            <ul class="bradcurmed">
              <li><a href="/">Hem</a></li>
              <li>Aktiviteter</li>
            </ul>
          </div>
          <!-- /.page-title-wrapper -->
        </div>
        <!-- /.container -->

        
      </section>
      <!-- /.page-banner -->

      <section class="activitys" style="overflow-x: hidden">
        <div class="container">
          <div class="activity-inner">
            <div>
              <div
                class="
                  pixsass-activity-items
                  activity-one
                  column-2
                  port-gutters
                "
              >
                <a href="/aktiviteter/bowling/">
                  <div
                    class="
                      pixsass-activity-item
                      width-large
                      grid-item
                      wow pixFadeRight
                      
                    "
                    style="cursor: pointer"
                  >
                    <div class="pixsass-isotope-grid__img">
                      <img
                        src="/bilder/aktiviteter/bowlingbanor.webp"
                    
                        alt="bowling-lanes"
                      />

                      <div class="activity-info activity-bowling">
                        <h3 class="activity-title">
                          <a href="/aktiviteter/bowling/">BOWLING</a>
                        </h3>
                        <span>Kom och bowla hos oss!</span>
                      </div>
                    </div>
                  </div>
                </a>

                <a 
               
                href="/aktiviteter/shuffleboard/">
                  <div
                    class="
                      pixsass-activity-item
                      width-sm-large
                      grid-item
                      wow pixFadeLeft
                      
                      
                    "
                    style="cursor: pointer"
                  >
                    <div class="pixsass-isotope-grid__img">
                      <img
                        src="/bilder/aktiviteter/shuffleboard.webp"
                        alt="shuffleboard"
                      />

                      <div class="activity-info activity-shuffle">
                        <h3 class="activity-title">
                          <a href="/aktiviteter/shuffleboard/"
                            >SHUFFLEBOARD</a
                          >
                        </h3>
                        <span
                          >Dela upp er i lag och utmana vänner, familj och
                          kollegor!</span
                        >
                      </div>
                    </div>
                  </div>
                </a>

                <a href="/aktiviteter/paket/">
                  <div
                    class="
                      pixsass-activity-item
                      width2
                      grid-item
                      wow pixFadeRight
                   
                    "
                    style="cursor: pointer"
                  >
                    <div class="pixsass-isotope-grid__img">
                      <img
                        src="/bilder/aktiviteter/matbord.webp"
                        alt="paket"
                      />

                      <div class="activity-info activity-package">
                        <h3 class="activity-title">
                          <a href="/aktiviteter/paket/"
                            >Paketerbjudande</a
                          >
                        </h3>
                        <span>Spel, mat och dryck</span>
                      </div>
                    </div>
                  </div>
                </a>

                <a href="/aktiviteter/stora-sallskap/">
                  <div
                    class="
                      pixsass-activity-item
                      width3
                      grid-item
                      wow pixFadeLeft
                     
                    "
                    style="cursor: pointer"
                  >
                    <div class="pixsass-isotope-grid__img">
                      <img
                        src="/bilder/aktiviteter/large-parties.webp"
                        alt="activity thumb"
                      />

                      <div class="activity-info activity-large">
                        <h3 class="activity-title">
                          <a href="/aktiviteter/stora-sallskap/"
                            >Stora Sällskap</a
                          >
                        </h3>
                        <span>Boka för större sällskap!</span>
                      </div>
                    </div>
                  </div>
                </a>
                <a href="/aktiviteter/friskvard/">
                  <div
                    class="
                      pixsass-activity-item
                      width3
                      grid-item
                      wow pixFadeLeft
                     
                    "
                    style="cursor: pointer"
                  >
                    <div class="pixsass-isotope-grid__img">
                      <img
                        src="/bilder/aktiviteter/epassi.png"
                        alt="activity thumb"
                      />

                      <div class="activity-info activity-large">
                        <h3 class="activity-title">
                          <a href="/aktiviteter/friskvard/"
                            >Friskvård</a
                          >
                        </h3>
                        <span>Vi tar emot både Actiway och ePassi!</span>
                      </div>
                    </div>
                  </div>
                </a>
                <a href="/aktiviteter/barnkalas/">
                  <div
                    class="
                      pixsass-activity-item
                      width3
                      grid-item
                      wow pixFadeLeft
                     
                    "
                    style="cursor: pointer"
                  >
                    <div class="pixsass-isotope-grid__img">
                      <img
                        src="/bilder/aktiviteter/barnkalas.webp"
                        alt="activity thumb"
                      />

                      <div class="activity-info activity-large">
                        <h3 class="activity-title">
                          <a href="/aktiviteter/barnkalas/"
                            >Barnkalas</a
                          >
                        </h3>
                        <span>Ge ert barn ett roligt kalas!</span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <!-- /.activity-inner -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /.activities -->

      <?php require_once("../../inc/footer.php"); ?>
    </div>
  </body>
</html>
