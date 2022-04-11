<header
  class="site-header header-two header_trans-fixed pix-header-fixed"
  data-top="92"
>
  <div class="container">
    <div
      class="header-inner"
      style="
        display: flex;

        justify-content: space-between;

        align-items: center;
      "
    >
      <div class="site-mobile-logo">
        <a href="/" class="logo">
          <img
            src="/bilder/logo/logo-grey.png"
            alt="site logo"
            class="main-logo"
          />

          <img
            src="/bilder/logo/logo-grey.png"
            alt="site logo"
            class="sticky-logo"
            style="display: none"
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
        class="awesome-btn d-block d-lg-none"
        style="width: auto; padding: 8px 30px; font-size: 20px"
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
              src="/bilder/logo/logo-grey.png"
              alt="site logo"
              class="main-logo"
            />

            <img
              src="/bilder/logo/logo-grey.png"
              alt="site logo"
              class="sticky-logo"
              style="display: block"
            />
          </a>
        </div>

        <div class="menu-wrapper" data-top="992">
          <ul class="site-main-menu">
            <li data-localize="menu.home">
              <a class="<?=($page == 'home') ? 'nav-active' : ''; ?>" href="/"
                >
                <span class="straight"><span style="vertical-align:middle;font-size:24px;" class="material-icons">home</span> Hem</span>
                
                </a
              >
            </li>

            <li data-localize="menu.sport">
              <a
                class="<?=($page == 'sport') ? 'nav-active' : ''; ?>"
                href="/sport/"
                ><span class="straight"><span style="vertical-align:middle;font-size:24px;" class="material-icons">sports_soccer</span> Sport</span></a
              >
            </li>

            <li data-localize="menu.meny">
              <a
                class="<?=($page == 'meny') ? 'nav-active' : ''; ?>"
                href="/meny/"
                ><span class="straight"><span style="vertical-align:middle;font-size:24px;" class="material-icons">restaurant_menu</span> Meny</span></a
              >
            </li>

            <li data-localize="menu.activity">
              <a
                class="<?=($page == 'activity') ? 'nav-active' : ''; ?>"
                href="/aktiviteter/"
                ><span class="straight"><span style="vertical-align:middle;font-size:24px;" class="material-icons">games</span> Aktiviteter</span></a
              >
            </li>

            <li data-localize="menu.presentkort">
              <a
                class="<?=($page == 'presentkort') ? 'nav-active' : ''; ?>"
                href="/presentkort/"
                ><span class="straight"><span style="vertical-align:middle;font-size:24px;" class="material-icons">card_giftcard</span> Presentkort</span></a
              >
            </li>
          </ul>

          <div class="nav-right">
            <button
              data-toggle="modal"
              data-target="#myModal"
              data-backdrop="static"
              data-keyboard="false"
              class="awesome-btn"
              style="width: auto; padding: 8px 30px; font-size: 20px"
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
