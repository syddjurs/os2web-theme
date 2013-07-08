<?php
/**
 * @file
 * panels-os2web-forside-5-7.tpl.php
 */
?>
<div class="panel-display panel-node clearfix" <?php print (!empty($css_id))?"id=\"$css_id\"":'';  ?>>
  <div class="panel-top-container clearfix">
    <div class="panel-panel grid-5 alpha panel-region-top-left">
      <div class="inside"><?php print $content['top_left']; ?></div>
    </div>

    <div class="panel-panel grid-7 omega panel-region-top-right">
      <div class="inside"><?php print $content['top_right']; ?></div>
    </div>
  </div>

  <div class="panel-panel grid-12 alpha omega panel-region-bottom">
    <div class="inside"><?php print $content['bottom']; ?></div>
  </div>
</div>

