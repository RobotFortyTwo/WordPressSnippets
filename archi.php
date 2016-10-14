// Add in post/s rather than (x) as the post count in archive list widget
function archive_postcount_filter ($variable) 
{
	$variable = str_replace('(1)', '<span class="PostAmount"> / 1 Post</span>', $variable);
	$variable = str_replace('(', '</a> <span class="PostAmount"> / ', $variable);
	$variable = str_replace(')', ' Posts </span>', $variable);
return $variable;
}
add_filter('get_archives_link', 'archive_postcount_filter');
// End of change archive text
