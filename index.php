<?php get_header(); ?>



<div class="container-fluid sizes podo smsm">
	<div class="row">
		<?php
		if (have_posts()) {    /*check the posts*/
			while (have_posts()) { /* make loop if found posts */
				the_post(); ?>
				<div class="col-md-4 col-sm-6  ">
					<div class="main-posts">
						<h3 class="post-title text-black">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>
						<div class="morinfo">
							<span class="author-name"><i class="fas fa-user"></i> <?php the_author_posts_link(); ?></span>
							<span class="c-time"><i class="far fa-clock"></i> <?php the_time('F j, Y') ?></span>
							<span class="com"><i class="far fa-comment"></i> <?php comments_popup_link(' لايوجد تعليقات ', 'تعليق واحد', '% من التعليقات', 'comment-class ^_^ '); ?></span>
						</div>
						<?php the_post_thumbnail('', ''); ?>
						<?php /*the_content ('read more...');*/ the_excerpt(); ?>
						<a class="smmore" href="<?php the_permalink(); ?>"> إقراء المزيد</a>
						<hr>
						<p class="p-cat"> <i class="fas fa-book-open"></i> 
							<?php the_category(' ، '); ?>
						</p>
					</div>
				</div>
			<?php	} /* end while loop */
	} /*end if condition   */

	echo "<div class='post-pagination'>";

	echo "<div class='text-center'>";
	echo page_pagination();
	echo "</div>";
	echo "</div>";

	?>
	</div>
</div>




<?php get_footer();
