<?php foreach ( $css as $value )
{
?>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH . $value; ?>" media="all" />
<?php 
}
?>

<?php echo $contents; ?>	

<?php foreach ( $js as $value )
{
?>
<script type="text/javascript" src="<?php echo JS_PATH . $value; ?>"></script>
<?php 
}
?>