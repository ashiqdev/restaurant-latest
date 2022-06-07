<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "Presentkort";
	
    require_once("../../inc/header.php"); 
  ?>
  </head>
  <body>
    <div class="main_contant" class="general-style">
      <!--=========================-->
      <!--=        Navbar         =-->
      <!--=========================-->
      <?php
    $page="presentkort"; 
    require_once("../../inc/navbar.php"); 
    ?>

      <!--==========================-->
      <!--=         Banner         =-->
      <!--==========================-->
      <section class="page-banner">
        <div class="container">
          <div class="page-title-wrapper">
            <h1 class="page-title">Presentkort</h1>

            <ul class="bradcurmed">
              <li><a href="/">Hem</a></li>
              <li>Presentkort</li>
            </ul>
          </div>
          <!-- /.page-title-wrapper -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /.page-banner -->

      <!--=========================-->
      <!--=         Cards         =-->
      <!--=========================-->
      <section class="about">
        <div class="container">
          <div class="row ml_15">
            <div class="col-lg-12">
              <div class="text-center">
                <p class="description wow pixFadeDown presentkort-desc">
                  Presentkort går att beställa eller fylla på direkt på plats
                  och är giltiga två år från aktiveringsdatum.<br />
                  Nedan kan du fylla i ditt presentkortsnummer för att se hur
                  länge ditt kort är giltigt och för att se kortets saldo.
                </p>

                <div class="wow pixFadeDown pt-5" data-wow-delay="0.7s">
                  <div class="wrapper-container">
                    <div class="checkout">
                      <div class="gift-card-box">
                        <div class="front">
                          <div class="chip"></div>
                          <div class="logo">
                            
                            <img src="/bilder/logo/icon-white.png" alt="">
                          </div>
                          <div class="number"></div>
                          <div class="card-holder">
                            <label>Card holder</label>
                            <div></div>
                          </div>

                          <div class="card-amount-total">
                            <label>Amount</label>
                            <div></div>
                          </div>
                        </div>
                      </div>

                      <form class="gift-form" autocomplete="off" novalidate>
                        <fieldset>
                          <label for="card-number">Card Number</label>

                          <div class="card-point">
                            <input
                              inputmode="numeric"
                              class="digit-input fifth-latest input-number"
                              type="text"
                              maxLength="1"
                              size="1"
                              min="0"
                              max="9"
                              pattern="[0-9]{1}"
                            />
                            <input
                              inputmode="numeric"
                              class="digit-input fourth-latest input-number"
                              type="text"
                              maxLength="1"
                              size="1"
                              min="0"
                              max="9"
                              pattern="[0-9]{1}"
                            />
                            <input
                              inputmode="numeric"
                              class="digit-input third-latest input-number"
                              type="text"
                              maxLength="1"
                              size="1"
                              min="0"
                              max="9"
                              pattern="[0-9]{1}"
                            />
                            <input
                              inputmode="numeric"
                              class="digit-input second-latest input-number"
                              type="text"
                              maxLength="1"
                              size="1"
                              min="0"
                              max="9"
                              pattern="[0-9]{1}"
                            />
                            <input
                              inputmode="numeric"
                              class="digit-input latest input-number"
                              type="text"
                              maxLength="1"
                              size="1"
                              min="0"
                              max="9"
                              pattern="[0-9]{1}"
                            />
                          </div>
                        </fieldset>


                        <fieldset class="">
                          <label for="gift-card-holder">Card Holder</label>
                          <input type="text" id="gift-card-holder" />
                      </fieldset>

                        


                        <fieldset class="total-amount">
                            <label for="gift-card-amount">Amount</label>
                            <input type="text" id="gift-card-amount" />
                        </fieldset>

                       


                        <div class="gift-btn-container">
                            <button disabled  class="withdraw-btn">Withdraw</button>
                            <button class="css-button-gradient--4 load-btn">Load</button>
                        </div>
                       
            
                        
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php require_once("../../inc/footer.php"); ?>
    </div>
  </body>
</html>
