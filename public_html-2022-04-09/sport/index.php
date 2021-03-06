<!DOCTYPE html>
<html lang="en">
  <head>
	<?php 
	
	$headerTitle = "Matcher som vi visar - Nordic Sportsbar";
	
	require_once("../../inc/header.php");  
	
	?>
  </head>
  <body style="">
    <div class="main_content" style="overflow-x: hidden">
      <!--=========================-->
      <!--=        Navbar         =-->
      <!--=========================-->
      <?php
    $page="sport"; 
    require_once("../../inc/navbar.php"); 
    ?>


      <!--==========================-->
      <!--=         Banner         =-->
      <!--==========================-->
      <section class="page-banner">
        <div class="container">
          <div class="page-title-wrapper">
            <h1 class="page-title">Matcher som visas</h1>

            <ul class="bradcurmed">
              <li><a href="/">Hem</a></li>
              <li>Sport</li>
            </ul>
          </div>
          <!-- /.page-title-wrapper -->
        </div>
        <!-- /.container -->

      
      </section>
      <!-- /.page-banner -->
      <!--==========================-->
      <!--=         Banner         =-->
      <!--==========================-->
      <section class="">
        <!-- <div class="">
          <div style="position: relative; z-index: 2" class="">
            <div class="row align-items-center">
              <div class="container" style="margin-top: 50px">
                <iframe
                  class="iframe2"
                  src="https://www.tvmatchen.nu/widget/61a73b3b178d4?heading=TV-matcher&border_color=blue&autoscroll=1"
                  frameborder="0"
                ></iframe>
              </div>
            </div>
          </div>
        </div> -->
        
        <div class="sportlist wow pixFadeDown">
          <div class="container">
            
			<h1 style="text-align: center;">Information</h1>

			<p class="description wow pixFadeDown" style="line-height: 2; visibility: visible; animation-name: pixFadeDown; font-weight: 300; font-family: var(--font__light); text-align: center; color: rgb(96, 96, 96);">Nedan kan du se vilka matcher som visas n??gra dagar fram??t.  Vi har r??ttigheter f??r de flesta kanaler och ser du inte matchen som du ??nskar att se s?? kan du alltid ringa eller mejla oss s?? ska vi f??rs??ka ordna matchen f??r er.  Notera v??nligen att vi inte alltid kan visa alla matcher p?? grund av ??ppning- och st??ngningstider eller efterfr??gan och vi rekommenderar att du alltid ringer oss (<a href="tel:004631191919">031 - 19 19 19</a>) i f??rv??g f??r att f??rs??kra dig om att ??nskad match visas. ????</p>

			<div style="color:black;font-size:15px;font-weight: 300; font-family: var(--font__light); text-align: center;">
			
				Matcherna presenteras av <a href="https://tvmatchen.nu" target="_blank" ref="nofollow">TVMatchen.nu</a> <span style="color:#db1212;vertical-align:middle;font-size:24px;" class="material-icons">favorite</span>
			
			</div>

            <div class="sports wow pixFadeDown">
              <!-- today -->
              <div class="today">
                
                <div class="title-wrapper" style="text-align: center;">

                  <div class="todays-title title-with-date">
                    
                  </div>
                </div>

                <div class="todays-list-container">
                  <!-- todays matches -->

                  <!-- /todays-matches -->
                </div>

              
              </div>
              <!-- /today -->

              <!-- tomorrow -->
              <div class="tomorrow">
                
                <div class="title-wrapper">
                  <div class="tomorrows-title title-with-date">
                    
                  </div>
                </div>
               

                <div class="tomorrows-list-container">

                  <!-- tomorrows matches -->
                  
                  <!-- /tomorrows-matches -->
                </div>

              
              </div>
              <!-- /tomorrow -->


                <!-- 3rd day -->
                <div class="third-day">
                
                  <div class="title-wrapper">

                    <div class="thirdDay-title title-with-date">
                     
                    </div>
                  </div>

                  <div class="thirdDay-list-container">
                      <!-- thirdDay matches -->
                      <!-- /thirdDay-matches -->
                  </div>
  
                
  
                
                </div>
                <!-- /thirdDay -->

                 <!-- 4th day -->
                 <div class="fourth-day">

                  <div class="title-wrapper">
                    
                    <div class="fourthDay-title title-with-date">
                    
                    </div>
                  </div>
                 

                  <div class="fourthDay-list-container">

                    <!-- fourthDay matches -->
                    
                    <!-- /fourthDay-matches -->
                  </div>
  
  
                
                </div>
                <!-- /4th-day-->


                <!-- 5th day -->
                <div class="fifth-day">

                  <div class="title-wrapper">
                    
                    <div class="fifthDay-title title-with-date">
                      
                    </div>
                  </div>
                

                  <div class="fifthDay-list-container">
                    
                    <!-- fifthDay matches -->
                    
                    <!-- /fifth-matches -->
                  </div>
  
  
                
                </div>
                <!-- /5th-day-->


                <!-- 6th day -->
                <div class="fifth-day">

                  <div class="title-wrapper">
                    
                    <div class="sixthDay-title title-with-date">
                      
                    </div>
                  </div>

                  <div class="sixthDay-list-container">

                    <!-- sixthDay matches -->
                    
                    <!-- /sixth-matches -->
                  </div>
                
  
  
                
                </div>
                <!-- /6th-day-->



                 <!-- 7th day -->
                 <div class="fifth-day">

                  <div class="title-wrapper">
                    
                    <div class="seventhDay-title title-with-date">
                      
                    </div>
                  </div>
                
  
                  <div class="seventhDay-list-container">

                    <!-- seventhDay matches -->
                  
                    <!-- /seventh-matches -->
                  </div>
  
                
                </div>
                <!-- /7th-day-->


           </div>
          </div>
        </div>

        <!-- /.container -->
      </section>
      <!-- /.banner banner-one -->
			<?php require_once("../../inc/footer.php"); ?>
  </body>
</html>
