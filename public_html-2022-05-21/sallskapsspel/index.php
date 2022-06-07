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
                  <h3 class="sub-title wow pixFadeDown">Sällskapsspel</h3>
                </div>
                <!-- /.section-title -->

                <p class="description wow pixFadeDown">
                  Roa er med sällskapsspel när ni är hos oss!
                  <br />
				  Fråga oss i personalen så kommer vi till bordet med spelen och självklart kostar det ingenting!<br /><br />
				  
				  Hos oss hittar ni bland annat:
				  <ul class="minm-20 wow pixFadeDown gamezone-list">
				  
					<li>
            <i class="material-icons" data-icon="workspace_premium"></i>
            Schack
          </li>
					<li>
          <i class="material-icons" data-icon="workspace_premium"></i>
          <span>
            
            Backgammon
          </span>
          </li>
					
          <li>
          <i class="material-icons" data-icon="workspace_premium"></i>
          <span>

            UNO
          </span>
          </li>
					
          
          <li>
          <i class="material-icons" data-icon="workspace_premium"></i>
          <span>
            
            Yatzy
          </span>
          </li>
					
          
          <li>
          <i class="material-icons" data-icon="workspace_premium"></i>

          <span>
            
            Kortlek
          </span>  
          </li>
					
          <li>
            <i class="material-icons" data-icon="workspace_premium"></i>
            <span>och mycket mer...</span>
          </li>
				  </ul>
                </p>
              </div>
              <!-- /.about-content -->
            </div>
            <!-- /.col-lg-7 -->

            <div class="col-lg-5">
              <div class="about-thumb wow pixFadeRight" data-wow-delay="0.1s">
                <img
                  class="hauto"
                  src="/bilder/board.webp"
                  width="1600" height="900"
                  alt="sallskapsspel"
                  
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
