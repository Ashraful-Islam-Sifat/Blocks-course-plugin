import { registerPlugin } from "@wordpress/plugins";
import { PluginSidebar, PluginDocumentSettingPanel, PluginMoreMenuItem, PluginPostStatusInfo, PluginPrePublishPanel, PluginPostPublishPanel } from "@wordpress/edit-post";
import { __ } from "@wordpress/i18n";
import { PanelBody, TextControl } from "@wordpress/components/build-types/panel/body";
import {useSelect, useDispatch} from '@wordpress/data'

const MeatFieldsInputs = () => {
    const SubtitleValue = useSelect((select)=> {
            return select('core/editor').getEditedPostAttribute('meta')
            ._blocks_course_post_subtitle;
        });
        const {editPost} = useDispatch('core/editor');
    return (
        <PanelBody title={__('Subtitle Options', 'blocks-course')}>
            <TextControl label= {__('Subtitle', 'blocks-course')} value={SubtitleValue}
            onChange = {(value) => {
                editPost({
                    meta: {_blocks_course_post_subtitle: value}
                })
            }}
             />
        </PanelBody>
    )
}

registerPlugin('blocks-course-plugin', {
    render: () => {       

        return (
            <>
             <PluginSidebar 
                 name="meta-fields-sidebar"
                 icon="admin-settings"
                 title={__('Post Options', 'blocks-course-plugin')}
             >
                <MeatFieldsInputs />
             </PluginSidebar>
            </>
        )
    }
})