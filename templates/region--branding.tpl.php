<div<?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
    <?php if ($linked_logo_img) : ?>
    <div class="branding-data clearfix">
      <div class="logo-img">
        <?php print $linked_logo_img; ?>
      </div>
    </div>
    <?php endif; ?>
    <?php print $content; ?>
  </div>
</div>