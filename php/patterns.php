<?php
function blocks_course_plugin_register_pattern_cat() {
    register_block_pattern_category( 'blocks-course', array(
        'label' => __('Blocks Course', 'blocks-course')
    ) );
}

add_action( 'init', 'blocks_course_plugin_register_pattern_cat' );

function blocks_course_plugin_register_pattern() {
    register_block_pattern( 'blocks-course/my-patterns', array(
        'title' => __('My Pattern', 'blocks-course'),
        'description' => __('description content', 'blocks-course'),
        'categories' => array('blocks-course'),
        'keywords' => array('my pattern'),
        'content' => '<!-- wp:columns --><div class="wp-block-columns"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading --><h2 class="wp-block-heading">Heading</h2><!-- /wp:heading --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:create-block/team-members --><div class="wp-block-create-block-team-members has-2-columns"><!-- wp:create-block/team-member --><div class="wp-block-create-block-team-member"></div><!-- /wp:create-block/team-member --><!-- wp:create-block/team-member --><div class="wp-block-create-block-team-member"></div><!-- /wp:create-block/team-member --><!-- wp:create-block/team-member --><div class="wp-block-create-block-team-member"></div><!-- /wp:create-block/team-member --></div><!-- /wp:create-block/team-members --></div><!-- /wp:column --></div><!-- /wp:columns -->'
    ) );
}
add_action( 'init', 'blocks_course_plugin_register_pattern');