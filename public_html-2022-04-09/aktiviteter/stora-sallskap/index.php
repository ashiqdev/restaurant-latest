<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "Stora sällskap";
    $imageURL = "/bilder/aktiviteter/4.jpg";
    
    require_once("../../../inc/header.php"); 
  ?>
  </head>
  <body>
    <div class="main_contant" style="overflow-x: hidden; overflow-y: auto">
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
            <h1 class="page-title">Stora sällskap</h1>

            <ul class="bradcurmed">
              <li><a href="/">Hem</a></li>
              <li><a href="/aktiviteter/">Aktiviteter</a></li>
              <li>Stora sällskap</li>
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
            <div style="padding-top: 4rem">
              <div class="container" style="padding-left: 0">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="about-content" style="padding-right: 0">
                      <!-- /.section-title -->

                      <div
                        class="sec-image-container wow pixFadeDown"
                        data-wow-delay="0.1s"
                        style="background: black; overflow: hidden"
                      >
                        <img
                          src="/bilder/aktiviteter/large-parties.webp"
                          alt=""
                          style="width: 100%; object-fit: cover; opacity: 0.4"
                        />

                        <div class="section-title absoluteText">
                          <h2
                            class="title wow pixFadeDown"
                            data-wow-delay="0.1s"
                            style="font-size: 3.5rem; color: #fff"
                          >
                            Stora sällskap
                          </h2>
                        </div>
                      </div>

                      <h3
                        style="padding-top: 2rem"
                        class="wow pixFadeDown thin"
                        data-wow-delay="0.1s"
                      >
                      FÖR ER SOM ÄR MER ÄN 30 PERSONER REKOMMENDERAR VI VÅR CLASSIC BUFFÉ
                      </h3>

                      <p
                        class="description wow pixFadeDown thin"
                        data-wow-delay="0.1s"
                        style="line-height: 2"
                      >
                      Vår klassiska buffé bland annat Burgare, Chicken Wings, Ribs, Snacks, Sallader mm och även en dryckesbiljett (gäller för fatöl, husets viner, cider, non-alco).
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.1s"
                        style="line-height: 2; font-size: 1.1rem"
                      >
                        <span style="color: #2d9b87; font-weight: bold"
                          >Pris från</span
                        >: 299 kr/pers
                      </p>

                      <h3
                        style="padding-top: 0rem"
                        class="wow pixFadeDown thin"
                        data-wow-delay="0.1s"
                      >
                      HAMBURGARBUFFÉ
                      </h3>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.1s"
                        style="line-height: 2"
                      >
                      Vår hamburgarbuffé med caesarsallad, fries, snacks, mm.

                      </p>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.1s"
                        style="line-height: 2; font-size: 1.1rem"
                      >
                        <span style="color: #02aab0; font-weight: bold"
                          >Pris från</span
                        >: 199 kr/pers (minst 20 pers).
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.1s"
                        style="line-height: 2"
                      >
                      Möjlighet att lägga till bowling eller shuffleboard för 59:- per person.
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.1s"
                        style="line-height: 2"
                      >
                      Varmt välkomna att boka på: 031 - 19 19 19 eller mejl Info@NordicSportsbar.se
                      </p>

                      <a
                        style="padding: 5px 25px"
                        data-wow-delay="0.1s"
                        class="btn-grad wow pixFadeUp"
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
                  $activity = "stora-sallskap";
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
