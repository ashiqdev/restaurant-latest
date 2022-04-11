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
(DEMOSIGNS.initialize = {
  init: function () {
    DEMOSIGNS.initialize.sectionBackground(),
      DEMOSIGNS.initialize.swiperSlider();
  },
  sectionBackground: function () {
    $('[data-bg-image]').each(function () {
      var t = $(this).data('bg-image');
      $(this).css({ backgroundImage: 'url(' + t + ')' });
    });
  },
  swiperSlider: function () {
    $('.swiper-container').each(function () {
      var t = $(this),
        n = ($(this).attr('id'), $(this).data('perpage') || 1),
        e = $(this).data('loop') || !0,
        i = $(this).data('speed') || 700,
        d = $(this).data('autoplay') || 5e3,
        a = $(this).data('slidegroup') || 1,
        o = $(this).data('space') || 0,
        r = $(this).data('effect'),
        c = $(this).data('direction') || 'horizontal',
        l = $(this).data('breakpoints');
      new Swiper(t, {
        autoHeight: !0,
        height: 500,
        slidesPerView: n,
        spaceBetween: o,
        slidesPerGroup: a,
        loop: e,
        speed: i,
        effect: r,
        direction: c,
        breakpoints: l,
        watchSlidesVisibility: !0,
        slideVisibleClass: 'swiper-slide-visible',
        autoplay: { delay: d, disableOnInteraction: !1 },
        pagination: { el: '.swiper-pagination', clickable: !0 },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    });
  },
}),
  (DEMOSIGNS.documentOnReady = {
    init: function () {
      DEMOSIGNS.initialize.init();
    },
  }),
  $(document).ready(function () {
    $('#testme').show();
  }),
  $(document).ready(function () {
    $('.button-cta').click(function () {
      $('#myModal').hide(),
        $('#myModal2').hide(),
        $('#myModal3').hide(),
        $('.cross').show(),
        $('.holder').show(),
        $('#cut').show(),
        $('iframe').show();
    });
  }),
  $('#my-overlay').click(function (t) {
    console.log('paisi');
  });

$('.cross-bar').click(function (t) {
  // $('.modal-backdrop.fade.show').hide(),
  // $('.iframe').hide(),
  // $('.cross').hide(),
  $('#myModal .close').click(),
    $('#myModal2 .close').click(),
    $('#myModal3 .close').click(),
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

  // $('#cut').hide();
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

if($(window).width() > 1096){

	var tag = document.createElement('script');
	tag.src = 'https://www.youtube.com/iframe_api';

	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

	var player;

	function onYouTubeIframeAPIReady() {
	  player = new YT.Player('player', {
		width: '100%',
		videoId: '2OnHAgWuSe0',
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
		  onStateChange: onPlayerStateChange
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
  
  const todayTitle = `${targetDate.toLocaleDateString("default", {
    weekday: "long",
  })} (${targetDate.getDate()}/${targetDate.getMonth() + 1})`;
  
  targetDate.setDate(targetDate.getDate() + 1);


  const secondDayTitle = `${targetDate.toLocaleDateString("default", {
    weekday: "long",
  })} (${targetDate.getDate()}/${targetDate.getMonth() + 1})`;

	targetDate.setDate(targetDate.getDate() + 1);
	
  const thirdDayTitle = `${targetDate.toLocaleDateString("default", {
    weekday: "long",
  })} (${targetDate.getDate()}/${targetDate.getMonth() + 1})`;
  
  targetDate.setDate(targetDate.getDate() + 1);

  const fourthDayTitle = `${targetDate.toLocaleDateString("default", {
    weekday: "long",
  })} (${targetDate.getDate()}/${targetDate.getMonth() + 1})`;
  
  targetDate.setDate(targetDate.getDate() + 1);

  const fifthDayTitle = `${targetDate.toLocaleDateString("default", {
    weekday: "long",
  })} (${targetDate.getDate()}/${targetDate.getMonth() + 1})`;
  
  targetDate.setDate(targetDate.getDate() + 1);

  const sixthDayTitle = `${targetDate.toLocaleDateString("default", {
    weekday: "long",
  })} (${targetDate.getDate()}/${targetDate.getMonth() + 1})`;
  
  targetDate.setDate(targetDate.getDate() + 1);

  const seventhDayTitle = `${targetDate.toLocaleDateString("default", {
    weekday: "long",
  })} (${targetDate.getDate()}/${targetDate.getMonth() + 1})`;

  displayMatches(
    todaysMatchList,
    document.querySelector(".todays-list-container"),
    document.querySelector(".todays-title"),
    todayTitle
  );

  displayMatches(
    tomorrowsMatchList,
    document.querySelector(".tomorrows-list-container"),
    document.querySelector(".tomorrows-title"),
    secondDayTitle
  );

  displayMatches(
    thirddDaysMatchList,
    document.querySelector(".thirdDay-list-container"),
    document.querySelector(".thirdDay-title"),
    thirdDayTitle
  );

  displayMatches(
    fourthDaysMatchList,
    document.querySelector(".fourthDay-list-container"),
    document.querySelector(".fourthDay-title"),
    fourthDayTitle
  );

  displayMatches(
    fifthDaysMatchList,
    document.querySelector(".fifthDay-list-container"),
    document.querySelector(".fifthDay-title"),
    fifthDayTitle
  );

  displayMatches(
    sixthDaysMatchList,
    document.querySelector(".sixthDay-list-container"),
    document.querySelector(".sixthDay-title"),
    sixthDayTitle
  );

  displayMatches(
    seventhDaysMatchList,
    document.querySelector(".seventhDay-list-container"),
    document.querySelector(".seventhDay-title"),
    seventhDayTitle
  );

  function displayMatches(matches, container, titleDiv, titleString) {
	  
	if(matches.length < 1){
		
		return false;
		
	}
	  
    titleDiv.style.backgroundColor = "#02aab0";
    titleDiv.innerHTML = `
    <span class="straight-me">
        ${titleString}
    </span>
    `;

    matches.map((game) => {
      const html = `
      <div class="sport__list">
        ${game.swedish ? `<div class="flag-container">
  <div class="flag-background"></div>
  <div class="flag-horizontal-stripe"></div>
  <div class="flag-vertical-stripe"></div>
  
</div>` : ''}
       <div class="sports-info">
          <div class="company-logo">
          <span class="match"
            ><img class="sport-picture"   
              alt="sport picture"
              src="${
                game.sport === "Fotboll"
                  ? "/bilder/soccer-updated.svg"
                  : game.sport === "Handboll"
                  ? "/bilder/handball.svg"
                  : game.sport === "Ishockey"
                  ? "/bilder/hockey-updated.svg"
                  : game.sport === "Innebandy"
                  ? "/bilder/floor.svg"
                  : game.sport === "Skidor"
                  ? "/bilder/ski.svg"
                  : game.sport === "Snooker"
                  ? "/bilder/snoker-updated.svg"
                  : game.sport === "Basket"
                  ? "/bilder/basket-updated.png"
                  : game.sport === "Tennis"
                  ? "/bilder/tennis.svg"
                  : game.sport === "Golf"
                  ? "/bilder/golf.svg"
                  : game.sport === "Amerikansk-fotboll"
                  ? "/bilder/rugby.svg"
                  : game.sport === 'Motorsport' ? '/bilder/moto.svg'
                  : "/bilder/soccer-updated.svg"
              }"
          /></a>
        </div>
        <div class="info">
          <h4 class="sports-title important-title">
            <span class="matchName">${game.name}</span>
            ${game.important ? `<span class="material-icons star-material">whatshot</span>` : ''}
			 ${game.swedish ? `<span class="material-icons heart-material">favorite_border</span>` : ''}
            
          </h4>
          <p class="designation">${
            new Date(game.date * 1000).getHours() < 10 ? "0" : ""
          }${new Date(game.date * 1000).getHours()}:${
        new Date(game.date * 1000).getMinutes() < 10 ? "0" : ""
      }${new Date(game.date * 1000).getMinutes()} - (${game.league})</p>
        </div>

       
      </div>


     ${game.live ? (
       `
       <div class="sport-location">
         <span>live</span>
         <span class="card__icon"></span>
       </div>
       
       `
     ) : ''}
    

    

     
    </div>

         `;

		console.log(new Date(game.date * 1000).getHours());

      container.insertAdjacentHTML("beforeend", html);

     
    });
  }
};

if($(".sportlist")[0]){
	
	fetch(
	  "https://nordicsportsbar.se/sport/getGames.php"
	)
	  .then((response) => response.json())
	  .then((data) => formatAndDisplayMatches(data));
	  
}

function checkGiftcard(){
	
	console.log(response);
	
}

/* Check giftcard */
$("#checkGiftcard").submit(function(){
	
	var giftcardNumber = $("#giftcardNumber").val();
	
	if(!giftcardNumber){
		
		Swal.fire({
		  icon: 'error',
		  title: 'Ojdå...',
		  text: 'Det verkar som att du inte skrev in något i presentkortsrutan.',
		});
		
	}
	
	else{
		
		Swal.showLoading();
		
		$.ajax({
	
			url: "https://nordicsportsbar.se/sport/control.php?id=" + giftcardNumber,
			
			complete: function(data){
				
				Swal.hideLoading();
				var statusArray = data.responseJSON;
				console.log(statusArray);

				if(statusArray.error == "expired"){
					
					Swal.fire({
					  icon: 'error',
					  title: 'Ojdå...',
					  text: 'Det verkar som att detta presentkortet gått ut, kontakta oss på 031 - 19 19 19 så försöker vi hjälpa dig.',
					});
					
				}
				
				if(statusArray.error == "invalid"){
					
					Swal.fire({
					  icon: 'error',
					  title: 'Ojdå...',
					  text: 'Detta presentkort verkar inte fungera, kontakta oss på 031 - 19 19 19 för mer information.',
					});
					
				}
				
				if(statusArray.success == "activated"){

					Swal.fire({
					  icon: 'success',
					  title: 'Information',
					  text: 'Saldot på ditt kort är ' + statusArray.value + ':-',
					  footer: 'Ditt presentkort slutar fungera ' + statusArray.expiryDate
					});
				
				}
				
				if(statusArray.error == "ratelimit"){
					
					Swal.fire({
					  icon: 'error',
					  title: 'Ojdå...',
					  text: 'Du har kontrollerat för många presentkort, försök igen om en stund eller ring oss på 031 - 19 19 19 😊',
					});
					
				}
				
			}

		});
		
		
	}
	

	
	return false;
	
});