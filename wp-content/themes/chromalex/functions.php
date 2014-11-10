<?php

register_nav_menu( 'primary', 'Primary Menu' );
register_nav_menu( 'forside', 'Forside Menu' );

add_theme_support('post-thumbnails');

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="title">',
        'after_title' => '</div>',
    ));

	add_action( 'admin_head-post.php', 'chromalex_fix_html_editor_font' );
	add_action( 'admin_head-post-new.php', 'chromalex_fix_html_editor_font' );

	function chromalex_fix_html_editor_font() { ?>

	<style type="text/css">#editorcontainer #content, #wp_mce_fullscreen { font-family: Helvetica, sans-serif; }</style>
	<?php }

// Language Select Code for non-Widget users
function chromalex_qtrans_generateLanguageSelectCode($style='', $id='') {
	global $q_config;
	if($style=='') $style='text';
	if(is_bool($style)&&$style) $style='image';
	if(is_404()) $url = get_option('home'); else $url = '';
	if($id=='') $id = 'qtranslate';
	$id .= '-chooser';

	switch($style) {
		case 'dropdown':
			echo '<form type="GET" href="'.$_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"].'" id="'.$id.'">';
			echo "<select ONCHANGE=\"location = this.options[this.selectedIndex].value;\">\n";
			foreach(qtrans_getSortedLanguages() as $language) {
				$classes = array('lang-'.$language);
				$selected = array('lang-'.$language);
				if($language == $q_config['language'])
					$selected[] = ' selected="selected"';
				echo '<option class="'. implode(' ', $classes) .'" value="'.qtrans_convertURL($url, $language).'"'.$selected[1].'>';
				echo $q_config['language_name'][$language]."</option>\n";
			}
			echo "\n</select>\n</form>\n";
			
			break;
	}
}

?>