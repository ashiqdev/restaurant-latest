<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "Happy-Hour";
    $imageURL = "http://142.44.240.91/assets/img/activities/9.jpg";
	
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
            <h1 class="page-title">Happy Hours</h1>

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
                          src="../../assets/img/activities/happy.jpg"
                          alt=""
                          style="width: 100%; object-fit: cover; opacity: 0.4"
                        />

                        <div class="section-title absoluteText">
                          <h2
                            class="title wow pixFadeDown"
                            data-wow-delay="0.2s"
                            style="font-size: 3.5rem; color: #fff"
                          >
                            HAPPY <span style="color: #2d9b87">HO</span>URS
                          </h2>
                        </div>
                      </div>

                      <p
                        class="description wow pixFadeDown"
                        data-wow-delay="0.2s"
                        style="line-height: 2; padding-top: 2rem"
                      >
                      Slappna av på eftermiddagen med våra happy hours som varar mellan 14:00 - 18:00 med schyssta priser på våra berömda chicken wings, nacho chips, öl, vin, bubbel och alkoholfritt.
                      </p>

                      <div style="padding-top: 1rem">
                        <section class="pricing-single-one">
                          <div class="container">
                            <div class="section-title text-center">
                              <h3 class="sub-title wow pixFadeUp">Menu</h3>
                              <h2
                                style="
                                  font-size: 1.5rem;
                                  line-height: 2;
                                  font-weight: 500;
                                "
                                class="title wow pixFadeUp"
                                data-wow-delay="0.2s"
                              >
                                There are delicious menus
                              </h2>
                            </div>
                            <!-- /.section-title -->

                            <div
                              class="
                                row
                                advanced-pricing-table
                                no-gutters
                                wow
                                pixFadeUp
                              "
                              data-wow-delay="0.2s"
                            >
                              <div class="col-lg-4" style="height: 375px">
                                <div
                                  class="pricing-table br-left"
                                  style="height: 375px"
                                >
                                  <div class="pricing-header pricing-amount">
                                    <div class="monthly_price">
                                      <h2 class="price">TILLTUGG (79:-)</h2>
                                    </div>
                                    <!-- /.monthly_price -->
                                  </div>
                                  <!-- /.pricing-header -->

                                  <ul class="price-feture">
                                    <li class="have">Chicken Wings (10 pcs)</li>
                                    <li class="have">
                                      Dip, Dip, Dip and Nacho Chips
                                    </li>
                                  </ul>
                                </div>
                                <!-- /.pricing-table -->
                              </div>
                              <!-- /.col-lg-4 -->

                              <div class="col-lg-4" style="height: 375px">
                                <div
                                  class="pricing-table br-left"
                                  style="height: 375px"
                                >
                                  <div class="pricing-header pricing-amount">
                                    <div class="monthly_price">
                                      <h2 class="price">DRYCK (39:-)</h2>
                                    </div>
                                    <!-- /.monthly_price -->
                                  </div>
                                  <!-- /.pricing-header -->

                                  <ul class="price-feture">
                                    <li class="have">Carlsberg Hof (40 cl)</li>
                                    <li class="have">Falcon (40 cl)</li>
                                  </ul>
                                </div>
                                <!-- /.pricing-table -->
                              </div>
                              <!-- /.col-lg-4 -->

                              <div class="col-lg-4" style="height: 375px">
                                <div
                                  class="pricing-table br-left"
                                  style="height: 375px"
                                >
                                  <div class="pricing-header pricing-amount">
                                    <div class="monthly_price">
                                      <h2 class="price">
                                        ALKOHOLFRITT (29:-)

                                      </h2>
                                    </div>
                                    <!-- /.monthly_price -->
                                  </div>
                                  <!-- /.pricing-header -->

                                  <ul class="price-feture">
                                    <li class="have">
                                      Staropramen, Carlsberg, Erdinger, Somersby
                                      Pear Cider
                                    </li>
                                    <li class="have">
                                      Pepsi, Pepsi Max, Zingo, 7-Up
                                    </li>
                                  </ul>
                                </div>
                                <!-- /.pricing-table -->
                              </div>
                              <!-- /.col-lg-4 -->
                            </div>
                            <!-- /.advanced-pricing-table -->
                          </div>
                          <!-- /.container -->
                        </section>
                        <!-- /.container -->
                      </div>

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

                <!-- activity tab -->
                <?php
                $activity = "happy";
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
