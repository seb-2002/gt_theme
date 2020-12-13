<?php get_header(); ?>

<?php 

$args = array(
  'post_type' => 'post',
);

$blogposts = new WP_Query($args);

  while($blogposts -> have_posts()) {
    $blogposts -> the_post();

    ?>
    <a href="<?php the_permalink(); ?>">
    <h3><?php the_title(); ?></h3>
    </a>
    <h3><?php the_excerpt(); ?></h3>
    
    <!-- <h3><?php the_tags($before = '', $sep = ' / ', $after = ''); ?></h3> -->

    <?php
$posttags = get_the_tags();
if ($posttags) {
  foreach($posttags as $tag) {
    echo $tag->name . '  '; 
  }
}
?>

  <?php }; ?>

  <?php get_footer(); ?>
