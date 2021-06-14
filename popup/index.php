<?php

$tiktok = $_GET['sub3'];
$ga = urldecode($_GET['sub4']);
$fb = $_GET['sub5'];

$splitGA = explode('/', $ga);

?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap&subset=cyrillic" rel="stylesheet">
    <link rel="icon" href="favicon.ico">
    <title>Nu poți suna chiar acum?</title>
    <?php if (!empty($fb)) { ?> <script>!function(e,t,n,c,o,a,f){e.fbq||(o=e.fbq=function(){o.callMethod?o.callMethod.apply(o,arguments):o.queue.push(arguments)},e._fbq||(e._fbq=o),o.push=o,o.loaded=!0,o.version="2.0",o.queue=[],(a=t.createElement(n)).async=!0,a.src="https://connect.facebook.net/en_US/fbevents.js",(f=t.getElementsByTagName(n)[0]).parentNode.insertBefore(a,f))}(window,document,"script"),fbq("init","<?php echo $fb; ?>"),fbq("track","PageView")</script> <?php } ?> <?php if (!empty($ga)) { ?> <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $splitGA[0]; ?>"></script> <script>function gtag(){dataLayer.push(arguments)}window.dataLayer=window.dataLayer||[],gtag("js",new Date),gtag("config","<?php echo $splitGA[0]; ?>")</script> <script>function gtag_report_conversion(n){return gtag("event","conversion",{send_to:"<?php echo $ga; ?>",event_callback:function(){void 0!==n&&(window.location=n)}}),!1}</script> <?php } ?> <?php if (!empty($tiktok)) { ?> <script>!function(t,e,n){t.TiktokAnalyticsObject=n;var o=t.ttq=t.ttq||[];o.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],o.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<o.methods.length;i++)o.setAndDefer(o,o.methods[i]);o.instance=function(t){for(var e=o._i[t]||[],n=0;n<o.methods.length;n++)o.setAndDefer(e,o.methods[n]);return e},o.load=function(t,e){var i="https://analytics.tiktok.com/i18n/pixel/events.js";o._i=o._i||{},o._i[t]=[],o._i[t]._u=i,o._t=o._t||{},o._t[t]=+new Date,o._o=o._o||{},o._o[t]=e||{};var a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=i+"?sdkid="+t+"&lib="+n;var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(a,s)},o.load("<?php echo $tiktok; ?>"),o.page()}(window,document,"ttq")</script> <?php } ?>

  <link href="css/app.9c6b53a2.css" rel="preload" as="style"><link href="js/app.7307fa57.js" rel="preload" as="script"><link href="js/chunk-vendors.64f852de.js" rel="preload" as="script"><link href="css/app.9c6b53a2.css" rel="stylesheet"></head>
  <body>
  <?php if (!empty($fb)) { ?> <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo $fb; ?>&ev=PageView&noscript=1"/></noscript> <?php } ?> 

  <div id="app"></div>
  <input type="hidden" name="sub1" value="{subid}">
  <script type="text/javascript" src="js/chunk-vendors.64f852de.js"></script><script type="text/javascript" src="js/app.7307fa57.js"></script></body>
</html>
