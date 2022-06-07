<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "Monday-Package";
    $imageURL = "http://142.44.240.91/assets/img/activities/10.jpg";
	
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
            <h1 class="page-title">Monday Package</h1>

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
                      <!-- /.section-title -->

                      <div
                        class="sec-image-container wow pixFadeDown"
                        data-wow-delay="0.1s"
                        style="background: black; overflow: hidden"
                      >
                        <img
                          src="../../assets/img/activities/monday.jpg"
                          alt=""
                          style="width: 100%; object-fit: cover; opacity: 0.4"
                        />

                        <div class="section-title absoluteText">
                          <h2
                            class="title wow pixFadeDown"
                            data-wow-delay="0.1s"
                            style="font-size: 3.5rem; color: #fff"
                          >
                            MONDAY PACKAGE
                          </h2>
                        </div>
                      </div>

                      <h3
                        style="padding-top: 2rem; font-weight: 400"
                        class="wow pixFadeDown"
                        data-wow-delay="0.1s"
                      >
                        Starta veckan på bästa möjliga sätt hos oss.
                      </h3>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.1s"
                        style="line-height: 2"
                      >
                        Vid beställning av en valfri varmrätt per person bjuder
                        vi på en timmes bowling per sällskap (5 spelare per
                        bana) i mån av plats, fråga oss i personalen för hjälp.
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.1s"
                        style="line-height: 2"
                      >
                        Så ta med familj och vänner in för en mysig eftermiddag
                        fylld med mat, dryck och roliga aktiviteter!
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.1s"
                        style="line-height: 2"
                      >
                        Paketet gäller ej på röda dagar.
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

                  <!-- activity-tab -->
                  <?php
                  $activity = "monday";
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
