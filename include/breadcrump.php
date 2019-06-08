<?php 
  // $allcat = get_the_category();
  // echo "<pre>";
  //   print_r($allcat);
  // echo "</pre>"
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo get_home_url() ;?>">
      <?php bloginfo('name')?>
  </a></li>
    <li class="breadcrumb-item"><a href="<?php echo get_category_link($allcat[0]->term_id)?>"> التصنيف  </a></li>
    <li class="breadcrumb-item active" aria-current="page"> <?php echo the_title() ?> </li>
  </ol>
</nav>