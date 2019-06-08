<div class="nomar">
  <?php
  get_header();
  include(get_template_directory() . '/include/breadcrump.php');
  ?>
</div>
<div class="container-fluid ">
  <?php
  if (have_posts()) {    /*check the posts*/
    while (have_posts()) { /* make loop if found posts */
      the_post(); ?>
      <div class="row ">
        <div class="col-md-12 bg-white">
          <div class="useraccount">
            <div class="col-12 text-center searchfor">
              <h3 class="text-center">كاتب المقال</h3>
            </div>
            <div class="container-fluid rest">
              <div class="row thepad">
                <div class="col-md-2 thapad">
                  <div class="">
                    <?php
                    $avaarg = array(
                      'class' => 'img-responsive text-center'
                    );
                    echo get_avatar(get_the_author_meta('ID'), 150, '', 'user avatar', $avaarg)
                    ?>

                  </div>
                </div>
                <div class="col-md-8">
                  <div class=" hh text-center">
                    <h5 class="text-center"><?php the_author_meta('first_name') ?>
                      <?php the_author_meta('last_name') ?>
                      ( <?php the_author_meta('nickname') ?> )
                    </h5>
                    <span><?php the_author_meta('description') ?></span>

                  </div>
                </div>
                <div class="col-md-2">
                  <div class=" hh text-center">
                    <h5> الحساب : <?php the_author_posts_link() ?></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9 nomar mody">
          <div class="main-posts single posts">
            <?php edit_post_link('Edit <i class="fas fa-pencil-alt"></i>') ?>
            <h3 class="post-title">
              <a href="<?php the_permalink(); ?>">
                <?php the_title() ?>
              </a>
              <h3>
                <div class="morinfo">
                  <span class="author-name"><i class="fas fa-user"></i> <?php the_author_posts_link(); ?></span>
                  <span class="c-time"><i class="far fa-clock"></i> <?php the_time('F j, Y') ?></span>
                  <span class="com"><i class="far fa-comment"></i> <?php comments_popup_link('0 Comments', '1 Comments', '% comments', 'comment-class ^_^ '); ?></span>
                </div>
                <?php the_content(); ?>
                <hr>
                <p class="p-cat"><i class="fas fa-tags"></i>
                  <?php the_category(', '); ?>
                </p>
              <?php  } /* end while loop */
          } /*end if condition   */ ?>
      </div>
    </div>
    <div class="col-md-3 cpad bg-white mody">
      <?php
      if (is_active_sidebar('main-sidebar')) {
        dynamic_sidebar('main-sidebar');
      }
      ?>
    </div>
  </div>

</div>
<div class="container">
  <div class="row flex ">
    <?php
    /* Random posts arguments  ==========================
====================================================*/

    $randoum_posts_arg = array(
      'posts_per_page'          => 3,
      'orderby'                => 'rand',
      'category__in'           => wp_get_post_categories(get_queried_object_id()),
      'post__not_in'           => array(get_queried_object_id())
    );

    $random_post = new WP_Query($randoum_posts_arg);
    if ($random_post->have_posts()) {    /*check the posts*/
      while ($random_post->have_posts()) { /* make loop if found posts */
        $random_post->the_post(); ?>
        <div class="col-md-4">

          <div class="sizes smsm ">
            <div class="main-posts">
              <h3 class="post-title">
                <a href="<?php the_permalink(); ?>">
                  <?php the_title() ?>
                </a>
                <h3>
                  <div class="">
                    <?php the_post_thumbnail('', ''); ?>
                  </div>
                  <div class="morinfo">
                    <span class="author-name"><i class="fas fa-user"></i> <?php the_author_posts_link(); ?></span>
                    <span class="c-time"><i class="far fa-clock"></i> <?php the_time('F j, Y') ?></span>
                    <span class="com"><i class="far fa-comment"></i> <?php comments_popup_link('لايوجد تعليقات', 'تعليق واحد', '% تعليقات', 'comment-class ^_^ '); ?></span>
                  </div>
                  <?php /*the_content ('read more...');*/ the_excerpt(); ?>
                  <a class="smmore" href="<?php the_permalink(); ?>"> إقراء المزيد</a>
                  <hr>
                  <p class="p-cat"> <i class="fas fa-book-open"></i>
                    <?php the_category(' ، '); ?>
                  </p>
            </div>
          </div>
        </div>
      <?php  } /* end while loop */
  } /*end if condition   */
  wp_reset_postdata(); ?>
  </div>
</div>
<div class="container sing">
  <?php
  echo "<div class='post-pagination pgsingle'>";
  if (get_previous_post_link()) {
    previous_post_link('%link', ' <i class="fas fa-chevron-right"></i> %title');
  } else {
    echo '<span class="span-s  span-p float-right"><i class="fas fa-chevron-right"></i> السابق</span>';
  }

  if (get_next_post_link()) {
    next_post_link('%link', '%title <i class="fas fa-chevron-left"></i>');
  } else {
    echo '<span class="span-s span-n float-left ">التالى  <i class="fas fa-chevron-left"></i></span>';
  }
  echo "</div>";
  comments_template();
  ?>
</div>







<?php get_footer();
