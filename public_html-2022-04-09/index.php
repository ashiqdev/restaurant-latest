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
      class="main_content front-page"
      style="overflow-x: hidden; overflow-y: auto"
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
     
        <div class="bg-video ytplayer" id="player"></div>
   
   
        <!-- button over banner info -->

        <!-- <a class="banner-info-btn">
         
        <img src="./bilder/svg-01.svg" alt="">
         <span>Boka Nu</span>
        </a> -->

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
         class="banner-info thin"
         style="
           
           color: #e5e7eb;
         "
       >
         <div class="thin" style="font-size: 22px;">
           <i class="fas fa-map-marker-alt"></i>
           <span class="thin"
             >Mölndalsvägen
             <span class="numeric thin">95</span></span
           >
         </div>
  
         <div style="font-size: 22px;">
           <i class="fas fa-location-arrow"></i>
           <span class="thin">412 63 Göteborg</span>
         </div>
         <div style="font-size: 22px;">
           <i class="fas fa-phone-alt"></i>
           <span class="thin">031 - 19 19 19</span>
         </div>
  <div style="font-size: 22px;">
           <i class="fas fa-inbox"></i>
           <span class="thin">Info@NordicSportsbar.se</span>
         </div>
        </div>       
      
        
          
        </div> 

      
    


     

     <!-- smaller screen -->
     <section
     class="banner banner-one new-challange smaller-screens"
     style="position: relative"
   >
     <div class="row">
       <div>
         <div
         
           class="new-challange"
           style="object-fit: cover; width: 100%"
         >
           <div id="testme" class="container">
             <div class="banner-content-wrap">
               <div class="row align-items-center">
                 <div class="col-lg-12">
                   <div class="banner-content">
                       <div id="text">

                         <h1 style="text-align:center;" class="banner-title"
                         
                          
                         >
                         <p class="words">Vi</p>
                         <p class="words">har nu bytt namn till</p>
                         <p class="words">Nordic Sportsbar</p>
                         </h1>
                       </div>


                       <div class="new-wrapper wow pixFadeDown">

                     

                     <div
                       class="description"
                       
                     >
                       <div
                         class="banner-info-small"
                         style="
                           display: flex;
                           
                           flex-direction: column;
                           color: #e5e7eb;
                         "
                       >
                         <div class="mobile-anim" style="font-size: 22px; margin-bottom: 1rem;">
                           <i class="fas fa-map-marker-alt"></i>
                           <span class="thin"
                             >Mölndalsvägen
                             <span class="numeric thin">95</span></span
                           >
                         </div>

                         <div style="font-size: 22px; margin-bottom: 1rem;">
                           <i class="fas fa-location-arrow"></i>
                           <span class="thin">412 63 Göteborg</span>
                         </div>
                         <div style="font-size: 22px;">
                           <i class="fas fa-phone-alt"></i>
                           <span class="thin">031 - 19 19 19</span>
                         </div>
           <div style="font-size: 22px;margin-top:10px;">
                           <i class="fas fa-inbox"></i>
                           <span class="thin">Info@NordicSportsbar.se</span>
                         </div>
                       </div>
                     </div>

                     <div class="">
                       <!-- <button
                         class="
                           
                           d-none d-lg-block
                           check
                           yellow
                         "
                         style="color: #fff; text-transform: uppercase;width:100%;border-radius:20px"
                       
                         id="mybtn"
                         data-toggle="modal"
                         data-target="#myModal"
                      
                         data-keyboard="false"
                       
                       >
                         Boka här
                       </button> -->
                     </div>
         
                     <div
                       class="banner-button-container"
                       
                     >
                       <a
                         href="/meny"
                         class="btn-grad"
                       >
                         <span style="vertical-align:middle;font-size:24px;" class="material-icons">restaurant_menu</span> Meny
                       </a>

                       <a
                         class="btn-grad"
                         href="/sport"
                       >
                         <span style="vertical-align:middle;font-size:24px;" class="material-icons">sports_soccer</span> Sport
                       </a>

                       <a
                         href="/aktiviteter/"
                         
                         class="btn-grad"
                       >
                         <span style="vertical-align:middle;font-size:24px;" class="material-icons">games</span> Aktiviteter
                       </a>
                     </div>


         
                   </div>
                   <!-- /.banner-content -->
                 </div>
                 <!-- /.col-lg-6 -->
               </div>
               <!-- /.row -->
             </div>
             </div>
             <!-- /.banner-content-wrap -->
           </div>
         </div>
       </div>
     </div>
   </section>


      
      


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
                      src="/bilder/bowling-lanes-hd.jpg"
                      class=""
                      data-wow-delay="0.1s"
                      alt="bowling-lanes"
                    />
                  </a>
                </div>
              </div>
            </div>
            
            
            <div
              class="col-lg-6 green-gradient-two"
              style="background-color: #fff; display: flex; align-items: center;"
            >
              <div class="editor-content">
                <div class="section-title style-two">
                  <h2 style="color: #fff" class="title wow fadeIn">Bowling</h2>
                  <p class="wow pixFadeDown">
                    Tävla med familj och vänner på våra 6 bowlingbanor!
                  </p>
                </div>

                <div class="description responsive-btn wow pixFadeDown">
                  <p>

                  </p>

                  <a
                    href="/aktiviteter/bowling/"
                    
                    class="pix-btn btn-grad-white fixed-btn"
                    data-wow-delay="0.1s"
                    style="color: #02aab0"
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
              class="col-lg-6 green-gradient"
              style="
          
              display: flex;
              align-items: center;
              max-width: 100%;
            "
              
            >
              <div class="editor-content">
                <div class="section-title style-two">
                  <h2 class="title wow fadeIn" style="color: #fff;">Shuffleboard</h2>
                  <p class="wow pixFadeDown" style="color: #e5e7eb">Ett underhållande spel som kräver teknik!</p>
                </div>

                <div class="description responsive-btn wow pixFadeDown">
                  <p>

                  </p>

                  <a
                    href="/aktiviteter/shuffleboard/"
                    style="color: #02aab0; background-color: #fff"
                    class="pix-btn btn-grad-white fixed-btn"
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
              <div class="editure-feature-image" style="width: 100%">
                <div class="image-one" style="width: 100%">
                  <a href="/gamezone/">
                    <img
                      src="/bilder/gamezone.jpg"
                      class=""
                      data-wow-delay="0.1s"
                      alt="gamezone"
                    />
                  </a>
                </div>
              </div>
            </div>

            <div
              class="col-lg-6 green-gradient-two"
              style="background-color: #fff; display: flex; align-items: center"
            >
              <div class="editor-content">
                <div class="section-title style-two">
                  <h2 class="title wow fadeIn" style="color: #fff">Gamezone</h2>
                  <p class="wow pixFadeDown">
                    Basket, Airhockey, Boxboll, Sparkboll och mer!
                  </p>
                </div>

                <div class="description responsive-btn wow pixFadeDown">
                  <p>

                  </p>

                  <a
                    href="/gamezone/"
                    class="pix-btn btn-grad btn-grad-white fixed-btn"
                    style="color: #02aab0"
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
              class="col-lg-6 green-gradient"
              style="
            
              display: flex;
              align-items: center;
              max-width: 100%;
            "
              
            >
              <div class="editor-content">
                <div class="section-title style-two">
                  <h2 class="title wow fadeIn" style="color: #fff;">PlayStation + VR</h2>
                  <p class="wow pixFadeDown" style="color: #e5e7eb"  > Kom in till oss och spela!</p>
                </div>

                <div class="description responsive-btn wow pixFadeDown">
                  <p>

                  </p>

                  <a
                    href="/vr/"
                    style="color: #02aab0; background-color: #fff"
                    class="pix-btn btn-grad-white fixed-btn"
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
                      src="/bilder/virtual-reality.jpg"
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
              <div class="editure-feature-image" style="width: 100%">
                <div class="image-one" style="width: 100%">
                  <a href="/sallskapsspel/">
                    <img
                      src="/bilder/board-games.jpg"
                      class=""
                      data-wow-delay="0.1s"
                      alt="board games"
                    />
                  </a>
                </div>
              </div>
            </div>

            <div
              class="col-lg-6 green-gradient-two"
              style="background-color: #fff; display: flex; align-items: center"
            >
              <div class="editor-content">
                <div class="section-title style-two">
                  <h2 style="color: #fff"; class="title wow fadeIn thin" id="last-title">Sällskapsspel</h2>
                  <p class="wow pixFadeDown" style="color: #e5e7eb">
                    Schack, Backgammon, UNO, kortlek, Yatzy och mer! 
                  </p>
                </div>

                <div class="description responsive-btn wow pixFadeDown">
                  <p>

                  </p>

                  <a
                    href="/sallskapsspel/"
                    class="pix-btn btn-grad btn-grad-white fixed-btn"
                    data-wow-delay="0.1s"
                    style="color:#02aab0"
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