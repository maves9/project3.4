

function onYouTubeIframeAPIReady() {
 var player;
 player = new YT.Player('main__video--iframe', {
   videoId: 'kDJl8wDb7t0', // YouTube Video ID

   playerVars: {
     autoplay: 1,        // Auto-play the video on load
     controls: 0,        // Show pause/play buttons in player
     showinfo: 0,        // Hide the video title
     modestbranding: 1,  // Hide the Youtube Logo
     loop: 2,            // Run the video in a loop
     fs: 0,              // Hide the full screen button
     cc_load_policy: 0, // Hide closed captions
     iv_load_policy: 1,  // Hide the Video Annotations
     autohide: 0         // Hide video controls when playing
   },
   events: {
     onReady: function(e) {
       e.target.mute();
     }
   }
 });
    
}


//seasonal cinamagraphs

//get season
function seas() {
var d = new Date();
var month = d.getMonth();
var month = 3;

    season = '';
    switch(month) {
        case 11:
        case 0:
        case 1:
            season = 'winter';
        break;
        case 2:
        case 3:
        case 4:
            season = 'spring';
        break;
        case 5:
        case 6:
        case 7:
            season = 'summer';
        break;
        case 8:
        case 9:
        case 10:
            season = 'fall';

        break;
    }
    console.log(season);
//do stuff


if (season == 'spring') {

  var url = 'url("../img/' + "birdflight_cine" + '.gif");';

  console.log(url);

  document.getElementById('cinemagraphs').style.backgroundImage = url;
  console.log(document.getElementById('cinemagraphs'));
  
};

}
