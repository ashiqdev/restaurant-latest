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
     
        <div class="bg-video ytplayer" id="player"></div>
   

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
           <i class="fas fa-map-marker-alt"></i>
           <span class="thin"
             >Mölndalsvägen
             <span class="numeric thin">95</span></span
           >
         </div>
  
         <div class="f_size_22">
           <i class="fas fa-location-arrow"></i>
           <span class="thin">412 63 Göteborg</span>
         </div>
         <div class="f_size_22">
           <i class="fas fa-phone-alt"></i>
           <span class="thin">031 - 19 19 19</span>
         </div>
  
         <div class="f_size_22">
           <i class="fas fa-inbox"></i>
           <span class="thin">Info@NordicSportsbar.se</span>
         </div>
        </div>       
      
        
          
        </div> 

      
    


     

     <!-- smaller screen -->
     <section
     class="banner banner-one new-challange smaller-screens ps"
    
   >
     <div class="row">
       <div>
         <div
         
           class="new-challange"
         >
           <div class="container">
             <div class="banner-content-wrap">
               <div class="row align-items-center">
                 <div class="col-lg-12">
                   <div class="banner-content">
                       <div id="text">

                         <h1  class="banner-title text-center"
                         
                          
                         >
                         <p class="words">Vi</p>
                         <p class="words">har nu bytt namn till</p>
                         <p class="words">Nordic Sportsbar</p>
                         </h1>
                       </div>


                       <div class="new-wrapper">

                     

                     <div
                       class="description"
                       
                     >
                       <div
                         class="banner-info-small"
                         
                       >
                         <div class="mobile-anim f_size_22">
                           <i class="fas fa-map-marker-alt"></i>
                           <span class="thin"
                             >Mölndalsvägen
                             <span class="numeric thin">95</span></span
                           >
                         </div>

                         <div class="mb-1 f_size_22">
                           <i class="fas fa-location-arrow"></i>
                           <span class="thin">412 63 Göteborg</span>
                         </div>
                         
                         <div class="f_size_22 mb-1">
                           <i class="fas fa-phone-alt"></i>
                           <span class="thin">031 - 19 19 19</span>
                         </div>
            
            
                         <div class="f_size_22">
                           <i class="fas fa-inbox"></i>
                           <span class="thin">Info@NordicSportsbar.se</span>
                         </div>
                       </div>
                     </div>

                     
         
                     <div
                       class="banner-button-container"
                       
                     >
                       <a
                         href="/meny"
                         class="btn-grad"
                       >
                         <span class="material-icons mobi-btn">restaurant_menu</span> Meny
                       </a>

                       <a
                         class="btn-grad"
                         href="/sport"
                       >
                         <span class="material-icons mobi-btn">sports_soccer</span> Sport
                       </a>

                       <a
                         href="/aktiviteter/"
                         
                         class="btn-grad"
                       >
                         <span  class="material-icons mobi-btn">games</span> Aktiviteter
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
                      src="/bilder/bowling-800-450.png"
                      class="explicit"
                      data-wow-delay="0.2s"
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
                    data-wow-delay="0.2s"
                    
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
                    data-wow-delay="0.2s"
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
                      src="/bilder/aktiviteter/shuffleboard.jpg"
                      class="img-fluid"
                      data-wow-delay="0.2s"
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
                      src="/bilder/gamezone-tinified.jpg"
                      class=""
                      data-wow-delay="0.2s"
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
                    
                    data-wow-delay="0.2s"
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
                    data-wow-delay="0.2s"
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
                      data-wow-delay="0.2s"
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
                      src="/bilder/board-games.jpg"
                      class=""
                      data-wow-delay="0.2s"
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
                    data-wow-delay="0.2s"
                    
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