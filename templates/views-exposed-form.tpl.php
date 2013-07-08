<?php
/**
 * @file views-exposed-form.tpl.php
 *
 * This template handles the layout of the views exposed filter form.
 *
 * Variables available:
 * - $widgets: An array of exposed form widgets. Each widget contains:
 * - $widget->label: The visible label to print. May be optional.
 * - $widget->operator: The operator for the widget. May be optional.
 * - $widget->widget: The widget itself.
 * - $sort_by: The select box to sort the view using an exposed form.
 * - $sort_order: The select box with the ASC, DESC options to define order. May be optional.
 * - $items_per_page: The select box with the available items per page. May be optional.
 * - $offset: A textfield to define the offset of the view. May be optional.
 * - $reset_button: A button to reset the exposed filter applied. May be optional.
 * - $button: The submit button for the form.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($q)): ?>
  <?php
  // This ensures that, if clean URLs are off, the 'q' is added first so that
  // it shows up first in the URL.
  print $q;
  ?>
<?php endif; ?>
<div class="views-exposed-form">
  <div class="views-exposed-widgets clearfix">
    <?php foreach ($widgets as $id => $widget) : ?>
<<<<<<< HEAD
=======
      <?php if (!empty($widget->prefix)): ?>
        <?php print $widget->prefix; ?>
      <?php endif; ?>
>>>>>>> 025d57b402ec35acb5e1c64c74bcc20289518774
      <div id="<?php print $widget->id; ?>-wrapper" class="views-exposed-widget views-widget-<?php print $id; ?>">
        <?php if (!empty($widget->label)): ?>
          <label for="<?php print $widget->id; ?>">
            <?php print $widget->label; ?>
          </label>
        <?php endif; ?>
        <?php if (!empty($widget->operator)): ?>
          <div class="views-operator">
            <?php print $widget->operator; ?>
          </div>
        <?php endif; ?>
        <div class="views-widget">
          <?php print $widget->widget; ?>
        </div>
        <?php if ($widget->id == "edit-field-meeting-search-advanced-meta-date-value"): ?>
          <?php print '<div class="advanced-search-button">' . $button . '</div>';
          $advanced = TRUE;
          ?>
<<<<<<< HEAD
      <?php endif; ?>
      </div>
=======
        <?php endif; ?>
      </div>
      <?php if (!empty($widget->suffix)): ?>
        <?php print $widget->suffix; ?>
      <?php endif; ?>
>>>>>>> 025d57b402ec35acb5e1c64c74bcc20289518774
    <?php endforeach; ?>
      <?php if (!empty($sort_by)): ?>
      <div class="views-exposed-widget views-widget-sort-by">
  <?php print $sort_by; ?>
      </div>
      <div class="views-exposed-widget views-widget-sort-order">
      <?php print $sort_order; ?>
      </div>
    <?php endif; ?>
      <?php if (!empty($items_per_page)): ?>
      <div class="views-exposed-widget views-widget-per-page">
      <?php print $items_per_page; ?>
      </div>
    <?php endif; ?>
      <?php if (!empty($offset)): ?>
      <div class="views-exposed-widget views-widget-offset">
      <?php print $offset; ?>
      </div>
      <?php endif; ?>
    <div class="views-exposed-widget views-submit-button">
<<<<<<< HEAD
    <?php if (!$advanced) {
=======
    <?php if (!isset($advanced) || $advanced === false) {
>>>>>>> 025d57b402ec35acb5e1c64c74bcc20289518774
      print $button;
    } ?>
    </div>
    <?php if (!empty($reset_button)): ?>
      <div class="views-exposed-widget views-reset-button">
  <?php print $reset_button; ?>
      </div>
<?php endif; ?>
  </div>
</div>
<<<<<<< HEAD

<?php
/**
 * @author Thomas Thune Hansen <tth@bellcom.dk>
 *
 * If the view is used on "politik-og-planer" page or "dagsorden-og-referat" page we
 * add a little js to make the calendar icons clickable
 */
if (arg(0) == "dagsorden-og-referat" || arg(2) == 6) {
  $calIcon = drupal_get_path('theme', variable_get('theme_default', NULL)) . "/images/cal.png";
  $datepicker = 'jQuery(document).ready(function($) {
            $( "#edit-from-date-value-datepicker-popup-0" ).datepicker({
                          showOn: "both",
                          buttonImage: "' . $calIcon . '",
                          buttonImageOnly: true,
                          dateFormat: "dd-mm-yy"
            });
            $( "#edit-to-date-value-datepicker-popup-0" ).datepicker({
                          showOn: "both",
                          buttonImage: "' . $calIcon . '",
                          buttonImageOnly: true,
                          dateFormat: "dd-mm-yy"
            });

  });';
  drupal_add_js($datepicker, array('type' => 'inline', 'scope' => 'footer', 'weight' => 5));
}
=======
>>>>>>> 025d57b402ec35acb5e1c64c74bcc20289518774
