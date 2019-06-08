  <?php get_header(); ?>

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


  <div class="container mt-5">
    <h3>المقالات</h3>
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <?php
          $author_arg = array(
            'author'          => get_the_author_meta('ID'),
            'posts_per_page'  => 5
          );
          $author_ask = new WP_Query($author_arg);
          if ($author_ask->have_posts()) {    /*check the posts*/
            while ($author_ask->have_posts()) { /* make loop if found posts */
              $author_ask->the_post(); ?>
              <div class="col-md-3 bg-white roro">
                <?php the_post_thumbnail('', ''); ?>
              </div>
              <div class="col-md-9 bg-white p-3 mb-3">
                <div class="main-posts">
                  <h3 class="post-title">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_title() ?>
                    </a>
                  </h3>
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

            <?php  } /* end while loop */
        } /*end if condition   */
        wp_reset_postdata();

        ?>

        </div>
      </div>
    </div>
  </div>



  <?php get_footer(); ?>