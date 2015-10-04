<?php

/*
	Template Name: About the project
*/

get_header();

$video = get_field( 'url' );
$state = get_field( 'discussion' );

$discussion = $state == 0 ? $video : get_field( 'discussion_url' );

?>

<section id="movie" class="single">

	<a href="<?= home_url() ?>" class="toggle-nav on">
		<b></b>
		<b></b>
		<b></b>
	</a>

	<div class="inner">
		<h1><?php the_title() ?></h1>

		<div class="rating">
			<?php get_rating() ?>
		</div>

		<iframe width="854" height="480" src="//www.youtube.com/embed/<?= explode( 'v=', $video )[1] ?>" frameborder="0" allowfullscreen>
		</iframe>

		<a href="<?= $discussion ?>" target="_blank">discuss this video</a>
	</div>

</section>

<?php get_footer() ?>