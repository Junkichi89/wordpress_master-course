<!DOCTYPE html>
<html lang="en">

<head>
  <?php get_header(); ?>
</head>

<body>

  <?php get_template_part('includes/header'); ?>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
<p style="padding:10px">
<?php 
// $num = 1; //変数宣言
// echo $num + 1;
// echo '<br>';
// echo $num + 2;
// echo '<br>';
// echo $num + 3;

//配列

// $tomosta = [];
// $tomosta[1] = 'Yamada';
// $tomosta[2] = 'Tanaka';
// $tomosta[3] = 'Yoshioka';

// echo $tomosta[2]; //添字、index

//連想配列

$items =[];
$items['apple'] = 'りんご';
$items['peach'] = 'もも';
$items['grapes'] = 'グレープ';

echo $items['grapes'];
?>
</p>

      <?php
      if (has_post_thumbnail()) :
        $id = get_post_thumbnail_id();
        $img = wp_get_attachment_image_src($id, 'large');
      else :
        $img = array(get_template_directory_uri() . '/img/post-bg.jpg');
      endif;
      ?>
      <!-- Page Header -->
      <header class="masthead" style="background-image: url('<?php echo $img[0]; ?>')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="post-heading">
                <h1><?php the_title(); ?></h1>
                <span class="meta">Posted by
                  <?php the_author(); ?>
                  on <?php the_date(); ?></span>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Post Content -->
      <article>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </article>

      <hr>
    <?php endwhile; ?>
  <?php endif; ?>

  <?php get_template_part('includes/footer'); ?>
  <?php get_footer(); ?>
</body>

</html>