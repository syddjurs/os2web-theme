<<<<<<< HEAD
<?php 

function cmstheme_alpha_preprocess_html(&$vars) {
  // Setup IE meta tag to force IE rendering mode
	$meta_ie_render_engine = array(
=======
<?php
/**
 * @file
 * preproccess-html-inc
 */

/**
 * Implements theme_preprocess_html().
 */
function os2web_core_theme_alpha_preprocess_html(&$vars) {

  // Setup IE meta tag to force IE rendering mode.
  // Add header meta tag for IE to head-
  drupal_add_html_head(array(
>>>>>>> 025d57b402ec35acb5e1c64c74bcc20289518774
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'http-equiv' => 'X-UA-Compatible',
<<<<<<< HEAD
      'content' =>  'IE=8,IE=Edge,chrome=1',
    ),
    '#weight' => '-99999',
  );
  
  // Add header meta tag for IE to head
  drupal_add_html_head($meta_ie_render_engine, 'meta_ie_render_engine');


  // Adding new version og jquery to exist alongside the other
=======
      'content' => 'IE=8,IE=Edge,chrome=1',
    ),
    '#weight' => '-99999',
  ), 'meta_ie_render_engine');

  // Adding new version og jquery to exist alongside the other.
>>>>>>> 025d57b402ec35acb5e1c64c74bcc20289518774
  $inline_script = <<<EOL
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript">
    var \$j = jQuery.noConflict(true);
<<<<<<< HEAD
  </script>  
EOL;

  $script_new_jquery = array (
=======
  </script>
EOL;

  $script_new_jquery = array(
>>>>>>> 025d57b402ec35acb5e1c64c74bcc20289518774
    '#type' => 'markup',
    '#markup' => $inline_script,
  );
  drupal_add_html_head($script_new_jquery, 'jquery-tmpl');
<<<<<<< HEAD

}


?>
=======
}
>>>>>>> 025d57b402ec35acb5e1c64c74bcc20289518774
