<?php get_header(); ?>

<?php 
 while (have_posts()) {
   the_post();
?>

<h2><?php the_title(); ?></h2>

<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
<?php the_content(); ?>


<?php }; ?>

  <?php get_footer(); ?>