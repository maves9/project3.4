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
