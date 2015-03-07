<?php
$ancho      = get_field('ancho');
$tipo       = get_field('tipo');
$categoria  = get_field('categoria');
$red_social = get_field('red_social');
$usuario    = get_field('usuario');
$texto      = get_field('texto');
?>
<article class="masonry-entry <?php echo ($red_social == 'twitter') ? 'entry-twitter ' : ' '; echo $ancho; ?>" id="post-<?php the_ID() ?>" <?php post_class() ?>>
<?php if ($tipo == 'banner') : ?>
	<?php the_content() ?>
<?php elseif ($tipo == 'categoria') : ?>
	<?php the_content() ?>
	<span class="categoria">
		<?php echo $categoria ?>
	</span>
<?php elseif ($tipo == 'redsocial') : ?>
	<?php if($red_social == 'instagram') : ?>
	<?php the_content() ?>
	<div class="red-social-instagram">
		<?php echo $usuario ?><br>
		<?php echo $texto ?>
	</div>
	<?php elseif($red_social == 'twitter') : ?>
	<div class="red-social-twitter">
		<span>
			<?php echo $usuario ?>
		</span>
		<?php echo $texto ?>
	</div>
	<?php elseif($red_social == 'youtube') : ?>
	<?php the_content() ?>
	<div class="red-social-youtube"></div>
	<?php endif; ?>
<?php endif; ?>
</article>