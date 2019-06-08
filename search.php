<?php get_header(); ?>
<?php
$s = get_search_query();
$args = array(
  's' => $s
); ?>
<div class="container sizes">
    <?php // The Query
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
      _e("<h2 class='text-center searchfor' style='font-weight:bold;color:#000'>نتائج البحث عن : " . get_query_var('s') . "</h2>"); ?>
      <div class="row">
        <?php
      while ($the_query->have_posts()) {
        $the_query->the_post();
        ?>
        <br>
        <div class="col-4">
          <div class="main-posts">
            <h3 class="post-title">
              <a href="<?php the_permalink(); ?>">
                <?php the_title() ?>
              </a>
              <h3>
                <div class="morinfo">
                  <span class="author-name"><i class="fas fa-user"></i> <?php the_author_posts_link(); ?></span>
                  <span class="c-time"><i class="far fa-clock"></i> <?php the_time('F j, Y') ?></span>
                  <span class="com"><i class="far fa-comment"></i> <?php comments_popup_link(' لايوجد تعليقات ', 'تعليق واحد', '% من التعليقات', 'comment-class ^_^ '); ?></span>
                </div>
                <?php the_post_thumbnail('', ''); ?>
                <?php /*the_content ('read more...');*/ the_excerpt(); ?>
                <a class="smmore" href="<?php the_permalink(); ?>"> إقراء المزيد</a>
                <hr>
                <p class="p-cat"><i class="fas fa-book-open"></i>
                  <?php the_category(' ، '); ?>
                </p>
                <!-- <p class="t-tag">
									    <?php
                      // if (has_tag()) {
                      // 	the_tags();
                      // } else {
                      // 	echo 'Tags: No Tags';
                      // }
                      ?>
								    </p> -->
          </div>
        </div>
      <?php
    }
  } else {
    ?>
      <h2 style='font-weight:bold;color:#000' class="text-center notf">لايوجد نتائج مماثله </h2>
      <div class="alert alert-info">
        <p class="text-center">نأسف لعدم وجود اى نتائج مطابقة للبحث من فصلك قم بالمحاوله مره اخري او قم بتخير محتوى البحث </p>
      </div>
      <div class=" text-center">
        <img class="foto mb-5" src="<?php echo get_template_directory_uri() . '/assets/images/notfound.png' ?>" />
      </div>
    <?php } ?>
  </div>
</div>
<div class="">
  <?php get_footer(); ?>

</div>