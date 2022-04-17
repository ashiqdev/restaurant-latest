var wow = new WOW({
    boxClass: 'wow',
    animateClass: 'animated',
    offset: -200,
    mobile: true,
    live: !0,
    scrollContainer: null,
  });
  wow.init();
  var DEMOSIGNS = DEMOSIGNS || {};
  
  (DEMOSIGNS.initialize = {}),
    (DEMOSIGNS.documentOnReady = {
      init: function () {
        DEMOSIGNS.initialize.init();
      },
    }),
    
    $(document).ready(function () {
      $('.button-cta').click(function () {
          $('#myModal').hide(),
          $('.cross').show(),
          $('.holder').show(),
          $('#cut').show(),
          $('iframe').show();
      });
    }),
    
  
  $('.cross-bar').click(function (t) {
    $('#myModal .close').click(),
     
      
      Swal.fire({
        title: 'Är du klar med bokningen?',
        text: 'Dubbelkolla gärna så att din bokning är klar innan du stänger fönstret. 😊',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Avbryt',
        confirmButtonText: 'Stäng fönstret',
      }).then((result) => {
        if (result.isConfirmed) {
          $('.holder').hide();
        } else {
          document.getElementById('my-overlay').style.display = 'block';
          console.log('close me');
        }
      });
  
    document.getElementById('my-overlay').style.display = 'block';
  
    document.getElementById('my-overlay').style.display = 'none';
  
  });
  
  function launchBookingIframe() {
    $('#bookIframe').attr(
      'src',
      'https://cloud.caspeco.se/public/webBooking?isWebBooking=true&system=se_olemon&unitId=13&lang=sv-SE&height=auto&inIFrame=true&sectionIds=&advanced=true'
    );
  }
  
  $(document).ready(function () {
    if (window.location.hash == '#boka-online') {
      $('#btn-cta').click();
      launchBookingIframe();
      document.getElementById('my-overlay').style.display = 'block';
    }
  });
  
  $('#btn-cta').click(function () {
    launchBookingIframe();
  });
  
  // youtube
  
  if ($(window).width() > 1096) {
    var tag = document.createElement('script');
    tag.src = 'https://www.youtube.com/iframe_api';
  
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
  
    var player;
  
    function onYouTubeIframeAPIReady() {
      player = new YT.Player('player', {
        width: '100%',
        videoId: 'Zs0bsagDzw8',
        host: 'https://www.youtube.com',
        origin: window.location.href,
        playerVars: {
          autoplay: 1,
          playsinline: 1,
          playlist: 'Zs0bsagDzw8',
          frameborder: 0,
          controls: 0,
          showinfo: 0,
          allowfullscreen: 1,
        },
        events: {
          onReady: onPlayerReady,
          onStateChange: onPlayerStateChange,
        },
      });
    }
  
    function onPlayerReady(event) {
      event.target.mute();
      event.target.playVideo();
    }
  
    function onPlayerStateChange(event) {
      if (event.data === YT.PlayerState.ENDED) {
        player.playVideo();
      }
    }
  }
  
  window.addEventListener('load', (event) => {
    window.scrollTo(0, 0);
  });
  
  // sport lists
  const formatAndDisplayMatches = (mainArray) => {
    const todaysMatchList = mainArray
      .filter(
        (item) => new Date(item.date * 1000).getDate() === new Date().getDate()
      )
      .reverse();
  
    const tomorrowsMatchList = mainArray
      .filter(
        (item) =>
          new Date(item.date * 1000).getDate() === new Date().getDate() + 1
      )
      .reverse();
  
    const thirddDaysMatchList = mainArray
      .filter(
        (item) =>
          new Date(item.date * 1000).getDate() === new Date().getDate() + 2
      )
      .reverse();
  
    const fourthDaysMatchList = mainArray
      .filter(
        (item) =>
          new Date(item.date * 1000).getDate() === new Date().getDate() + 3
      )
      .reverse();
  
    const fifthDaysMatchList = mainArray
      .filter(
        (item) =>
          new Date(item.date * 1000).getDate() === new Date().getDate() + 4
      )
      .reverse();
  
    const sixthDaysMatchList = mainArray
      .filter(
        (item) =>
          new Date(item.date * 1000).getDate() === new Date().getDate() + 5
      )
      .reverse();
  
    const seventhDaysMatchList = mainArray
      .filter(
        (item) =>
          new Date(item.date * 1000).getDate() === new Date().getDate() + 6
      )
      .reverse();
  
    // title string
  
    var targetDate = new Date();
  
    const todayTitle = `${targetDate.toLocaleDateString('default', {
      weekday: 'long',
    })} (${targetDate.getDate()}/${targetDate.getMonth() + 1})`;
  
    targetDate.setDate(targetDate.getDate() + 1);
  
    const secondDayTitle = `${targetDate.toLocaleDateString('default', {
      weekday: 'long',
    })} (${targetDate.getDate()}/${targetDate.getMonth() + 1})`;
  
    targetDate.setDate(targetDate.getDate() + 1);
  
    const thirdDayTitle = `${targetDate.toLocaleDateString('default', {
      weekday: 'long',
    })} (${targetDate.getDate()}/${targetDate.getMonth() + 1})`;
  
    targetDate.setDate(targetDate.getDate() + 1);
  
    const fourthDayTitle = `${targetDate.toLocaleDateString('default', {
      weekday: 'long',
    })} (${targetDate.getDate()}/${targetDate.getMonth() + 1})`;
  
    targetDate.setDate(targetDate.getDate() + 1);
  
    const fifthDayTitle = `${targetDate.toLocaleDateString('default', {
      weekday: 'long',
    })} (${targetDate.getDate()}/${targetDate.getMonth() + 1})`;
  
    targetDate.setDate(targetDate.getDate() + 1);
  
    const sixthDayTitle = `${targetDate.toLocaleDateString('default', {
      weekday: 'long',
    })} (${targetDate.getDate()}/${targetDate.getMonth() + 1})`;
  
    targetDate.setDate(targetDate.getDate() + 1);
  
    const seventhDayTitle = `${targetDate.toLocaleDateString('default', {
      weekday: 'long',
    })} (${targetDate.getDate()}/${targetDate.getMonth() + 1})`;
  
    displayMatches(
      todaysMatchList,
      document.querySelector('.todays-list-container'),
      document.querySelector('.todays-title'),
      todayTitle
    );
  
    displayMatches(
      tomorrowsMatchList,
      document.querySelector('.tomorrows-list-container'),
      document.querySelector('.tomorrows-title'),
      secondDayTitle
    );
  
    displayMatches(
      thirddDaysMatchList,
      document.querySelector('.thirdDay-list-container'),
      document.querySelector('.thirdDay-title'),
      thirdDayTitle
    );
  
    displayMatches(
      fourthDaysMatchList,
      document.querySelector('.fourthDay-list-container'),
      document.querySelector('.fourthDay-title'),
      fourthDayTitle
    );
  
    displayMatches(
      fifthDaysMatchList,
      document.querySelector('.fifthDay-list-container'),
      document.querySelector('.fifthDay-title'),
      fifthDayTitle
    );
  
    displayMatches(
      sixthDaysMatchList,
      document.querySelector('.sixthDay-list-container'),
      document.querySelector('.sixthDay-title'),
      sixthDayTitle
    );
  
    displayMatches(
      seventhDaysMatchList,
      document.querySelector('.seventhDay-list-container'),
      document.querySelector('.seventhDay-title'),
      seventhDayTitle
    );
  
    function displayMatches(matches, container, titleDiv, titleString) {
      if (matches.length < 1) {
        return false;
      }
  
      titleDiv.style.backgroundColor = '#02aab0';
      titleDiv.innerHTML = `
      <span class="straight-me">
          ${titleString}
      </span>
      `;
  
      matches.map((game) => {
        const html = `
        <div class="sport__list">
          ${
            game.swedish
              ? `<div class="flag-container">
    <div class="flag-background"></div>
    <div class="flag-horizontal-stripe"></div>
    <div class="flag-vertical-stripe"></div>
    
  </div>`
              : ''
          }
         <div class="sports-info">
            <div class="company-logo">
            <span class="match"
              ><img class="sport-picture"   
                alt="sport picture"
                src="${
                  game.sport === 'Fotboll'
                    ? '/bilder/soccer-updated.svg'
                    : game.sport === 'Handboll'
                    ? '/bilder/handball.svg'
                    : game.sport === 'Ishockey'
                    ? '/bilder/hockey-updated.svg'
                    : game.sport === 'Innebandy'
                    ? '/bilder/floor.svg'
                    : game.sport === 'Skidor'
                    ? '/bilder/ski.svg'
                    : game.sport === 'Snooker'
                    ? '/bilder/snoker-updated.svg'
                    : game.sport === 'Basket'
                    ? '/bilder/basket-updated.png'
                    : game.sport === 'Tennis'
                    ? '/bilder/tennis.svg'
                    : game.sport === 'Golf'
                    ? '/bilder/golf.svg'
                    : game.sport === 'Amerikansk-fotboll'
                    ? '/bilder/rugby.svg'
                    : game.sport === 'Motorsport'
                    ? '/bilder/moto.svg'
                    : '/bilder/soccer-updated.svg'
                }"
            /></a>
          </div>
          <div class="info">
            <h4 class="sports-title important-title">
              <span class="matchName">${game.name}</span>
              ${
                game.important
                  ? `<span class="material-icons star-material">whatshot</span>`
                  : ''
              }
               ${
           game.swedish
             ? `<span class="material-icons heart-material">favorite_border</span>`
             : ''
         }
              
            </h4>
            <p class="designation">${
              new Date(game.date * 1000).getHours() < 10 ? '0' : ''
            }${new Date(game.date * 1000).getHours()}:${
          new Date(game.date * 1000).getMinutes() < 10 ? '0' : ''
        }${new Date(game.date * 1000).getMinutes()} - (${game.league})</p>
          </div>
  
         
        </div>
  
  
       ${
         game.live
           ? `
         <div class="sport-location">
           <span>live</span>
           <span class="card__icon"></span>
         </div>
         
         `
           : ''
       }
      
  
      
  
       
      </div>
  
           `;
  
        console.log(new Date(game.date * 1000).getHours());
  
        container.insertAdjacentHTML('beforeend', html);
      });
    }
  };
  
  if ($('.sportlist')[0]) {
    fetch('https://nordicsportsbar.se/sport/getGames.php')
      .then((response) => response.json())
      .then((data) => formatAndDisplayMatches(data));
  }
  
  function checkGiftcard() {
    console.log(response);
  }
  
  /* Check giftcard */
  $('#checkGiftcard').submit(function () {
    var giftcardNumber = $('#giftcardNumber').val();
  
    if (!giftcardNumber) {
      Swal.fire({
        icon: 'error',
        title: 'Ojdå...',
        text: 'Det verkar som att du inte skrev in något i presentkortsrutan.',
      });
    } else {
      Swal.showLoading();
  
      $.ajax({
        url:
          'https://nordicsportsbar.se/presentkort/control/?id=' + giftcardNumber,
  
        complete: function (data) {
          Swal.hideLoading();
          var statusArray = data.responseJSON;
          console.log(statusArray);
  
          if (statusArray.error == 'expired') {
            Swal.fire({
              icon: 'error',
              title: 'Ojdå...',
              text: 'Det verkar som att detta presentkortet gått ut, kontakta oss på 031 - 19 19 19 så försöker vi hjälpa dig.',
            });
          }
  
          if (statusArray.error == 'invalid') {
            Swal.fire({
              icon: 'error',
              title: 'Ojdå...',
              text: 'Detta presentkort verkar inte fungera, kontakta oss på 031 - 19 19 19 för mer information.',
            });
          }
  
          if (statusArray.success == 'activated') {
            Swal.fire({
              icon: 'success',
              title: 'Information',
              text: 'Saldot på ditt kort är ' + statusArray.value + ':-',
              footer: 'Ditt presentkort slutar fungera ' + statusArray.expiryDate,
            });
          }
  
          if (statusArray.error == 'ratelimit') {
            Swal.fire({
              icon: 'error',
              title: 'Ojdå...',
              text: 'Du har kontrollerat för många presentkort, försök igen om en stund eller ring oss på 031 - 19 19 19 😊',
            });
          }
        },
      });
    }
  
    return false;
  });
  
  
  // header
  
  !(function (e, n, a) {
    'use strict';
    function s() {
      var a,
        s = e('.site-header').not('.header_trans-fixed').outerHeight(),
        i = e('.menu-wrapper').data('top'),
        t = e('#wpadminbar').outerHeight();
      e('#wpadminbar').length
        ? ((a = t + s), e('.site-header').css('margin-top', t))
        : (a = s),
        e(n).width() < i
          ? e('.menu-wrapper').css('padding-top', a + 'px')
          : e('#wpadminbar').length &&
            e('.site-header').hasClass('header_trans-fixed')
          ? e('.menu-wrapper').css('padding-top', t + 'px')
          : e('.menu-wrapper').css('padding-top', '0'),
        e('#wpadminbar').length &&
          e(n).width() < 768 &&
          e('#wpadminbar').css({ position: 'fixed', top: '0' });
    }
    function i() {
      var a = e('.menu-wrapper').attr('data-top');
      n.outerWidth < a || e('.site-header').hasClass('topmenu-arrow')
        ? (e('.menu-item-has-children i').length ||
            (e('header .menu-item-has-children').append(
              '<i class="fa fa-angle-down"></i>'
            ),
            e('header .menu-item-has-children i').addClass('hide-drop')),
          e('header .menu-item-has-children i').on('click', function () {
            e(this).hasClass('animation') ||
              (e(this).parent().toggleClass('is-open'),
              e(this).addClass('animation'),
              e(this)
                .parent()
                .siblings()
                .removeClass('is-open')
                .find('.fa')
                .removeClass('hide-drop')
                .prev('.sub-menu')
                .slideUp(250),
              e(this).hasClass('hide-drop')
                ? (e(this).closest('.sub-menu').length ||
                    e('.menu-item-has-children i')
                      .addClass('hide-drop')
                      .next('.sub-menu')
                      .hide(250),
                  e(this)
                    .removeClass('hide-drop')
                    .prev('.sub-menu')
                    .slideToggle(250))
                : e(this)
                    .addClass('hide-drop')
                    .prev('.sub-menu')
                    .hide(100)
                    .find('.menu-item-has-children a')
                    .addClass('hide-drop')
                    .prev('.sub-menu')
                    .hide(250)),
              setTimeout(function () {
                e('header .site-main-menu i').removeClass('animation');
              }, 250);
          }))
        : e('header .menu-item-has-children i').remove();
    }
    function t() {
      var n = e('#wpadminbar').length ? e('#wpadminbar').outerHeight() : 0;
      e('.additional-inner-wrap').css('top', n + 'px');
    }
    e(n).on('scroll load', function () {
      e('.site-header.header_trans-fixed').length &&
        (e('.site-header.header_trans-fixed')
          .not('.fixed-dark')
          .addClass('pix-header-fixed'),
        e('.fixed-dark').addClass('bg-fixed-dark'),
        e('.sticky-logo, .header-button-scroll').show(),
        e('.main-logo, .header-button-default').hide()),
        e('.right-menu.modern').length &&
          e('.right-menu.modern')
            .closest('.fixed-header')
            .addClass('fixed-header-scroll');
    }),
      e(n).width() >= e('.menu-wrapper').data('top') &&
        e('.site-main-menu li:not(.menu-item-has-children) > a[href^="#"]').on(
          'click',
          function (n) {
            n.preventDefault();
            var a = e(this).attr('href');
            e(a).length &&
              e('html,body').animate(
                {
                  scrollTop:
                    e(a).offset().top -
                    e('.header_trans-fixed').outerHeight() -
                    e('#wpadminbar').outerHeight(),
                },
                'slow'
              );
          }
        ),
      e('.open-search').on('click', function () {
        e('body').css('overflow', 'hidden'), e('.site-search').addClass('open');
      }),
      e('.close-search').on('click', function () {
        e('body').css('overflow', ''), e('.site-search').removeClass('open');
      }),
      e('.toggle-menu').on('click', function (a) {
        a.preventDefault();
        e('<div class="mask-overlay">').hide().appendTo('body').fadeIn('fast'),
          e('html')
            .addClass('no-scroll sidebar-open')
            .height(n.innerHeight + 'px'),
          e('#wpadminbar').length
            ? e('.sidebar-open .site-nav').css('top', '46px')
            : e('.sidebar-open .site-nav').css('top', '0');
      }),
      e('.close-menu, .mask-overlay').on('click', function (n) {
        n.preventDefault(),
          e('html').removeClass('no-scroll sidebar-open').height('auto'),
          e('.mask-overlay').remove();
      }),
      e('.search-icon-wrapper.ico-style .close-search').on('click', function () {
        e(this).parent().toggleClass('is-active'),
          e(this).parent().hasClass('is-active') &&
            setTimeout(function () {
              e('.search-icon-wrapper.ico-style .search-field').focus();
            }, 300);
      }),
      e(a).on('click', function (n) {
        e(n.target).closest('.search-icon-wrapper.ico-style').length ||
          e('.ico-style .close-search').parent().removeClass('is-active'),
          n.stopPropagation();
      }),
      e('.additional-nav').on('click', function (n) {
        n.preventDefault(),
          e('.additional-menu-wrapper').addClass('menu-open'),
          e('.menu-wrapper').addClass('additional-menu-open');
      }),
      e('.additional-nav-close, .additional-menu-overlay').on(
        'click',
        function () {
          e('.additional-menu-wrapper').removeClass('menu-open'),
            e('.menu-wrapper').removeClass('additional-menu-open');
        }
      ),
      e(n).on('load', function () {
        !(function () {
          e('.aside-nav').on('click', function () {
            return (
              e('.aside-menu').toggleClass('active-menu'),
              e('.site-header').toggleClass('active-menu'),
              !1
            );
          }),
            e('.menu-wrapper:not(.unit) .menu-item-has-children > a').on(
              'click',
              function (e) {
                e.preventDefault();
              }
            );
          var a = e('.menu-wrapper').data('top');
          if (
            (n.outerWidth >= a
              ? (e('.menu-wrapper').on('click', function (n) {
                  n.target.closest('.aside-menu') ||
                    e('.sub-menu-open').slideUp(250);
                }),
                e('.aside-menu .menu-item-has-children a').addClass('hide-drop'),
                e('.aside-menu .menu-item a').on('click', function () {
                  e(this).parent().hasClass('menu-item-has-children') &&
                    (e(this).hasClass('hide-drop')
                      ? e(this).closest('.sub-menu').length
                        ? (e(this)
                            .removeClass('hide-drop')
                            .next('.sub-menu')
                            .slideDown(250)
                            .removeClass('sub-menu-open'),
                          e(this)
                            .parent()
                            .siblings()
                            .find('.sub-menu')
                            .slideUp(250)
                            .addClass('sub-menu-open'))
                        : (e('.menu-item-has-children a')
                            .addClass('hide-drop')
                            .next('.sub-menu')
                            .hide(250)
                            .removeClass('sub-menu-open'),
                          e(this)
                            .removeClass('hide-drop')
                            .next('.sub-menu')
                            .slideToggle(250)
                            .toggleClass('sub-menu-open'))
                      : (e(this)
                          .addClass('hide-drop')
                          .next('.sub-menu')
                          .hide(250)
                          .find('.menu-item-has-children a')
                          .addClass('hide-drop')
                          .next('.sub-menu')
                          .hide(250),
                        e(this).next('.sub-menu').removeClass('sub-menu-open')));
                }))
              : e('.menu-item-has-children a').removeClass('hide-drop'),
            e('.aside-fix').length && e(n).width() > a)
          ) {
            var s = e('.logo span, .logo img').outerWidth();
            e('.logo').css('top', s + 'px');
          }
        })();
      }),
      e(n).on('scroll', function () {}),
      e(n).on('load resize', function () {
        s(), i(), t();
      }),
      n.addEventListener('orientationchange', function () {
        t(), s(), i();
      });
  })(jQuery, window, document);