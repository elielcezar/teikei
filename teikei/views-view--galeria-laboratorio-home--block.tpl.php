
<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */
?>

  
  <div id="myCarousel" class="carousel slide">
    <!-- main slider carousel items -->
    <div class="carousel-inner">

          <?php if ($header): ?>
            <div class="view-header">
              <?php print $header; ?>
            </div>
          <?php endif; ?>


          <?php if ($attachment_before): ?>
            <div class="attachment attachment-before">
              <?php print $attachment_before; ?>
            </div>
          <?php endif; ?>

          <?php if ($rows): ?>    
              <?php print $rows; ?>      
          <?php endif; ?>
          

          <?php if ($attachment_after): ?>
            <div class="attachment attachment-after">
              <?php print $attachment_after; ?>
            </div>
          <?php endif; ?>

         
          <?php if ($footer): ?>
            <div class="view-footer">
              <?php print $footer; ?>
            </div>
          <?php endif; ?>

    </div>

  <a class="carousel-control left" href="#myCarousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next"><i class="fa fa-angle-right"></i></a>



  </div>

