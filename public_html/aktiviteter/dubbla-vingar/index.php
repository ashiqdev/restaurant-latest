<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "Dubbla Vingar";
	$metaDescription = "Varje torsdag dubblar vi vingarna både när ni beställer på plats och på take away.";
    $imageURL = "/bilder/aktiviteter/wings.webp";
    
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
            <h1 class="page-title">Dubbla vingar</h1>

            <ul class="bradcurmed">
              <li><a href="/">Hem</a></li>
              <li><a href="/aktiviteter/">Aktiviteter</a></li>
              <li>Dubbla vingar</li>
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
                      <!-- /.section-title -->

                      <div
                        class="sec-image-container wow pixFadeDown activity-img-wrapper"
                        data-wow-delay="0.2s"
                        
                      >
                        <img
                          src="/bilder/aktiviteter/wings.webp"
                          width="1600" height="900"
                          
                          
                        />

                        <div class="section-title absoluteText">
                          <h2
                            class="title wow pixFadeDown"
                            data-wow-delay="0.2s"
                            
                          >
                            Dubbla Vingar
                          </h2>
                        </div>
                      </div>

                      <h3
                        
                        class="wow pixFadeDown thin pt-2"
                        data-wow-delay="0.2s"
                      >
                      Varje torsdag har vi dubbla vingar!
                      </h3>

                      <p
                        class="description wow pixFadeDown lh-2"
                        data-wow-delay="0.2s"
                        
                      >
					  
						Beställer ni 5 vingar så gör vi 10, beställer ni 10 vingar så gör vi 20, osv! 😁<br />
						Gäller på både take away och om ni beställer här på plats.
					  
                      </p>
					  
                      <p
                        class="description wow pixFadeDown lh-2"
                        data-wow-delay="0.2s"
                      
                      >
                      Varmt välkomna att boka bord eller beställa take away på: <a href="tel:004631191919">031 - 19 19 19</a>
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
                  $activity = "dubbla-vingar";
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
