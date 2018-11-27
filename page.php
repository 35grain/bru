<?php /* Template Name: Content-Page */ ?>
<?php get_header(); ?>
<div class="content-wrapper">
<?php $image = get_field('cover_image'); if( !empty($image) ): ?><img class="pg<?php if( get_field('invert_image_colors') ): ?> invert-color<?php endif; ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
    <div class="row">
     <?php if( get_field('social_name') || get_field('social_info') || get_field('profile_image') ): ?>
      <div class="column left">
        <?php $image = get_field('profile_image'); if( !empty($image) ): ?><img class="profile" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
        <p><?php the_field('social_name'); ?></p>
        <div class="socials"><p><?php the_field('social_info'); ?></p></div>
      </div>
     <?php endif; ?>
      <div class="column right">
        <?php if( get_field('custom_content_title') ): ?><h1><?php the_field('custom_content_title'); ?></h1><?php endif; ?>
        <?php echo apply_filters( 'the_content', get_post_field( 'post_content', $page_id ) );?>
      </div>
    </div>
  </div>
  <a href="../" class="back" target="_self"></a>
<?php get_footer(); ?>
