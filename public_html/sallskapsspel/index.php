<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $headerTitle = "Sällskapsspel";
	
    require_once("../../inc/header.php"); 
  ?>
  </head>
  <body>
    <div class="main_contant general-style">
      <!--=========================-->
      <!--=        Navbar         =-->
      <!--=========================-->
      <?php require_once("../../inc/navbar.php"); ?>

      <!--==========================-->
      <!--=         Banner         =-->
      <!--==========================-->
      <section class="page-banner">
        <div class="container">
          <div class="page-title-wrapper">
            <h1 class="page-title">Sällskapsspel</h1>

            <ul class="bradcurmed">
              <li><a href="/">Hem</a></li>
              <li>Sällskapsspel</li>
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
      <section class="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="about-content">
                <div class="section-title">
                  <h3 class="sub-title wow pixFadeUp">Sällskapsspel</h3>
                </div>
                <!-- /.section-title -->

                <p class="description wow pixFadeUp" data-wow-delay="0.2s">
                  Roa er med sällskapsspel när ni är hos oss!
                  <br />
				  Fråga oss i personalen så kommer vi till bordet med spelen och självklart kostar det ingenting!<br /><br />
				  
				  Hos oss hittar ni bland annat:
				  <ul class="minm-20 padl-15">
				  
					<li>Schack</li>
					<li>Backgammon</li>
					<li>UNO</li>
					<li>Yatzy</li>
					<li>Kortlek</li>
					<li>och mycket mer...</li>
				  
				  </ul>
                </p>
              </div>
              <!-- /.about-content -->
            </div>
            <!-- /.col-lg-7 -->

            <div class="col-lg-5">
              <div class="about-thumb wow pixFadeRight" data-wow-delay="0.2s">
                <img
                  class="hauto"
                  src="/bilder/board.webp"
                  alt="about"
                  
                />
              </div>
              <!-- /.about-thumb -->
            </div>
            <!-- /.col-lg-5 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /.about -->

      <?php require_once("../../inc/footer.php"); ?>
    </div>
  </body>
</html>
