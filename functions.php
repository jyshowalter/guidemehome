add_filter('gform_register_init_scripts', 'gform_radioNext');

function gform_radioNext($form) {
$script = '(function($){' .
'$(".gfield_radio").each(function(){' .
'var parent = $(this).closest(".gform_page");' .
'var footer = $(".gform_page_footer", parent);' .
'var next = $("input.gform_next_button", footer);' .
'next.css("display", "none");' .
'$("input[type=radio]", this).change(function(){' .
'next.trigger("click");' .
'})' .
'})' .
'})(jQuery);';

GFFormDisplay::add_init_script($form['id'], 'gform_radioNext', GFFormDisplay::ON_PAGE_RENDER, $script);
return $form;
}
