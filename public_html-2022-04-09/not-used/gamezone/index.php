<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "GameZone";
    $imageURL = "http://142.44.240.91/assets/img/activities/11.jpg";
	  
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
            <h1 class="page-title">Gamezone</h1>

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
                        
                        style="background: black; overflow: hidden"
                      >
                        <img
                          src="../../assets/img/activities/game.jpg"
                          alt=""
                          style="width: 100%; object-fit: cover; opacity: 0.4"
                        />

                        <div class="section-title absoluteText">
                          <h2
                            class="title wow pixFadeDown"
                            
                            style="font-size: 3.5rem; color: #fff"
                          >
                            GAMEZONE
                          </h2>
                        </div>
                      </div>

                      <section class="featured-three" style="padding-top: 4rem">
                        <div class="container">
                          <div class="section-title text-center">
                            <h3 class="sub-title wow pixFadeUp">Our service</h3>
                            <h2
                              class="title wow pixFadeUp"
                              
                              style="font-size: 1.4rem"
                            >
                            I vår game zone finner ni dessa spel, men självklart även bowling & shuffleboard:
                            </h2>
                          </div>
                          <!-- /.section-title -->

                          <div class="row">
                            <div class="col-lg-12">
                              <div
                                class="
                                  saaspik-icon-box-wrapper
                                  style-three
                                  wow
                                  pixFadeUp
                                "
                                
                              >
                                <div class="centering">
                                  <div class="saaspik-icon-box-icon">
                                    <img
                                      src="../../assets/img/activities/air.jpg"
                                      alt=""
                                    />
                                  </div>
                                  <div class="pixsass-icon-box-content">
                                    <p>Air Hokckey</p>
                                  </div>
                                </div>
                              </div>
                              <!-- /.pixsass-box style-three wow pixFadeUp -->
                            </div>
                            <!-- /.col-lg-6 -->

                            <div class="col-lg-12">
                              <div
                                class="
                                  saaspik-icon-box-wrapper
                                  style-three
                                  wow
                                  pixFadeUp
                                "
                                
                              >
                                <div class="centering">
                                  <div class="saaspik-icon-box-icon">
                                    <img
                                      src="../../assets/img/activities/bask2.jpg"
                                      alt=""
                                    />
                                  </div>
                                  <div class="pixsass-icon-box-content">
                                    <p>Basket Game</p>
                                  </div>
                                </div>
                              </div>
                              <!-- /.pixsass-box style-three wow pixFadeUp -->
                            </div>
                            <!-- /.col-lg-6 -->

                            <div class="col-lg-12">
                              <div
                                class="
                                  saaspik-icon-box-wrapper
                                  style-three
                                  wow
                                  pixFadeUp
                                "
                                
                              >
                                <div class="centering">
                                  <div class="saaspik-icon-box-icon">
                                    <img
                                      src="../../assets/img/activities/boxball.jpg"
                                      alt=""
                                    />
                                  </div>
                                  <div class="pixsass-icon-box-content">
                                    <p>Boxball Game</p>
                                  </div>
                                </div>
                              </div>
                              <!-- /.pixsass-box style-three wow pixFadeUp -->
                            </div>
                            <!-- /.col-lg-6 -->

                            <div class="col-lg-12">
                              <div
                                class="
                                  saaspik-icon-box-wrapper
                                  style-three
                                  wow
                                  pixFadeUp
                                "
                                
                              >
                                <div class="centering">
                                  <div class="saaspik-icon-box-icon">
                                    <img
                                      src="../../assets/img/activities/kickball.jpg"
                                      alt=""
                                    />
                                  </div>
                                  <div class="pixsass-icon-box-content">
                                    <p>Kickball Game</p>
                                  </div>
                                </div>
                              </div>
                              <!-- /.pixsass-box style-three wow pixFadeUp -->
                            </div>
                            <!-- /.col-lg-6 -->

                            <div class="col-lg-12">
                              <div
                                class="
                                  saaspik-icon-box-wrapper
                                  style-three
                                  wow
                                  pixFadeUp
                                "
                                
                              >
                                <div class="centering">
                                  <div class="saaspik-icon-box-icon">
                                    <img
                                      src="../../assets/img/activities/skee.jpg"
                                      alt=""
                                    />
                                  </div>
                                  <div class="pixsass-icon-box-content">
                                    <p>Skeeball Game</p>
                                  </div>
                                </div>
                              </div>
                              <!-- /.pixsass-box style-three wow pixFadeUp -->
                            </div>
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.container -->
                      </section>
                      <!-- /.featured -->

                      <p
                        class="description wow pixFadeDown"
                        
                        style="line-height: 2; padding-top: 2rem"
                      >
                      Nu har vi även
                        <a
                          style="text-decoration: underline; color: #2d9b87"
                          href="#"
                          >Playstation with 4 game controls and VR.</a
                        >
                      </p>

                      <button
                        style="padding: 5px 25px"
                        
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
                 $activity = "gamezone";
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
