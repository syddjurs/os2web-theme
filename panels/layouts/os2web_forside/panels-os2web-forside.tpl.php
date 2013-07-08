<<<<<<< HEAD
<div class="panel-display container-12 panel-node clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-top-container clearfix container-12">
    <div class="panel-panel grid-8 panel-region-top-left">
      <div class="inside"><?php print $content['top_left']; ?></div>
    </div>

    <div class="panel-panel grid-4 panel-region-top-right">
=======
<?php
/**
 * @file
 * panels-os2web-forside.tpl.php
 */
?>
<div class="panel-display panel-node clearfix" <?php print (!empty($css_id))?"id=\"$css_id\"":'';  ?>>
  <div class="panel-top-container clearfix">
    <div class="panel-panel grid-8 alpha panel-region-top-left">
      <div class="inside"><?php print $content['top_left']; ?></div>
    </div>

    <div class="panel-panel grid-4 panel-region-top-right omega">
>>>>>>> 025d57b402ec35acb5e1c64c74bcc20289518774
      <div class="inside"><?php print $content['top_right']; ?></div>
    </div>
  </div>

<<<<<<< HEAD
  <div class="panel-panel grid-12 panel-region-bottom">
    <div class="inside"><?php print $content['bottom']; ?></div>
  </div>
</div>

=======
  <div class="panel-panel grid-12 alpha omega panel-region-bottom">
    <div class="inside"><?php print $content['bottom']; ?></div>
  </div>
</div>
>>>>>>> 025d57b402ec35acb5e1c64c74bcc20289518774
