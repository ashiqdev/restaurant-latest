<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "Bridal";
    $imageURL = "http://142.44.240.91/assets/img/activities/7.jpg";
  
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
            <h1 class="page-title">Bridal</h1>

            <ul class="bradcurmed">
              <li><a href="/" rel="noopener noreferrer">Hem</a></li>
              <li>Activities</li>
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
            <div class="b-select">
              <select
                onchange="location = this.value"
                class="d-block d-lg-none pix-select"
                id="gender2"
              >
                <option value="./bowling.html">Bowling</option>
                <option value="./conference.html">Conferense</option>
                <option value="./corporate-event.html">Corporate Event</option>
                <option value="./large-companies.html">Large Companies</option>
                <option selected>Bridal Party</option>
                <option value="./childrens-party.html">Childrens Party</option>
                <option value="./monday-package.html">Monday Package</option>
                <option value="./gamezone.html">GameZone</option>
                <option value="./gaming-night.html">Gaming Night</option>
                <option value="./frolundapaket.html">Fr??lunda package</option>
                <option value="./happy-hours.html">Happy Hours</option>
                <option value="./after-work-buffet.html">
                  After work Buffe
                </option>
                <option value="./shuffleboard.html">shuffleboard</option>
                <option value="./package-offer.html">Package Offer</option>
              </select>
            </div>
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
                          src="../../assets/img/activities/bridal.jpg"
                          alt=""
                          style="width: 100%; object-fit: cover; opacity: 0.4"
                        />

                        <div class="section-title absoluteText">
                          <h2
                            class="title wow pixFadeDown"
                            data-wow-delay="0.1s"
                            style="font-size: 3.5rem; color: #fff"
                          >
                            BRIDAL PARTY
                          </h2>
                        </div>
                      </div>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.1s"
                        style="line-height: 2; padding-top: 2rem"
                      >
                        Oavsett om ni ??r ett st??rre eller mindre s??llskap s?? kan
                        vi anordna s?? ni f??r ett roligt bes??k blandat med lite
                        olika aktiviteter som bowling, shuffleboard, arkadspel,
                        Playstation eller VR.
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.1s"
                        style="line-height: 2"
                      >
                        Mejla oss p?? Info@NordicSportsbar.ses eller ring p?? 031
                        - 19 19 19 s?? hj??lper vi er att hitta ett bra uppl??gg
                        och paket som passar.
                      </p>

                      <button
                        style="padding: 5px 25px"
                        data-wow-delay="0.1s"
                        class="btn-grad wow pixFadeUp"
                        onclick="window.location.href='/activities/'"
                      >
                        TILLBAKA
                      </button>

                      <!-- /.singiture -->
                    </div>
                    <!-- /.about-content -->
                  </div>
                  <!-- /.col-lg-8 -->

                  <!-- col-lg-3 -->
                  <?php
                  $activity = "bridal";
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
