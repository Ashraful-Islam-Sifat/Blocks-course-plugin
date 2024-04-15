<?php

function blocks_course_plugin_register_template() {
    $post_type_object = get_post_type_object( 'post' );
    $post_type_object->template = array(
        array('create-block/metadata-block'),  
        array('core/paragraph', array('content' => 'some text')),
        array(
            'create-block/team-members', 
            array('columns' => 3),
            array(
                array('create-block/team-member'),
                array('create-block/team-member'),
                array('create-block/team-member')
            )
            )
    );
}
add_action( 'init', 'blocks_course_plugin_register_template' );