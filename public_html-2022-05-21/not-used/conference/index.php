<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "Conference";
    $imageURL = "http://142.44.240.91/assets/img/activities/13.jpg";
	
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
            <h1 class="page-title">Conference</h1>

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
                <option selected>Bowling</option>
                <option value="/activities/conference">Conferense</option>
                <option value="/activities/corporate-event">
                  Corporate Event
                </option>
                <option value="/activities/large-companies">
                  Large Companies
                </option>
                <option value="/activities/bridal">Bridal Party</option>
                <option value="/activities/childrens-party">
                  Childrens Party
                </option>
                <option value="/activities/monday-package">
                  Monday Package
                </option>
                <option value="/activities/gamezone">GameZone</option>
                <option value="/activities/gaming-night">Gaming Night</option>
                <option value="/activities/frolundapaket">
                  Frölunda package
                </option>
                <option value="/activities/happy-hours">Happy Hours</option>
                <option value="/activities/after-work-buffet">
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
                      <div
                        class="sec-image-container wow pixFadeDown"
                        data-wow-delay="0.1s"
                        style="background: black; overflow: hidden"
                      >
                        <img
                          src="../../assets/img/activities/conference.jpg"
                          alt=""
                          style="width: 100%; object-fit: cover; opacity: 0.4"
                        />

                        <div class="section-title absoluteText">
                          <h2
                            class="title wow pixFadeDown"
                            data-wow-delay="0.1s"
                            style="font-size: 3.5rem; color: #fff"
                          >
                            CONFERENCE
                          </h2>
                        </div>
                      </div>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.1s"
                        style="line-height: 2; padding-top: 2rem"
                      >
                      Välkomna att boka era konferenser hos oss.
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.1s"
                        style="line-height: 2"
                      >
                      Här får ni full tillgång med både ljud och bild i en hel avdelning, där ni kan framföra era presentationer på våra stora 70 tumsskärm och spela upp media på 6 TV-apparater samtidigt (vi hjälper självklart till med tekniken). Varför inte även börja med lite tilltugg och rund av med bowling och shuffleboard?


                      </p>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.1s"
                        style="line-height: 2"
                      >
                      För olika paket och priser vänligen mejla in till oss eller ring 031 - 19 19 19. Nyfiken på hur det ser ut? Kika in på vår 360-gradersvy.


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
                    <!-- /.about-s -->
                  </div>
                  <!-- /.col-lg-8 -->

                 <!-- activity-tab -->
                 <?php
                 $activity = "conf";
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
