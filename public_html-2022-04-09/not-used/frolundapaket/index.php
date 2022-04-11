<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "frolundapaket";
    $imageURL = "http://142.44.240.91/assets/img/sportsf2.jpg";

    require_once("../../../inc/header.php"); 
  ?>
  </head>
  <body>
    <div class="main_contant" style="overflow-x: hidden; overflow-y: auto">
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
            <h1 class="page-title">Frölundapaketet</h1>

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
                        data-wow-delay="0.2s"
                        style="background: black; overflow: hidden"
                      >
                        <img
                          src="../../assets/img/activities/sportsf.jpg"
                          alt=""
                          style="width: 100%; object-fit: cover; opacity: 0.4"
                        />

                        <div class="section-title absoluteText">
                          <h2
                            class="title wow pixFadeDown"
                            data-wow-delay="0.2s"
                            style="font-size: 3.5rem; color: #fff"
                          >
                            FRÖLUNDA PAKETET
                          </h2>
                        </div>
                      </div>

                      <h2
                        class="title wow pixFadeDown thin"
                        data-wow-delay="0.2s"
                        style="
                          font-size: 1.5rem;
                          padding-top: 3rem;
                          padding-bottom: 2rem;
                        "
                      >
                        FRÖLUNDA PAKETET
                      </h2>

                      <div class="row">
                        <div class="col-lg-12">
                          <div
                            class="
                              saaspik-icon-box-wrapper
                              style-three
                              wow
                              pixFadeUp
                            "
                            data-wow-delay="0.2s"
                          >
                            <div class="centering">
                              <div class="pixsass-icon-box-content">
                                <p>
                                Classic Cheddarburgare (med fries och coleslaw) med Falcon 40 cl eller Carlsberg Non-Alcholic för 179:-.
                                </p>
                              </div>
                            </div>
                          </div>
                          <!-- /.pixsass-box style-three wow pixFadeUp -->
                        </div>
                      </div>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.2s"
                        style="line-height: 2"
                      >
                      Gäller endast under Frölundamatcher, varmt välkomna!
                      </p>

                      <a
                        style="padding: 5px 25px"
                        data-wow-delay="0.2s"
                        class="btn-grad wow pixFadeUp"
                        href="/activities/"
                      >
                        TILLBAKA
                      </a>
                      <!-- /.singiture -->
                    </div>
                    <!-- /.about-content -->
                  </div>
                  <!-- /.col-lg-8 -->

                  <!-- activity-tab -->
                  <?php
                  $activity = "frolunda";
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
