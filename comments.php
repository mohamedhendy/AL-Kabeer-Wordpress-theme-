<?php

if (comments_open()) { ?>

  <h5 class="comments-count"><span class="d-inline-block"> عدد التعليقات على هذه المقالة : </span><?php comments_number(' لايوجد تعليقات كن اول المعلقين', 'تعليق واحد', ' % تعليقات') ?></h5>

  <?php

  echo '<ul class="list-unstyled comments-list>';

  $comments_arguments = array(
    'max_depth'   => 3,
    'type'        => 'comment',
    'avatar_size' => 80,
    'reverse_children'  => '',
    'reply_text'        => 'قم بالرد',
  );

  wp_list_comments($comments_arguments) ?>

  <?php
  echo '</ul>';

  echo '
  <hr class="comment-separator" />';
  $commenter = wp_get_current_commenter();
  $req = get_option('require_name_email');
  $aria_req = ($req ? " aria-required='true'" : '');

  $consent = empty($commenter['comment_author_email']) ? '' : ' checked="checked"';

  $fields = array(
    'author' => '<div>
    <div class="row">
      <div class="col-md-6"><input type="text" class="mt-2 form-control btn-lg" placeholder="الإسم الكريم"> </div>',

    'email' => '<div class="col-md-6"><input type="email" class=" mt-2 form-control btn-lg" placeholder="البريد الإليكترونى"></div>
    </div>
  </div>',

  );
  $fields['cookies'] = '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' /> ' . '<label for="wp-comment-cookies-consent"> ' . __(' حفظ البيانات فى حال التسجيل مره اخرى ') . ' </label></p>';

  $farg = array(

    'title_reply' => 'تعليقك يعطى مشاركه ايجابيه ',
    'logged_in_as' => '<p class="logged-in-as">' .
      sprintf(
        __('تم تسجيل دخولك كـ <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">تسجل الخروج </a>'),
        admin_url('profile.php'),
        $user_identity,
        wp_logout_url(apply_filters('the_permalink', get_permalink()))
      ) . '</p>',
    'fields' => apply_filters('comment_form_default_fields', $fields),
    'comment_notes_before' => '<p class="comment-notes">تأكد ان الإيميل لن يظهر للعامه
  </p>',
    'comment_field' => '',
    'label_submit' => __('ارسال التعليق'),
    'comment_field' => '<p class="comment-form-comment"><textarea id="comment" class="d-block form-control btn-lg" placeholder="اكتب التعليق" name="comment" cols="45" rows="8" aria-required="true">' .
      '</textarea></p>',
  );


  comment_form($farg);
} else {
  echo 'التعليقات مغلقه على هذا البوست بنائا على خصوصية الناشر';
}
