add_filter('gform_register_init_scripts', 'gform_radioNext');

function gform_radioNext($form) {
$script = '(function($){' .
'$(".gfield_radio label").each(function(){' .
'$(this).click(function() {' .
'console.log("clicked")' .
'});' .
'})' .
'})(jQuery);';

GFFormDisplay::add_init_script($form['id'], 'gform_radioNext', GFFormDisplay::ON_PAGE_RENDER, $script);
return $form;
}
