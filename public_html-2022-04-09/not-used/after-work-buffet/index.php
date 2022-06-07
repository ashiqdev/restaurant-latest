<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "After Work Buffé";
    $imageURL = "http://142.44.240.91/assets/img/activities/12.jpg";
	
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

      <section class="page-banner">
        <div class="container">
          <div class="page-title-wrapper">
            <h1 class="page-title">AW Buffé</h1>

            <ul class="bradcurmed">
              <li><a href="/" rel="noopener noreferrer">Hem</a></li>
              <li>Activities</li>
              <li>AW Buffé</li>
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
                          src="../../assets/img/activities/buffet.jpg"
                          alt=""
                          style="width: 100%; object-fit: cover; opacity: 0.4"
                        />

                        <div class="section-title absoluteText">
                          <h2
                            class="title wow pixFadeDown"
                            data-wow-delay="0.1s"
                            style="font-size: 3.5rem; color: #fff"
                          >
                            AFTER WORK BUFFÉ
                          </h2>
                        </div>
                      </div>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.1s"
                        style="line-height: 2; padding-top: 2rem"
                      >
						OBS: AW-buffén är dessvärre pausad tillsvidare p.g.a. den rådande situationen.
						<hr />
                        Missa inte vår after work buffé som vi har på fredagar
                        mellan
                        <span style="font-weight: 500">16:00 - 18:00</span> med
                        en buffé och bra priser på öl, vin, drinkar och
                        alkoholfritt, varmt välkomna!
                      </p>

                      <h3
                        class="wow pixFadeDown"
                        data-wow-delay="0.1s"
                        style="font-size: 20px"
                      >
                        AFTER WORK-BUFFÉ 89:-
                      </h3>

                      <ul
                        class="wow pixFadeDown"
                        data-wow-delay="0.1s"
                        style="margin-bottom: 2rem"
                      >
                        <li>Plocka så mycket du orkar!</li>
                      </ul>

                      <h3
                        class="wow pixFadeDown"
                        data-wow-delay="0.1s"
                        style="font-size: 20px"
                      >
                        DRYCK (39:-)
                      </h3>

                      <ul
                        class="wow pixFadeDown"
                        data-wow-delay="0.1s"
                        style="margin-bottom: 2rem"
                      >
                        <li>Carlsberg Hof (40 cl)</li>
                        <li>Falcon (40 cl)</li>
                        <li>Husets viner (red, white & rosé)</li>
                      </ul>

                      <h3
                        class="wow pixFadeDown"
                        data-wow-delay="0.1s"
                        style="font-size: 20px"
                      >
                        ALKOHOLFRITT (29:-)
                      </h3>

                      <ul
                        class="wow pixFadeDown"
                        data-wow-delay="0.1s"
                        style="margin-bottom: 3rem"
                      >
                        <li>
                          Alkoholfri öl (Staropramen, Carlsberg, Sigtuna,
                          Kronenbourg Blanc, Erdinger, mm)
                        </li>
                        <li>
                          Juicer (apelsin, äpple, tranbär, grapefrukt, mm)
                        </li>

                        <li>Läsk (Pepsi, Pepsi Max, Zingo, 7-Up)</li>
                      </ul>

                      <a
                        style="padding: 5px 25px"
                        data-wow-delay="0.1s"
                        class="btn-grad wow pixFadeUp"
                        href="/activities/"
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
                 $activity = "buffet";
                 require_once("../../../inc/tab.php"); 
                 ?></div>
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
