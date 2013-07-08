<<<<<<< HEAD
(function ($) {
var is_visible = false;

$('.agenda-item').hide(); 

$('a.agenda-bullet-list').click(function(e) {
  e.preventDefault();
  $(this).next('.agenda-item').toggle();
  $(this).toggleClass('open')
  return false;
=======
/**
 * @file
 * jquery.dagsorden.js
 */
(function ($) {
	var is_visible = false;

	$('.agenda-item').hide();

	$('a.agenda-bullet-list').click(function(e) {
  	e.preventDefault();
  	$(this).nextAll('.agenda-item').toggle();
  	$(this).toggleClass('open');
  	return false;
>>>>>>> 025d57b402ec35acb5e1c64c74bcc20289518774
  });
}(jQuery));
