<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "Gokarting Göteborg";
	$metaDescription = "Våra grannar på andra sidan vägen har en nyöppnad och grym gokartbana som ni är varmt välkomna att prova.";
    $imageURL = "/bilder/aktiviteter/gokart.webp";
    
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
            <h1 class="page-title">Gokart</h1>

            <ul class="bradcurmed">
              <li><a href="/">Hem</a></li>
              <li><a href="/aktiviteter/">Aktiviteter</a></li>
              <li>Gokart</li>
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
                    <div class="about-content" class="pr-0">
                      <!-- /.section-title -->

                      <div
                        class="sec-image-container wow pixFadeDown activity-img-wrapper"
                        data-wow-delay="0.2s"
                        
                      >
                        <img
                          src="/bilder/aktiviteter/gokart.webp"
                         
                        />

                        <div class="section-title absoluteText">
                          <h2
                            class="title wow pixFadeDown"
                            data-wow-delay="0.2s"
                            
                          >
                            Gokart
                          </h2>
                        </div>
                      </div>

                      <h3
                       
                        class="wow pixFadeDown thin pt-2"
                        data-wow-delay="0.2s"
                      >
                      Kör gokart hos våra grannar på andra sidan vägen!
                      </h3>
						
						                      <p
                        class="description wow pixFadeDown thin lh-2"
                        data-wow-delay="0.2s"
                       
                      >

						Go karting majorna har flyttat till en lokal som ligger precis på andra sidan vägen (tar 5 minuter att gå) och vi kan gladeligen rekommendera den nya banan!
						
						
						
						</p>

                      <p
                        class="description wow pixFadeDown lh-2"
                        data-wow-delay="0.2s"
                        
                      >
                      
						Ni kan nå dem på <a href="tel:+4631126588">031 - 12 65 88</a> eller via deras <a target="_blank" href="https://gokarting.nu/">Gokarting Göteborg hemsida</a>.
                      
					  </p>
					  
					  <h3
                       
                        class="wow pixFadeDown thin pt-2"
                        data-wow-delay="0.2s"
                      >
                      Karta
                      </h3>
					  
					  <img class="pb-20" src="/bilder/gokarting-karta.webp" alt="gokarting göteborg vägbeskrivning" />

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
                  $activity = "gokart";
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
