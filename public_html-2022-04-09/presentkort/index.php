<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "Presentkort";
	
    require_once("../../inc/header.php"); 
  ?>
  </head>
  <body>
    <div class="main_contant" style="overflow-x: hidden; overflow-y: auto">
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
          <div class="row">
            <div class="col-lg-12">
              <div class="text-center">

			<p class="description wow pixFadeDown" style="line-height: 2; visibility: visible; animation-name: pixFadeDown; font-weight: 300; font-family: var(--font__light); text-align: center; color: rgb(96, 96, 96);">
			
				Presentkort går att beställa eller fylla på direkt på plats och är giltiga två år från aktiveringsdatum.<br />
				Nedan kan du fylla i ditt presentkortsnummer för att se hur länge ditt kort är giltigt och för att se kortets saldo.
			</p>

                <div
                  class="balance-search-form-wrapper wow pixFadeDown"
                  data-wow-delay="0.7s"
                  style="padding-top: 80px"
                >
                  <form id="checkGiftcard">
                    <div class="balance-form-inner">
                      <input
                        type="text"
                        placeholder="Skriv in ditt presentkortsnummer här"
                        id="giftcardNumber"
                      />
                      <button type="submit">Kontrollera</button>
                    </div>
                  </form>
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
