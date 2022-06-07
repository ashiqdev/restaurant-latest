<!DOCTYPE html>
<html lang="en">
  <head>
	<?php 
	
	$headerTitle = "Nordic Sportsbar - Bowling, Shuffleboard, Restaurang, Bar &amp; och mer!";
	
	require_once("../inc/header.php"); 
	
	?>

  </head>
  <body>
    <div
      class="main_content front-page general-style"
      
    >
      <!--=========================-->
      <!--=        Navbar         =-->
      <!--=========================-->
		<?php
    $page="home"; 
    require_once("../inc/navbar.php"); 
    ?>

      <!--==========================-->
      <!--=         Banner         =-->
      <!--==========================-->
    
      <!-- /.banner banner-one -->

      <div class="color-overlay"></div>

  
      
      <!-- large screen -->
      <div id="video" class="video-container"> 
        <!-- <div class="video-top-bg"></div> -->
        <div class="bg-video ytplayer" id="player"></div>

        <!-- <video class="video" loop="" muted="" autoplay="">
          <source
            src="./video.mp4?v1"
          />
        </video> -->

        <div class="btn-wrap">

          <button
          data-toggle="modal"
          data-target="#myModal"
          data-backdrop="static"
          data-keyboard="false"
          class="btn banner-info-grad">Boka Nu
            <div class="btn2"></div>
          </button>
        </div>
         
        
        <!-- text over video -->
         <div
         class="banner-info thin banner-info-color"
       >

         <div class="thin f_size_22">
           <i class="material-icons" data-icon="location_on"></i>
           <span class="thin"
             >Mölndalsvägen
             <span class="numeric thin">95</span></span
           >
         </div>
  
         <div class="f_size_22">
           <i class="material-icons" data-icon="near_me"></i>
           <span class="thin">412 63 Göteborg</span>
         </div>
         <div class="f_size_22">
           <a href="tel:004631191919" style="color:#e5e7eb;">
			   <i class="material-icons" data-icon="call"></i>
			   <span class="thin">031 - 19 19 19</span>
		   </a>
         </div>
  
         <div class="f_size_22">
           <a href="mailto:Info@NordicSportsbar.se" style="color:#e5e7eb;">
			<i class="material-icons" data-icon="email"></i>
			<span class="thin">Info@NordicSportsbar.se</span>
		   </a>
         </div>
        </div>       
      
        
          
        </div> 

      
    


     


      
      


     <!--===================================-->
      <!--=         Bowling Design         =-->
      <!--===================================-->
      <section class="genera-informes">
        <div>
          <div class="row">

            <div class="col-lg-6">
              <div class="editure-feature-image">
                <div class="image-one">
                  <a href="/aktiviteter/bowling/">
                    <img
					            width="1600" height="900"
                      src="/bilder/bowling-800-450.webp"
                      class="explicit"
                      data-wow-delay="0.1s"
                      alt="bowling-lanes"
                    />
                  </a>
                </div>
              </div>
            </div>
            
            
            <div
              class="col-lg-6 green-gradient-two editor-content-wrap"
              
            >
              <div class="editor-content">
                <div class="section-title style-two">
                  <h2  class="title wow fadeIn whity">Bowling</h2>
                  <p class="wow pixFadeDown">
                    Tävla med familj och vänner på våra 6 bowlingbanor!
                  </p>
                </div>

                <div class="description responsive-btn wow pixFadeDown">
                  <p>

                  </p>

                  <a
                    href="/aktiviteter/bowling/"
                    
                    class="pix-btn btn-grad-white fixed-btn primary-clr"
                    data-wow-delay="0.1s"
                    
                  >
                    Läs mer
                  </a>
                </div>
              </div>
              <!-- ./editor-content -->
            </div>
            <!-- /.col-lg-6 -->

           
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /.genera-informes -->
      
      
	  <!--===================================-->
      <!--=         Shuffleboard Design     =-->
      <!--===================================-->
     <section class="editor-design">
        <div>
          <div class="row d-flex flex-wrap-reverse">
            

            <div
              class="col-lg-6 green-gradient editor-content-wrap"
             
              
            >
              <div class="editor-content">
                <div class="section-title style-two">
                  <h2 class="title wow fadeIn whity">Shuffleboard</h2>
                  <p class="wow pixFadeDown gcolor">Ett underhållande spel som kräver teknik!</p>
                </div>

                <div class="description responsive-btn wow pixFadeDown">
                  <p>

                  </p>

                  <a
                    href="/aktiviteter/shuffleboard/"
                    
                    class="pix-btn btn-grad-white fixed-btn primary-coloring"
                    data-wow-delay="0.1s"
                  >
                    Läs mer
                  </a>
                </div>
              </div>
              <!-- ./editor-content -->
            </div>
            <!-- ./col-lg-6 -->

            <div class="col-lg-6 tough">
              <div class="editure-feature-image adjust-it">
                <div class="image-one">
                  <a href="/aktiviteter/shuffleboard/">
                    <img
                      width="1600" height="900"
                      src="/bilder/aktiviteter/shuffleboard.webp"
                      class="img-fluid"
                      data-wow-delay="0.1s"
                      alt="shuffleboard"
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- ./row -->
        </div>
        <!-- .container -->
      </section>
      <!-- /.genera-informes -->
      
	        <!--=================================-->
      <!--=         GAME Design         =-->
      <!--=================================-->
      <section class="editor-design">
        <div>
          <div class="row">
            <div class="col-lg-6">
              <div class="editure-feature-image wid-100">
                <div class="image-one wid-100">
                  <a href="/gamezone/">
                    <img
                      width="1600" height="900"
                      src="/bilder/gamezone-tinified.webp"
                      class=""
                      data-wow-delay="0.1s"
                      alt="gamezone"
                    />
                  </a>
                </div>
              </div>
            </div>

            <div
              class="col-lg-6 green-gradient-two editor-content-wrap"
              
            >
              <div class="editor-content">
                <div class="section-title style-two">
                  <h2 class="title wow fadeIn whity">Gamezone</h2>
                  <p class="wow pixFadeDown">
                    Basket, Airhockey, Boxboll, Sparkboll och mer!
                  </p>
                </div>

                <div class="description responsive-btn wow pixFadeDown">
                 

                  <a
                    href="/gamezone/"
                    class="pix-btn btn-grad btn-grad-white fixed-btn primary-clr"
                    
                    data-wow-delay="0.1s"
                  >
                    Läs mer
                  </a>
                </div>
              </div>
              <!-- ./editor-content -->
            </div>
            <!-- ./col-lg-6 -->
          </div>
          <!-- ./row -->
        </div>
      </section>
      <!-- game-design -->
      
      <!--=================================-->
      <!--=         PlayStation Design         =-->
      <!--=================================-->
      <section class="editor-design">
        <div>
          <div class="row d-flex flex-wrap-reverse">
            

            <div
              class="col-lg-6 green-gradient editor-content-wrap"
             
              
            >
              <div class="editor-content">
                <div class="section-title style-two">
                  <h2 class="title wow fadeIn whity">PlayStation + VR</h2>
                  <p class="wow pixFadeDown gcolor"> Kom in till oss och spela!</p>
                </div>

                <div class="description responsive-btn wow pixFadeDown">
                  

                  <a
                    href="/vr/"
                   
                    class="pix-btn btn-grad-white fixed-btn primary-coloring"
                    data-wow-delay="0.1s"
                  >
                    Läs mer
                  </a>
                </div>
              </div>
              <!-- ./editor-content -->
            </div>
            <!-- ./col-lg-6 -->

            <div class="col-lg-6 tough">
              <div class="editure-feature-image adjust-it">
                <div class="image-one">
                  <a href="/vr/">
                    <img
                     width="1600" height="900"
                      src="/bilder/virtual-reality.webp"
                      class="img-fluid"
                      data-wow-delay="0.1s"
                      alt="virtual reality"
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- ./row -->
        </div>
        <!-- .container -->
      </section>    
	  


	        <!--=================================-->
      <!--=         GAME Design         =-->
      <!--=================================-->
      <section class="editor-design">
        <div>
          <div class="row">
            <div class="col-lg-6">
              <div class="editure-feature-image wid-100">
                <div class="image-one wid-100">
                  <a href="/sallskapsspel/">
                    <img
                      width="1600" height="900"
                      src="/bilder/board-games.webp"
                      class=""
                      data-wow-delay="0.1s"
                      alt="board games"
                    />
                  </a>
                </div>
              </div>
            </div>

            <div
              class="col-lg-6 green-gradient-two editor-content-wrap"
              
            >
              <div class="editor-content">
                <div class="section-title style-two">
                  <h2  class="title wow fadeIn thin whity" id="last-title">Sällskapsspel</h2>
                  <p class="wow pixFadeDown gcolor">
                    Schack, Backgammon, UNO, kortlek, Yatzy och mer! 
                  </p>
                </div>

                <div class="description responsive-btn wow pixFadeDown">
                 

                  <a
                    href="/sallskapsspel/"
                    class="pix-btn btn-grad btn-grad-white fixed-btn primary-clr"
                    data-wow-delay="0.1s"
                    
                  >
                    Läs mer
                  </a>
                </div>
              </div>
              <!-- ./editor-content -->
            </div>
            <!-- ./col-lg-6 -->
          </div>
          <!-- ./row -->
        </div>
      </section>
      <!-- game-design -->
      <div id="my-overlay"></div>


      



		<?php require_once("../inc/footer.php"); ?>

    

  </body>
</html>