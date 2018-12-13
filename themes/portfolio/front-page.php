<?php get_header();
while(have_posts() ) {
    the_post();
} ?>
<main class="main">
	<section class="about-me js--about-me" id="aboutme">

		<article class="about-me__container">
			<img src="<?php echo get_theme_file_uri('/images/user-male.png') ?>" class="about-me__author-photo"
			 alt="autor strony">
			<p class="about-me__paragraph">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultrices metus sed dapibus varius. Pellentesque faucibus
				sodales ligula a fringilla. Proin molestie, tellus vel finibus facilisis, elit dui gravida eros, bibendum vestibulum
				ante tellus laoreet urna. Sed ac elit sit amet odio ullamcorper commodo eu quis arcu. Mauris non justo quam. Curabitur
				id sapien tincidunt, dictum leo a, tincidunt ante. Phasellus tempus lacinia mi ac lacinia. Vestibulum rutrum porttitor
				ex, eget porttitor mi. Pellentesque interdum placerat magna ut sagittis. Ut venenatis convallis ligula, in ultricies
				sem aliquam non. Sed eu pretium sapien. Curabitur fringilla id nibh a luctus. Donec mattis vitae augue id blandit. Suspendisse
				potenti. Donec vulputate metus ut consequat facilisis.
			</p>
		</article>

		<article class="skills">
			<h1 class="skills__heading">Skills:</h1>

			<?php $skillQuery = new WP_Query(array(
'post_type' => 'skill',
'posts_per_page' => -1,
'orderby' => 'menu_order',
'order' => 'ASC'
		));

		$count_posts = wp_count_posts('skill');
$count_skills = $count_posts->publish;

		while($skillQuery->have_posts()) {
			$skillQuery->the_post(); 

			if(($count_skills % 7) === 0 || ($count_skills % 8) === 0) {
				$icon_width = 'skills__icon--one-four';
			}
			else {
				$icon_width = 'skills__icon--one-third';
			}
		 ?>

			<span class="sr-only">
				<?php the_title(); ?>
			</span>
			<i class="skills__icon  devicon colored <?php echo get_field('devicon_class'); ?>  <?php echo $icon_width; ?>"></i>

			<?php } ?>

		</article>
	</section>

	<section class="projects" id="projects" tabindex="0">
		<h1 class="projects__heading">Projects:</h1>

		<?php $projectQuery = new WP_Query(array(
'post_type' => 'project',
'posts_per_page' => -1
)); 

while($projectQuery->have_posts()) {
	$projectQuery->the_post(); ?>

		<div class="projects__card-wrap">
			<article class="card" tabindex="0" id="card1">
				<div class="card__side card__side--front" id="cardfront1">
					<img src="<?php echo get_field('project_img'); ?>" class="card__img" alt="project screenshot">
					<i class="card__icon fa fa-plus-circle"></i>
				</div>
				<div class="card__side card__side--back" id="cardback1" style="background-image: linear-gradient(
        rgba(76,104,139, 0.9),
        rgba(76,104,139, 0.9)
      ),
      url(<?php echo get_field('project_img'); ?>);">
					<div class="card__container">
						<div class="card__text-wrap">
							<?php the_content(); ?>
						</div>
						<div class="card__btn-container">
							<a href="<?php echo get_field('link_code'); ?>" class="card__btn">Kod</a>
							<a href="<?php echo get_field('link_demo'); ?>" class="card__btn">Live</a>
						</div>
					</div>

				</div>
			</article>
		</div>

		<?php } ?>

	</section>

</main>

<section class="contact" id="contact">
	<h1 class="contact__heading">Contact:</h1>

<?php echo do_shortcode('[contact-form-7 id="36" title="Contact form 1"]'); ?>

	<i class="contact__icon fa fa-edit" aria-hidden="true"></i>
</section>

<?php get_footer(); 