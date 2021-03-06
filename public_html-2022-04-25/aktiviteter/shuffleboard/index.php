<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "Shuffleboard";
    $imageURL = "/bilder/aktiviteter/nordic.jpg";
	
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
            <h1 class="page-title">Shuffleboard</h1>

            <ul class="bradcurmed">
              <li><a href="/">Hem</a></li>
              <li><a href="/aktiviteter/">Aktiviteter</a></li>
              <li>Shuffleboard</li>
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
                          src="/bilder/aktiviteter/nordic.webp"
                          width="1600" height="900"
                          
                        />

                        <div class="section-title absoluteText">
                          <h2
                            class="title wow pixFadeDown absoluteTitle"
                            
                          >
                            SHUFFLEBOARD
                          </h2>
                        </div>
                      </div>

                      <p
                        class="description wow pixFadeDown lh-2 pt-2"
                        
                      >
                        Vi rekommenderar max 8 personer per bord och vi har 3st
                        Shuffleboards som f??ljer dem officiella reglerna och ??r
                        av fullstorlek (22 foot).
                      </p>

                      <p
                        class="description wow pixFadeDown lh-2"
                        
                      >
                        <span class="priser-decor"
                          >Drop-in pris:</span
                        >: 85 kr/timme/person.
                      </p>

                      <p
                        class="description wow pixFadeDown lh-2"
                       
                      >
                        <span class="priser-decor"
                          >Priser vid bokning</span
                        >: 350kr/timme/bord.
                      </p>

                      <p
                        class="description wow pixFadeDown lh-2"
                        
                      >
                        Bokning g??r att g??ra p?? telefon p?? <a href="tel:004631191919">031 - 19 19 19</a> eller
                        via mejl p??
                        <span><a href="mailto:Info@NordicSportsbar.se">Info@NordicSportsbar.se</a></span>
                      </p>

                      <p
                        class="description wow pixFadeDown lh-2"
                       
                      >
                        Varmt v??lkomna!
                      </p>

                      <h3 class="wow pixFadeDown thin">
                        OFFICIELLA SPELREGLER
                      </h3>

                      <p
                        class="description wow pixFadeDown lh-2"
                       
                      >
                        Varje lags m??l ??r att samla p?? sig 15 po??ng f??re
                        motst??ndarlaget.
                      </p>

                      <ul class="shuffle-list wow pixFadeDown">
                        <li>
                          Dela upp er i tv?? lag och st??ll er p?? ett av bordets
                          tv?? kortsidor.
                        </li>
                        <li>
                          Utse vilket lag som b??rjar genom att spela ??ver en
                          puck till motsatt sida. Laget som kommer n??rmst
                          kortsidan b??rjar
                        </li>
                        <li>
                          Ta tillbaka de tv?? puckarna och nollst??ll po??ngtavlan
                        </li>
                        <li>
                          Laget som b??rjar sl??r nu ??ver en puck fr??n ena
                          kortsidan till den andra och f??rs??ker att komma s??
                          n??ra den andra kortsidan som m??jligt.
                        </li>
                        <li>
                          N??r pucken stannat g??r det andra laget likadant och
                          det ??r fullt till??tet att sl?? ut det andra lagets
                          puck(ar).
                        </li>
                        <li>
                          Upprepa detta tills det inte finns n??gra puckar kvar
                          p?? kortsidan som ni st??r p??.
                        </li>
                        <li>
                          R??kna nu po??ngen. Observera att endast puckarna som ??r
                          f??rbi motst??ndarens b??sta puck ??r po??nggivande (allts??
                          ??r det endast ett lag som f??r po??ng varje g??ng) och
                          puckarna som st??r p?? linjen alltid tillh??r den l??gre
                          po??ngzonen och om den h??nger lite utanf??r den motsatta
                          kortsidan s?? r??knas detta som 5 po??ng.
                        </li>
                        <li>
                          Knappa in po??ngen med hj??lp av knapparna som finns
                          n??ra varje kortsida.
                        </li>
                        <li>
                          Laget som f??rst f??r 15 po??ng eller mer vinner spelet.
                        </li>
                      </ul>

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
                  $activity = "shuffleboard";
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
