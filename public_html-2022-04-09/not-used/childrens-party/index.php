<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "Childrens Party";
    $imageURL = "http://142.44.240.91/assets/img/activities/children-new.jpg";
    
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
            <h1 class="page-title">Childrens Party</h1>

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
                        data-wow-delay="0.2s"
                        style="background: black; overflow: hidden"
                      >
                        <img
                          src="../../assets/img/children.jpg"
                          alt=""
                          style="width: 100%; object-fit: cover; opacity: 0.4"
                          class="children-img"
                        />

                        <div class="img-overlay"></div>

                        <div class="section-title absoluteText">
                          <h2
                            class="title wow pixFadeDown"
                            data-wow-delay="0.2s"
                            style="font-size: 3.5rem; color: #fff"
                          >
                            CHILDREN'S PARTY
                          </h2>
                        </div>
                      </div>

                      <h3
                        style="
                          padding-top: 0rem;
                          font-weight: 400;
                          padding-top: 2rem;
                        "
                        class="wow pixFadeDown"
                        data-wow-delay="0.2s"
                      >
                        TA CHANSEN ATT GE ERA BARN ETT ROLIGT KALAS!
                      </h3>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.2s"
                        style="line-height: 2"
                      >
                        Från 6 år: burgare med fries, popcorn, dryck, glass och
                        1 timme bowling.
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.2s"
                        style="line-height: 2"
                      >
                        (1 timme bowling = 55 min)
                      </p>

                      <h3
                        style="padding-top: 0rem; font-weight: 400"
                        class="wow pixFadeDown"
                        data-wow-delay="0.2s"
                      >
                        179 kr / person
                      </h3>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.2s"
                        style="line-height: 2"
                      >
                        Kalasen går att boka lördagar och söndagar kl. 12.00 -
                        14.00 för minst 8 personer.
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.2s"
                        style="line-height: 2"
                      >
                        Vill ni ha skräddarsydda paket så hör av er till oss så
                        tar vi fram ett förslag som passar er.
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.2s"
                        style="line-height: 2"
                      >
                        Avbokning skall ske minst 2 dagar innan bokat kalas. Om
                        avbokning sker senare debiteras en avgift på 500 kr.
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.2s"
                        style="line-height: 2"
                      >
                        Boka på 031 - 19 19 19,
                        <span style="color: #2d9b87"
                          >Info@NordicSportsbar.se
                        </span>
                      </p>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.2s"
                        style="line-height: 2"
                      >
                      Varmt välkomna
                      </p>

                      <button
                        style="padding: 5px 25px"
                        data-wow-delay="0.2s"
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
                  $activity = "children";
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
