<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "Friskvård";
    $imageURL = "/bilder/aktiviteter/friskvard.png";
	
    require_once("../../../inc/header.php"); 
  ?>
  </head>
  <body>
    <div class="main_contant general-style">
      <!--=========================-->
      <!--=        Navbar         =-->
      <!--=========================-->
      <?php 
      $page="activity";
      require_once("../../../inc/navbar.php"); 
      ?>

      <!--==========================-->
      <!--=         Banner         =-->
      <!--==========================-->
      <section class="page-banner">
        <div class="container">
          <div class="page-title-wrapper">
            <h1 class="page-title">Friskvård</h1>

            <ul class="bradcurmed">
              <li><a href="/">Hem</a></li>
              <li><a href="/aktiviteter/">Aktiviteter</a></li>
              <li>Friskvård</li>
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
      <section class="faqs">
        <div class="container">
          <div class="tabs-wrapper">
            <?php require_once("../../../inc/dropdown.php"); ?>

            <div class="pt-4">
              <div class="container pl-0">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="about-content pr-0">
                      <div
                        class="sec-image-container wow pixFadeDown activity-img-wrapper"
                        data-wow-delay="0.2s"
                        
                      >
                        <img
                          src="/bilder/aktiviteter/epassi.png"
                          alt="Epassi logga"
                          
                        />

                        <div class="section-title absoluteText">
                          <h2 class="title wow pixFadeDown">
                            
                            Friskvård
                          </h2>
                        </div>
                      </div>

                      <p
                        class="description wow pixFadeDown lh-2 pt-2"
                       
                      >
                        Hos oss går det bra att betala er bowling med friskvårdskort och vi tar emot både Actiway och ePassi (OBS: efter 1 Januari så har Actiways tjänster flyttats till ePassi).<br />
						Skulle du ha någon fråga om hur det fungerar så är det bara att slå en signal på <a href="tel:004631191919">031 - 19 19 19</a> eller mejla på <a href="mailto:Info@NordicSportsbar.se">Info@NordicSportsbar.se</a>.
                      </p>
					  


                      <a
                        
                        data-wow-delay="0.2s"
                        class="btn-grad wow pixFadeUp tillBaka"
                        href="/aktiviteter/"
                      >
                        Tillbaka till aktiviteter
                      </a>

                      <!-- /.singiture -->
                    </div>
                    <!-- /.about-content -->
                  </div>
                  <!-- /.col-lg-8 -->

                 <!-- activity-tab -->

                  <?php
                  $activity = "friskvard";
                  require_once("../../../inc/tab.php"); 
                  ?>
                
                </div>
                <!-- /.row -->
              </div>
              <!-- /.container -->
            </div>
          </div>
          <!-- /.tabs-wrapper -->
        </div>
        <!-- /.container -->
      </section>

      <?php require_once("../../../inc/footer.php"); ?>
    </div>
  </body>
</html>
