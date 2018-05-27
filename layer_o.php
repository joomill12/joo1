<?php foreach ( $css as $value )
{
?>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH . $value; ?>" media="all" />
<?php 
}
?>

<div id="layer_wrap">
	<div id="layer_header"><em id="layer_title"><?php echo !empty($layer_title) ?  $layer_title : 'Layer Title'; ?></em></div>
	<div id="layer_container">
		<?php echo $contents; ?>
	</div>
	<div id="layer_footer"></div>
</div>

<?php foreach ( $js as $value )
{
?>
<script type="text/javascript" src="<?php echo JS_PATH . $value; ?>"></script>
<?php 
}
?>