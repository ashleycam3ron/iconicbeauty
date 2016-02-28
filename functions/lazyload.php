<?php if ( is_page(8) ) {
	/** Add Lazy Load functions in Footer */
add_action('wp_footer', 'jquery_lazy_load', 12);
function jquery_lazy_load() {
$placeholdergif = get_bloginfo('template_directory').'/images/grey.gif';
echo <<<EOF
<script type="text/javascript">
jQuery(document).ready(function($){
if (navigator.platform == "iPad") return;
jQuery("img").not(".cycle img").lazyload({
effect:"fadeIn",
placeholder: "$placeholdergif"
});
});
</script>
EOF;
}}