<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "Barnkalas";
	$metaDescription = "Fira barnkalaset hos oss med ett grymt paket där ni har popcorn, läsk, burgare, glass och bowling för 179:-/barn.";
    $imageURL = "/bilder/aktiviteter/4.jpg";
    
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
            <h1 class="page-title">Barnkalas</h1>

            <ul class="bradcurmed">
              <li><a href="/">Hem</a></li>
              <li><a href="/aktiviteter/">Aktiviteter</a></li>
              <li>Barnkalas</li>
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
                        data-wow-delay="0.1s"
                        
                      >
                        <img
                          src="/bilder/aktiviteter/barnkalas.webp"
                          width="1600" height="900"
                          
                        />

                        <div class="section-title absoluteText">
                          <h2
                            class="title wow pixFadeDown"
                            data-wow-delay="0.1s"
                            
                          >
                            Barnkalas
                          </h2>
                        </div>
                      </div>

                      <h3
                        
                        class="wow pixFadeDown thin pt-2"
                        data-wow-delay="0.1s"
                      >
                      Ta chansen och ge barnen ett roligt kalas!
                      </h3>

                      <p
                        class="description wow pixFadeDown thin lh-2"
                        data-wow-delay="0.1s"
                        
                      >
						Från 6 år:
						
						<ul class="barnkalas">
						
							<li>
                <i class="material-icons" data-icon="star"></i>
                <span>
                  
                  Popcorn och läsk 
                </span>
              </li>
							
              <li>
              <i class="material-icons" data-icon="star"></i>
                <span>
                  Burgare med fries och dressing vid sidan

                </span>
              </li>
							
              <li>
              <i class="material-icons" data-icon="star"></i>
              <span>
                Glass

              </span>
              </li>
							
              
              <li>
              <i class="material-icons" data-icon="star"></i>
              <span>
                
                1h bowling
              </span>

              </li>
							
              <li>
              <i class="material-icons" data-icon="star"></i>
              <span>
                
                Totalt: 179:-/barn
              </span>
              </li>
						
						</ul>
						
						                      <p
                        class="description wow pixFadeDown thin lh-2"
                        data-wow-delay="0.1s"
                       
                      >

						Kalasen går att boka lördagar och söndagar kl. 12.00 - 14.00 för minst 8 personer.
						Vill ni ha skräddarsydda paket så hör av er till oss så tar vi fram ett förslag som passar er.
</p>

						                      <p
                        class="description wow pixFadeDown thin lh-2"
                        data-wow-delay="0.1s"
                        
                      >
					  
						Inbjudningskort finns att hämta och dessa går bra att spara och mejla ut eller skriva ut och dessa finns nu även på engelska:
					  
						<ul class="barnkalas">
							
							<li>
              <i class="material-icons" data-icon="star"></i>
              <span>
                
                <a href="/aktiviteter/barnkalas/inbjudningskort.pdf" target="_blank">Inbjudningskort (svenska)</a>
              </span>

              </li>
							
              <li>
              <i class="material-icons" data-icon="star"></i>
              <span>
                
                <a href="/aktiviteter/barnkalas/invitation.pdf" target="_blank">Inbjudningskort (engelska)</a>
              </span>
              </li>
							
						</ul>
					  
					  </p>
					  
                      <p
                        class="description wow pixFadeDown thin lh-2"
                        data-wow-delay="0.1s"
                        
                      >
						Avbokning skall ske minst 2 dagar innan bokat kalas. Om avbokning sker senare debiteras en avgift på 500 kr.
                      </p>
					  
                      <p
                        class="description wow pixFadeDown lh-2"
                        data-wow-delay="0.1s"
                        
                      >
                      Varmt välkomna att boka på: 031 - 19 19 19 eller mejl Info@NordicSportsbar.se
                      </p>

                      <a
                        
                        data-wow-delay="0.1s"
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
                  $activity = "barnkalas";
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
