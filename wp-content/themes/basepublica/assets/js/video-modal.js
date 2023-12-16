
(function($) {
$(window).on('load', function () {
    console.log("loaded cafe");
    var videoModal = $('#player-modal');

    var player = $('#video-player');
    var wWidth = $(window).width();
    var wHeight = $(window).height();
    var videoWidth = Math.round((wWidth/100)*80);
    var videoHeight = Math.round((wHeight/100)*80);

    player.width(videoWidth);
    player.height(videoHeight);
    console.log(wWidth);

    $('.programas-play, .comunidad-play').on('click', function(e) {
      event.preventDefault();
      var url;
      if($(this).find('a').length) {
        url = $(this).find('a').attr('rel');
      } else {
        url = $(this).data('url');
      }
      playVideo(url);
      
    });



    videoModal.on('hide.bs.modal', function (event) {
      player.attr('src', '');
    });

function playVideo(url) {

  console.log(url);
  var videoId = youtube_parser(url);
  console.log(videoId);
  if(videoId) {
    var ytUrl = "https://www.youtube.com/embed/" + videoId + "?autoplay=1";
    player.attr('src', ytUrl);
    videoModal.modal('show');
  }
}

});




})( jQuery );

function youtube_parser(url){
    var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/;
    var match = url.match(regExp);
    return (match&&match[7].length==11)? match[7] : false;
}
