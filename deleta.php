<?php

function unregister_default_widgets() 
{
	unregister_widget('WP_Nav_Menu_Widget');
}
add_action('widgets_init', 'unregister_default_widgets', 11);

?>
