<?php
/**
 * @file
 * panels-os2web-3stack.tpl.php
 */
?>
<div class="panel-display panel-node clearfix" <?php print (!empty($css_id))?"id=\"$css_id\"":'';  ?>>
  <div class="panel-panel panel-region-stack1">
    <div class="inside"><?php print $content['stack1']; ?></div>
  </div>

  <div class="panel-panel panel-region-stack2">
    <div class="inside"><?php print $content['stack2']; ?></div>
  </div>

  <div class="panel-panel panel-region-stack3">
    <div class="inside"><?php print $content['stack3']; ?></div>
  </div>
</div>
