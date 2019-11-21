<?php
 $hamza = rand(1,300) ;


    // Coded by kious hamza
$arab = array('video-waw.xx.fbcdn.net','video-a-atl.xx.fbcdn.net','video-a-dfw.xx.fbcdn.net','video-a-iad.xx.fbcdn.net','video-a-lax.xx.fbcdn.net','video-a-lga.xx.fbcdn.net','video-a-mia.xx.fbcdn.net','video-a-sea.xx.fbcdn.net','video-a-sjc.xx.fbcdn.net','video-a.xx.fbcdn.net','video-b-dfw.xx.fbcdn.net','video-b-iad.xx.fbcdn.net','video-b-lga.xx.fbcdn.net','video-b-mia.xx.fbcdn.net','video-b-sjc.xx.fbcdn.net','video.xx.fbcdn.net','video-a-ams.xx.fbcdn.net','video-a-atl.xx.fbcdn.net','video-a-cdg.xx.fbcdn.net','video-a-dfw.xx.fbcdn.net','video-a-gru.xx.fbcdn.net','video-a-iad.xx.fbcdn.net','video-a-lax.xx.fbcdn.net','video-a-lga.xx.fbcdn.net','video-a-lhr.xx.fbcdn.net','video-a-mad.xx.fbcdn.net','video-a-mia.xx.fbcdn.net','video-a-mxp.xx.fbcdn.net','video-a-pao.xx.fbcdn.net','video-a-sea.xx.fbcdn.net','video-a-sin.xx.fbcdn.net','video-a-sjc.xx.fbcdn.net','video-a-vie.xx.fbcdn.net','video-a.xx.fbcdn.net','video-ams.xx.fbcdn.net','video-atl.xx.fbcdn.net','video-b-ams.xx.fbcdn.net','video-b-atl.xx.fbcdn.net','video-b-cdg.xx.fbcdn.net','video-b-dfw.xx.fbcdn.net','video-b-fra.xx.fbcdn.net','video-b-gru.xx.fbcdn.net','video-b-hkg.xx.fbcdn.net','video-b-lax.xx.fbcdn.net','video-b-lga.xx.fbcdn.net','video-b-lhr.xx.fbcdn.net','video-b-mad.xx.fbcdn.net','video-b-mia.xx.fbcdn.net','video-b-mxp.xx.fbcdn.net','video-b-sea.xx.fbcdn.net','video-b-sin.xx.fbcdn.net','video-b-sjc.xx.fbcdn.net','video-b-vie.xx.fbcdn.net','video-b.xx.fbcdn.net','video-cdg.xx.fbcdn.net','video-dfw.xx.fbcdn.net','video.xx.fbcdn.net','video-fra.xx.fbcdn.net','video-gru.xx.fbcdn.net','video-iad3-1.xx.fbcdn.net','video-lax.xx.fbcdn.net','video-lax3-1.xx.fbcdn.net','video-lga.xx.fbcdn.net','video-lga3-1.xx.fbcdn.net','video-lhr.xx.fbcdn.net','video-mia.xx.fbcdn.net','video-mxp.xx.fbcdn.net','video-sea.xx.fbcdn.net','video-sin.xx.fbcdn.net','video-sjc.xx.fbcdn.net','video-vie.xx.fbcdn.net','video-a-ams.xx.fbcdn.net','video-a-atl.xx.fbcdn.net','video-a-cdg.xx.fbcdn.net','video-a-dfw.xx.fbcdn.net','video-a-iad.xx.fbcdn.net','video-a-lax.xx.fbcdn.net','video-a-lga.xx.fbcdn.net','video-a-lhr.xx.fbcdn.net','video-a-mad.xx.fbcdn.net','video-a-mia.xx.fbcdn.net','video-a-mxp.xx.fbcdn.net','video-a-sea.xx.fbcdn.net','video-a-sjc.xx.fbcdn.net','video-a-vie.xx.fbcdn.net','video-b-ams.xx.fbcdn.net','video-b-atl.xx.fbcdn.net','video-b-cdg.xx.fbcdn.net','video-b-dfw.xx.fbcdn.net','video-b-iad.xx.fbcdn.net','video-b-lax.xx.fbcdn.net','video-b-lga.xx.fbcdn.net','video-b-lhr.xx.fbcdn.net','video-b-mad.xx.fbcdn.net','video-b-mia.xx.fbcdn.net','video-b-mxp.xx.fbcdn.net','video-b-sea.xx.fbcdn.net','video-b-sjc.xx.fbcdn.net','video-b-vie.xx.fbcdn.net','video-mad.xx.fbcdn.net','video-mad1-1.xx.fbcdn.net','video-a-mad.xx.fbcdn.net','video-b-mad.xx.fbcdn.net','video-gru.xx.fbcdn.net','video-gru2-1.xx.fbcdn.net');
$rand = rand(0,100);

    ?>





<div class="content col-md-12">


                <div class="embed-responsive embed-responsive-16by9">
  <div id="player-clappr-live" class="embed-responsive-item"></div>
</div>
   

               

                 
                
    <!-- clappr player -->
     <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"></script>
   <script src="http://www.alkass.net/alkass/assets/vendor/jquery/jquery.min.js"></script>
   <script>


       var player = new Clappr.Player({
           source: "https://<?php echo $arab[$rand];?>/hvideo-ash<?php echo $hamza ; ?>/v/rZHvZotCVOUKk2G9hM_zE/live-dash/dash-abr4/2027640860694648_0.mpd?lvp=1&_nc_rl=AfA030Pr64KjZtiz&oh=25e9b2f93bdd510ce6578e120ea7668b&oe=5CBDE53E",
           poster: "images/live-splashscreen.jpg",
           mimeType: "application/vnd.apple.mpegurl",
           mute: false,
           autoPlay: true,
           height: "100%",
           width: "100%",
           parentId: "#player-clappr-live"
       });



  

   </script>










