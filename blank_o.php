<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $site_meta; ?>

<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<title><?php echo $site_title; ?> - <?php echo SUB_TITLE; ?></title>
<?php foreach ( $css as $value )
{
?>
<link rel="stylesheet" type="text/css" href="<?php echo $value; ?>" media="all" />
<?php
}
?>


<!--  Google analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90314614-1', 'auto');
  ga('require', 'linkid');

  ga('send', 'pageview');

</script>


</head>
<body>

<div id="wrap">
<?php echo $contents; ?>
</div>


<!--<script type="text/javascript" src="/js/config/common.js"></script>-->
<?php foreach ( $js as $value )
{
?>
<script type="text/javascript" src="<?php echo $value; ?>"></script>
<?php
}
?>
<script><?php echo $script; ?></script>
</body>
</html>