<?php get_header(); ?>

<?php
$tituloPagina = get_the_title();
$textoPagina = get_the_content();
if ($tituloPagina == '') {
?>
	<?php include '' ?>
<?php } ?>

<?php get_footer(); ?>