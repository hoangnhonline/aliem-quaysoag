<?php 
include 'dbconn.php';
$result = mysqli_query($conn, "SELECT * FROM call_action where id = 1");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Quay số đổi thưởng AG</title>
        
        <meta name="Title" content="Quay số đổi thưởng AG" />
        <meta name="description" content="Thử vận may với vòng quay AG. Trò chơi quay số may mắn có đổi thưởng dựa theo điểm xếp hạng. Chơi vui trúng lớn.">
        
        <!-- for Facebook -->
        <meta property="og:title" content="Quay số đổi thưởng AG"/>
        <meta property="og:site_name" content="Xổ Số AG - Nhận số đổi thưởng"/>
        <meta property="og:image" content="https://play.agcasino.com/quaysoag/share.jpg" />
        <meta property="og:url" content="https://play.agcasino.com/quaysoag/" />
        <meta property="og:description" content="Thử vận may với vòng quay AG. Trò chơi quay số may mắn có đổi thưởng dựa theo điểm xếp hạng. Chơi vui trúng lớn.">
        
        <!-- for Twitter -->
        <meta name="twitter:card" content="Xổ Số AG - Nhận số đổi thưởng" />
        <meta name="twitter:title" content="Quay số đổi thưởng AG" />
        <meta name="twitter:description" content="Thử vận may với vòng quay AG. Trò chơi quay số may mắn có đổi thưởng dựa theo điểm xếp hạng. Chơi vui trúng lớn." />
        <meta name="twitter:image" content="https://play.agcasino.com/quaysoag/share.jpg" />
        
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<script>
        if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
            var msViewportStyle = document.createElement("style");
            msViewportStyle.appendChild(
                document.createTextNode(
                    "@-ms-viewport{width:device-width}"
                )
            );
            document.getElementsByTagName("head")[0].
                appendChild(msViewportStyle);
        }
        </script>

        <link rel="shortcut icon" href="icon.ico" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css?family=Baloo+Tamma&amp;subset=vietnamese" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/score.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<!-- Facebook Pixel Code -->
		<script>
            <?php if($row['modal_off'] == 0 ){ ?>
            var timeShow = <?php echo $row['time_open']; ?>;
            var timeClose = <?php echo $row['time_close']; ?>;
            <?php } ?>
		  !function(f,b,e,v,n,t,s)
		  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		  n.queue=[];t=b.createElement(e);t.async=!0;
		  t.src=v;s=b.getElementsByTagName(e)[0];
		  s.parentNode.insertBefore(t,s)}(window, document,'script',
		  'https://connect.facebook.net/en_US/fbevents.js');
		  fbq('init', '2179950012233345');
		  fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
		  src="https://www.facebook.com/tr?id=2179950012233345&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Facebook Pixel Code -->
    </head>
    <body>
        <!-- PERCENT LOADER START-->
    	<div id="mainLoader"><img src="assets/loader.png" /><br><span>0</span></div>
        <!-- PERCENT LOADER END-->
        
        <!-- CONTENT START-->
        <div id="mainHolder">
        
        	<!-- BROWSER NOT SUPPORT START-->
        	<div id="notSupportHolder">
                <div class="notSupport">TRÌNH DUYỆT CỦA BẠN KHÔNG HỖ TRỢ.<br/>XIN VUI LÒNG THỬ TẠI TRÌNH DUYỆT KHÁC HOẶC NÂNG CẤP TRÌNH DUYỆT HIỆN TẠI</div>
            </div>
            <!-- BROWSER NOT SUPPORT END-->
            
            <!-- ROTATE INSTRUCTION START-->
            <div id="rotateHolder">
                <div class="mobileRotate">
                	<div class="rotateDesc">
                    	<div class="rotateImg"><img src="assets/rotate.png" /></div>
                        Xoay thiết bị <br/>nằm ngang
                    </div>
                </div>
            </div>
            <!-- ROTATE INSTRUCTION END-->
            
            <!-- CANVAS START-->
            <div id="canvasHolder">
                <canvas id="gameCanvas" width="1280" height="768"></canvas>
            </div>
            <!-- CANVAS END-->
            
        </div>
        <!-- CONTENT END-->
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.4.min.js"><\/script>')</script>
        
        <script src="js/vendor/detectmobilebrowser.js"></script>
        <script src="js/vendor/createjs-2015.11.26.min.js"></script>
		<script src="js/vendor/TweenMax.min.js"></script>
        <script src="js/vendor/p2.min.js"></script>
        
        <script src="js/plugins.js"></script>
        <script src="js/sound.js"></script>
        <script src="js/canvas.js"></script>
        <script src="js/p2.js"></script>
		<script src="js/game.js"></script>
		<script src="js/score.js"></script>
        <script src="js/mobile.js"></script>
        <script src="js/main.js"></script>
        <script src="js/loader.js"></script>
        <script src="js/init.js"></script>
		<script>(function(d,t,u,s,e){e=d.getElementsByTagName(t)[0];s=d.createElement(t);s.src=u;s.async=1;e.parentNode.insertBefore(s,e);})(document,'script','//chat.agcasino.com/php/app.php?widget-init.js');</script>
        <?php if($row['modal_off'] == 0 ){ ?>
        <div id="callActionModal" class="modalCallAction">

          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <?php 
            echo $row['content'];
            ?>
            <div style="clear:both;margin-top: 20px; text-align: center">
                <a href="<?php echo $row['btn1_url']; ?>" class="btnCallAction" style="background-color: <?php echo $row['btn1_color']; ?>" target="_blank"><?php echo $row['btn1_text']; ?></a>
                <a href="<?php echo $row['btn2_url']; ?>" class="btnCallAction" style="background-color: <?php echo $row['btn2_color']; ?>" target="_blank"><?php echo $row['btn2_text']; ?></a>
            </div>
          </div>

        </div>
        
        <script>        
        $(document).ready(function(){             
             $('span.close, .btnCallAction').click(function(){
                $('#callActionModal').hide();
            }); 
         });               
        </script>   
        <?php } ?>     
    </body>
    <!--
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-86567323-19', 'auto');
	  ga('send', 'pageview');
	
	</script> -->
</html>