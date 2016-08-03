<?php

$images = get_field('header_image_slider');


// check if the repeater field for Slider has rows of data
if( $images ): ?>
<section id="galleryCarousel" class="carousel slide gallery-slider" data-ride="carousel">
  <!-- Indicators -->
  <?php
  //Hide Indicators if only one slide
  if(count($images) > 1): ?>
    <ol class="carousel-indicators sr-only">
      <?php

      $slide_number = 0;
      foreach( $images as $image ): ?>
        <li data-target="#galleryCarousel" data-slide-to="<?php echo $slide_number;?>" class="<?php echo ($slide_number == 0)? 'active':''; ?>"></li>
        <?php
        $slide_number++;
      endforeach; ?>
    </ol>
  <?php endif;?>
  <!-- Wrapper for page_gallery -->
  <aside class="carousel-inner" role="listbox">
<?php  // loop through the rows of data
  $slide_number = 0;
  foreach( $images as $image ):  ?>
    <div class="item <?php echo ($slide_number == 0)? 'active':''; ?>">
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" style="margin: auto;"/>
    </div>
  <?php
    $slide_number++;
  endforeach; ?>
  </aside>

  <!-- Left and right controls -->
  <?php if(count($images) > 1): ?>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#galleryCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-play icon-flipped" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#galleryCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  <?php endif;?>
</section>
<?php else :

  // no rows found
?>

<?php endif;

?>






