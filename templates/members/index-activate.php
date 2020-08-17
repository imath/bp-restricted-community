<?php
/**
 * Template used to output the activate registration step markup.
 *
 * @package   communaute-protegee
 * @subpackage \templates\members\index-activate
 *
 * @since 1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

bp_get_template_part( 'members/communaute-protegee-header' ); ?>

<div id="activate">
	<h1><a href="<?php echo esc_url( communaute_protegee()->register_header_url ); ?>" title="<?php echo esc_attr( communaute_protegee()->register_header_title ); ?>" tabindex="-1"><?php bloginfo( 'name' ); ?></a></h1>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : ?>

			<?php the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; ?>
	<?php endif; ?>
</div>
<div class="clear"></div>

<?php bp_get_template_part( 'members/communaute-protegee-footer' ); ?>
