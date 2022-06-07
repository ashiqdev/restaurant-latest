var shortIntervalTime = 500;
var longIntervalTime = 5000;

var fireVideo = 'https://nordic.dnscheck.io/projector/video.mp4';
var firstAd = 'https://nordic.dnscheck.io/projector/video2.mp4';

var vdoList = [
  'https://nordic.dnscheck.io/projector/video3.mp4',
  'https://nordic.dnscheck.io/projector/video4.mp4',
];

var vdoListTwo = vdoList.slice(0);

console.log({ vdoListTwo });


function insertIntoArray(array, emptyArray = []) {
  array.forEach((item) => {
    emptyArray.push(item);
  });
  return emptyArray;
}

function cycle1(id, flag) {
  var nextId = id === 'block1' ? 'block2' : 'block1';

  $('#' + id)
    .delay(shortIntervalTime)
    .fadeIn(3000)
    .delay(longIntervalTime)
    .fadeOut(3000, function () {
      if (flag === true) {
        cycle1(nextId, false);
      } else {
        vdoList = insertIntoArray(vdoListTwo);
        console.log({ vdoList });
        addDisplay(firstAd, true, vdoList);
      }
    });
}

// load text and video
cycle1('block1', true);

function addDisplay(url, flag, urls) {
  var video = document.getElementsByTagName('video')[0];
  var sources = video.getElementsByTagName('source');
  // console.log({ source: sources[0].src });
  sources[0].src = url;
  $('.main').css('z-index', -10000);
  video.load();

  video.onended = function (e) {
    if (urls.length > 0) {
      const firstElement = urls.shift();
      console.log({ firstElement, urls });

      addDisplay(firstElement, true, urls);
    } else {
      console.log({ info: 'I am empty' });
      $('.main').css('z-index', 10000);
      sources[0].src = fireVideo;
      video.load();
      cycle1('block1', true);

      return;
    }
  };


  // urls.forEach(vdo => {
  //   video.onended = function(e) {
  //     if (flag === true) {
  //       addDisplay(vdo, false, []);
  //     } else {
  //       $('.main').css('z-index', 10000);
  //       $('#block1').hide();
  //       $('#block2').hide();
  //       sources[0].src = 'https://nordic.dnscheck.io/projector/video.mp4';
  //       console.log({ maruf: sources[0].src });
  //       video.load();
  //       cycle1('block1', true, vdo);
  //       console.log('--done--');
  //       return;

  //     }
  //     addDisplay(url, true, vdoList);
  //   }
  // })

  // video.onended = function (e) {

  //   urls.forEach(vdo => {

  //     // alert('video ended');
  //     if (flag === true) {
  //       addDisplay(vdo, false, []);
  //     } else {
  //       $('.main').css('z-index', 10000);
  //       $('#block1').hide();
  //       $('#block2').hide();
  //       sources[0].src = 'https://nordic.dnscheck.io/projector/video.mp4';
  //       console.log({ maruf: sources[0].src });
  //       video.load();
  //       cycle1('block1', true, vdo);
  //       console.log('--done--');

  //     }
  //   })
  // };

  // urls.forEach((vdo) => {
  //   console.log({ vdo });

  // });

  // video.onended = function (e) {
  //   // alert('video ended');
  //   if (flag === true) {
  //     addDisplay('https://nordic.dnscheck.io/projector/video3.mp4', false);
  //   } else {
  //     $('.main').css('z-index', 10000);
  //     $('#block1').hide();
  //     $('#block2').hide();
  //     sources[0].src = 'https://nordic.dnscheck.io/projector/video.mp4';
  //     console.log({ maruf: sources[0].src });
  //     video.load();
  //     cycle1('block1', true);
  //     console.log('--done--');
  //     return;
  //   }
  // };
}

// setTimeout(addDisplay('https://nordic.dnscheck.io/projector/video2.mp4'), 20000);

// setTimeout(() => {
//   addDisplay('https://nordic.dnscheck.io/projector/video2.mp4', true);
// }, 20000);
