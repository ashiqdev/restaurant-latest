<!DOCTYPE html>
<html lang="en">
  <head>
	<?php 
	
	$headerTitle = "Matcher som vi visar - Nordic Sportsbar";
	
	require_once("../../inc/header.php");  
	
	?>
  </head>
  <body>
    <div class="main_content oxhidden">
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
        
        <div class="sportlist wow pixFadeDown">
          <div class="container">
            
			<h1 class="text-center">Information</h1>

			<p class="description wow pixFadeDown sport-descrip">Nedan kan du se vilka matcher som visas några dagar framåt.  Vi har rättigheter för de flesta kanaler och ser du inte matchen som du önskar att se så kan du alltid ringa eller mejla oss så ska vi försöka ordna matchen för er.  Notera vänligen att vi inte alltid kan visa alla matcher på grund av öppning- och stängningstider eller efterfrågan och vi rekommenderar att du alltid ringer oss (<a href="tel:004631191919">031 - 19 19 19</a>) i förväg för att försäkra dig om att önskad match visas. 😊</p>

			<div class="sport-inf">
			
				Matcherna presenteras av <a href="https://tvmatchen.nu" target="_blank" ref="nofollow">TVMatchen.nu</a> <span class="material-icons sport-iconic">favorite</span>
			
			</div>

            <div class="sports wow pixFadeDown">
              <!-- today -->
              <div class="today">
                
                <div class="title-wrapper text-center">

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
