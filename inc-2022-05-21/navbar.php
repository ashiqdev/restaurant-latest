<header
  class="site-header header-two header_trans-fixed pix-header-fixed"
  data-top="92"
>
  <div class="container">
    <div
      class="header-inner header-centering"
     
    >
      <div class="site-mobile-logo">
        <a href="/" class="logo">
          <img
          width="1600" height="900"
            src="/bilder/logo/logo-grey.png"
            alt="site logo"
            class="main-logo"
          />

          <img
          width="1600" height="900"
            src="/bilder/logo/logo-grey.png"
            alt="site logo"
            class="sticky-logo disnone"
            
          />
        </a>
      </div>

      <!-- end of site-mobile-logo -->

      <div class="toggle-menu">
        <span class="bar"></span>

        <span class="bar"></span>

        <span class="bar"></span>
      </div>

      <button
        data-toggle="modal"
        data-target="#myModal"
        class="awesome-btn d-block d-lg-none awesome-ext"
        
      >
        <span>Boka</span>
      </button>

      <!-- end of toggle menu -->

      <nav class="site-nav nav-two">
        <div class="close-menu">
          <span>Stäng</span>

          <i class="ei ei-icon_close"></i>
        </div>

        <div class="site-logo">
          <a href="/" class="logo">
            <img
            width="1600" height="900"
              src="/bilder/logo/logo-grey.png"
              alt="site logo"
              class="main-logo"
            />

            <img
            width="1600" height="900"
              src="/bilder/logo/logo-grey.png"
              alt="site logo"
              class="sticky-logo disblock"
              
            />
          </a>
        </div>

        <div class="menu-wrapper" data-top="992">
          <ul class="site-main-menu">
            <li data-localize="menu.home">
              <a class="<?=($page == 'home') ? 'nav-active' : ''; ?>" href="/"
                >
           

                <span class="straight">
                <i class="material-icons" data-icon="home"></i>
                Home
               </span>
                </a
              >
            </li>

            <li data-localize="menu.sport">
              <a
                class="<?=($page == 'sport') ? 'nav-active' : ''; ?>"
                href="/sport/"
                >
                
               

                <span class="straight">
                  <i class="material-icons" data-icon="sports_soccer"></i>
                  Sport
                 </span>
                
                </a
              >
            </li>

            <li data-localize="menu.meny">
              <a
                class="<?=($page == 'meny') ? 'nav-active' : ''; ?>"
                href="/meny/"
                >
          

                <span class="straight">
                  <i class="material-icons" data-icon="restaurant_menu"></i>
                  Meny
                 </span>
                
                </a
              >
            </li>

            <li data-localize="menu.activity">
              <a
                class="<?=($page == 'activity') ? 'nav-active' : ''; ?>"
                href="/aktiviteter/"
                >
           

                <span class="straight">
                  <i class="material-icons" data-icon="games"></i>
                  Aktiviteter
                 </span>
                
                </a
              >
            </li>

            <li data-localize="menu.presentkort">
              <a
                class="<?=($page == 'presentkort') ? 'nav-active' : ''; ?>"
                href="/presentkort/"
                >
                
               

                <span class="straight">
                  <i class="material-icons" data-icon="card_giftcard"></i>
                   Presentkort
                 </span>
                
                
                </a
              >
            </li>
          </ul>

          <div class="nav-right">
            <button
              data-toggle="modal"
              data-target="#myModal"
              data-backdrop="static"
              data-keyboard="false"
              class="awesome-btn awesome-ext"
              
            >
              <span>Boka</span>
            </button>
          </div>

        </div>

        <!-- end of menu-wrapper -->
      </nav>

      <!-- end of site-nav -->
    </div>

    <!-- end of header-inner -->
  </div>

  <!-- end of container -->
</header>

<!-- /.site-header -->
