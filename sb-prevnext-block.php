<?php
/**
 * Plugin Name:     PrevNext block
 * Description:     Display Previous and Next links.
 * Version:         0.1.0
 * Author:          bobbingwide
 * License:         GPL-2.0-or-later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:     sb
 *
 * @package         sb
 */

/**
 * Registers all block assets so that they can be enqueued through the block editor
 * in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/applying-styles-with-stylesheets/
 */
function sb_sb_prevnext_block_block_init() {
	$dir = dirname( __FILE__ );

	$script_asset_path = "$dir/build/index.asset.php";
	if ( ! file_exists( $script_asset_path ) ) {
		throw new Error(
			'You need to run `npm start` or `npm run build` for the "sb/sb-prevnext-block" block first.'
		);
	}
	$index_js     = 'build/index.js';
	$script_asset = require( $script_asset_path );
	wp_register_script(
		'sb-sb-prevnext-block-block-editor',
		plugins_url( $index_js, __FILE__ ),
		$script_asset['dependencies'],
		$script_asset['version']
	);

	$editor_css = 'build/index.css';
	wp_register_style(
		'sb-sb-prevnext-block-block-editor',
		plugins_url( $editor_css, __FILE__ ),
		array(),
		filemtime( "$dir/$editor_css" )
	);

	$style_css = 'build/style-index.css';
	wp_register_style(
		'sb-sb-prevnext-block-block',
		plugins_url( $style_css, __FILE__ ),
		array(),
		filemtime( "$dir/$style_css" )
	);

	register_block_type( 'sb/sb-prevnext-block', array(
		'editor_script' => 'sb-sb-prevnext-block-block-editor',
		'editor_style'  => 'sb-sb-prevnext-block-block-editor',
		'style'         => 'sb-sb-prevnext-block-block',
		'render_callback'=>'sb_prevnext_block_dynamic_block',
		'attributes' => [
						'className' => [ 'type' => 'string'],
		]

	) );
}
add_action( 'init', 'sb_sb_prevnext_block_block_init' );

function sb_prevnext_block_dynamic_block( $attributes ) {
	$className = isset( $attributes['className']) ? $attributes['className'] : 'wp-block-sb-prevnext-block';
	$html = '<div class="'. $className . '">';
	$html .= sb_prevnext_getprevnext();
	//$html .= '<div style="clear:both;"></div>';
	$html .= '</div>';
	return $html;
}

function sb_prevnext_getprevnext()  {
	//static $pages=null;
	$post = get_post();
	$ID = $post->ID;
	$parent = $post->post_parent;
	$pagelist = null;
	//if ( $parent ) {
		list( $prev, $next ) = sb_prevnext_getsiblings( $parent, $ID );
		$html = sb_prevnext_get_link( $prev, "prev", "<< ", "");
		$html .= sb_prevnext_get_link( $next, "next", "", " >>");
		//$html = "Prev: " . $prevnext[0]->ID;
		//$html .= "Next" . $prevnext[1]->ID;
	//} else {
	//	$html = 'Is this a child page?';
	//}
	return $html;
}

/**
 * Returns the Previous and Next posts, if available
 * 7205, 7191, 7207
 * @param $parent
 * @param $child
 *
 * @return mixed
 *
 */
function sb_prevnext_getsiblings( $parent, $child ) {
	$pagelist=get_pages( "parent=$parent&sort_column=menu_order, post_title, ID&sort_order=asc" );
	//bw_trace2( $pagelist, "pagelist");
	$prev = null;
	$next = null;
	foreach ($pagelist as $i => $page) {
		//$pages[] += $page->ID;
		if ( $child === $page->ID ) {
			if ( $i > 0 ) {
				$prev = $pagelist[ $i - 1 ];
			}

			if ( $i < count( $pagelist  ) - 1 ) {
				$next = $pagelist[ $i + 1 ];
			}
		}
	}
	return [ $prev, $next ];
}

function sb_prevnext_get_link( $post, $class, $arrow_before, $arrow_after ) {
	if ( !$post ) {
		return null;
	}
	$html = "<div class=\"$class\">";
	$html .= '<a href="';
	$html .= get_permalink($post);
	$html .= '"';
	$html .= '/> ';
	$html .= $arrow_before;
	//$html .= $post->ID;
	//$html .= '';
	$html .= get_the_title($post);
	$html .= $arrow_after;
	$html .='</a>';
	$html .= "</div>";

	return $html;
}
