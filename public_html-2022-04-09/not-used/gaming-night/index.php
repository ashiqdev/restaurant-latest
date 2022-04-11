<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "Spelkväll";
    $imageURL = "http://142.44.240.91/assets/img/activities/5.jpg";

	
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
    </div>

    <!--==========================-->
    <!--=         Banner         =-->
    <!--==========================-->
    <section class="page-banner">
      <div class="container">
        <div class="page-title-wrapper">
          <h1 class="page-title">Spelkväll</h1>

          <ul class="bradcurmed">
            <li><a href="/" rel="noopener noreferrer">Hem</a></li>
            <li>Activities</li>
            <li>Spelkväll</li>
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
                      style="background: black; overflow: hidden"
                    >
                      <img
                        src="../../assets/img/activities/game-night.jpg"
                        alt=""
                        style="width: 100%; object-fit: cover; opacity: 0.4"
                      />

                      <div class="section-title absoluteText">
                        <h2
                          class="title wow pixFadeDown"
                          style="font-size: 3.5rem; color: #fff"
                        >
                          Spelkväll
                        </h2>
                      </div>
                    </div>

                    <p
                      class="description wow pixFadeDown"
                      style="line-height: 2; padding-top: 2rem"
                    >
                    Kom till oss och spela Playstation och välj bland en av våra spel.
                    </p>

                    <p
                      class="description wow pixFadeDown"
                      style="line-height: 2"
                    >
                    85:-/timme/spelkontroll (upp till 4 spelkontroller)
                    </p>

                    <h3
                      style="padding-top: 0rem; font-weight: 400"
                      class="wow pixFadeDown"
                    >
                    Nu har vi även Playstation VR + Move kontroller + Playstation Aim.


                    </h3>

                    <p
                      class="description wow pixFadeDown"
                      style="line-height: 2"
                    >
                    350:-/timme/VR


                    </p>

                      <a
                        style="padding: 5px 25px"
                        data-wow-delay="0.2s"
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
                $activity = "gaming-night";
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
  </body>
</html>
