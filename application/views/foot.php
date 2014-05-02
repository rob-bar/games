<?php
echo $footextra;
?>

<?php if (ENVIRONMENT == $GLOBALS["env_prod"]): ?>
  <script type="text/javascript">
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window, document, 'script', 'ga'));
      ga('create','UA-27483596-1', {'cookieDomain': 'robbiebardijn.be'});
      ga('send','pageview');
  </script>
<?php endif; ?>
