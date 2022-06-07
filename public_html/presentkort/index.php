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
			
				Presentkort går att beställa eller fylla på direkt på plats och är giltiga två år från aktiveringsdatum.<br />
				Nedan kan du fylla i ditt presentkortsnummer för att se hur länge ditt kort är giltigt och för att se kortets saldo.
			</p>

                <div
                  class="wow pixFadeDown pt-5"
               
                  
                >
                

                  <div class="wrapper-container">
                    <div id="dialog">
                  
                      <form id="checkGiftcard" name="myForm">
                        <input inputmode="numeric" class="digit-input fifth-latest" type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                        <input inputmode="numeric" class="digit-input fourth-latest" type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                        <input inputmode="numeric" class="digit-input third-latest" type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                        <input inputmode="numeric" class="digit-input second-latest" type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                        <input inputmode="numeric" class="digit-input latest" type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                        <button type="submit" class="awesome-btn">KONTROLLERA</button>
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
